<x-layout>

    <x-slot name="title">
        Libreria
    </x-slot>

    <x-navbar />
    <!-- Section-->
    <section>
        <div style="margin-top: 150px" class="text-center">
            <h2>Libri caricati</h2>
            <a class="btn btn-outline-dark" href="{{ route('books.create') }}">Aggiungi nuovo libro</a>

        </div>
        <div class="container px-4 px-lg-5 " style="margin-top: 50px">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center ">

                @foreach ($book as $item)
                    <div class="col  ">
                        <div class="card">
                            <div class="card-body  mh-100  ">
                                <h5 class="fw-bolder text-center">{{ $item['name'] }}</h5>

                                <img class="img-fluid mw-50" src="{{ Storage::url($item->image) }}"
                                    alt="{{ $item->name }}">

                                <div class="text-center pb-2 pt-2 ">
                                    <span>Numero di pagine: {{ $item['pages'] }}</span>
                                    <hr class="p-0 m-0">
                                    <span>Anno di pubblicazione: {{ $item['year'] }}</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a class="btn btn-outline-dark mt-auto"
                                        href="{{ route('books.show', ['book' => $item->uri]) }}">Vedi dettagli <br>
                                        {{ $item['nome'] }}
                                    </a>


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
