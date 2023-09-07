<x-layout>

    <x-slot name="title">
        Libreria
    </x-slot>

    <x-navbar />

    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Libreria Larav-Datab</h1>
                <p class="lead fw-normal text-white-50 mb-0">Aggiungi libri alla tua collezione</p>
            </div>
        </div>
    </header>




    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                @foreach ($book as $item)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <div class="card-body p-4">
                                <h5 class="fw-bolder text-center">{{ $item['name'] }}</h5>

                                <img src="https://picsum.photos/200
                                " alt="">
                                <div class="text-center pb-3 pt-4 ">
                                    <span>Numero di pagine: {{ $item['pages'] }}</span>
                                    <hr class="p-0 m-0">
                                    <span>Anno di pubblicazione: {{ $item['year'] }}</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                        href="{{ route('books.show', ['book' => $item->id]) }}">Vedi dettagli <br>
                                        {{ $item['nome'] }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach ()








            </div>
        </div>
    </section>





    <div style="height:1200px ">

    </div>


    <x-footer />
</x-layout>
