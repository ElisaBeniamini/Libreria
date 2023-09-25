<x-layout>
    <x-slot name="title">
        Libreria
    </x-slot>
    <x-navbar />
    <!-- Section-->
    <section>

        <div style="margin-top: 90px" class="text-center">
            <h2>Libri caricati</h2>
            @auth
                <a class="btn btn-outline-success" href="{{ route('books.create') }}">Aggiungi nuovo libro</a>

            @endauth

        </div>
        <div class="container " style="margin-top:10px">
            @if (session('success'))
                <div class="alert alert-success d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                        <use xlink:href="#check-circle-fill" />
                    </svg>
                    <div>
                        {{ session('success') }}
                    </div>
                </div>
            @endif
            <div class="row  justify-content-center ">

                @foreach ($book as $item)
                    <div class="card align-items-center flex-column mx-3 mb-5  text-right" style="width: 18rem;">
                        <h5 class="card-title">
                            <h5 class="fw-bolder text-center">{{ $item['name'] }}</h5>
                        </h5>
                        <img src="{{ empty($item->image) ? '/immagini/default.jpg' : Storage::url($item->image) }}"
                            class="card-img-top mt-3 " style="width: 150px" alt="{{ $item->name }}">
                        <div class="card-body px-1" style="font-size: 15px">
                            <span class="card-text fw-bold ">Numero di pagine:</span> {{ $item['pages'] }} <br>
                            <span class="card-text fw-bold pt-2">Anno di pubblicazione: </span>{{ $item['year'] }} <br>
                            <span class="card-text fw-bold">Autore:</span>
                            {{ $item->author->firstname . ' ' . $item->author->lastname }}
                        </div>

                        <a href="{{ route('books.show', ['book' => $item->uri]) }}" class=" btn btn-info my-2"
                            style="box-shadow: rgba(0, 0, 0, 0.2) 0px 12px 28px 0px, rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;color: rgb(51, 49, 49);">Vedi
                            dettagli <br>
                            {{ $item['nome'] }}</a>

                    </div>
                @endforeach ()








            </div>
        </div>
    </section>






    </div>


    <x-footer />
</x-layout>
