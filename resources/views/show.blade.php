<x-layout>
    <x-slot name="title">
        Dettaglio libro
    </x-slot>
    <x-navbar />


    <div class="container-fluid d-flex justify-content-center   mt-0 p-0 ">

        <div class="row mt-3 d-flex justify-content-center  align-items-center  m-0 p-0">
            <div class="col-12 col-md-4">
                <img class="img-fluid mb-5" src="{{ Storage::url($book->image) }}" alt="
                "
                    alt="{{ Storage::url($book->name) }}">
            </div>
            <div class="col-12 col-md-6 m-0 p-0 ">
                <div class="text-center    ">
                    <p style="font-family: 'Courier New', Courier, monospace; font-size:40px "
                        class=" text-center text-warning">
                        {{ $book['name'] }}</p>
                    <div style=" font-size:25px">
                        <p>Numero di pagine: {{ $book['pages'] }}</p>
                    </div>
                    <div style=" font-size:25px">
                        <p>Anno di pubblicazione: {{ $book['year'] }}</p>
                    </div>


                    <a class="btn btn-outline-dark mt-auto" href=" {{ route('books.index') }}">
                        <i class="bi bi-backspace-fill mx-2"></i>
                        Torna Indietro
                    </a>


                    <a class="btn btn-outline-dark mt-auto"
                        href="{{ route('books.show', ['book' => $book->id]) }}">Acquista
                        Libro
                        <br>
                        {{ $book['nome'] }}</a>


                </div>
            </div>
        </div>
    </div>





    <x-footer />
</x-layout>
