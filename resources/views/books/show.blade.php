<x-layout>
    <x-slot name="title">
        Dettaglio libro
    </x-slot>
    <x-navbar />
    <div style="margin-top: 100px; margin-bottom:30px" class="d-flex justify-content-center mb-0">
        <h2 style="color: rgb(61, 57, 57)">Dettagli Libro</h2>

    </div>

    <div class="row d-flex justify-content-center  text-center align-items-center  " style="margin-bottom:100px ">
        <div class="col-12 col-md-6 mb-0">
            <img class="img-fluid w-50" src="{{ Storage::url($book->image) }}" alt="{{ Storage::url($book->name) }}">
        </div>
        <div class="col-12 col-md-5 d-flex  ">
            <div class="text-center" style="margin-right:220px">
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
                    <i class="bi bi-backspace-fill "></i>
                    Torna Indietro
                </a>
                <a class="btn btn-outline-dark mt-auto" href="{{ route('books.edit', ['book' => $book->id]) }}">Modifica
                </a>

                <form action="{{ route('books.destroy', $book) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-outline-dark mt-auto" type="submit">Elimina </button>
                </form>

            </div>
        </div>
    </div>






    <x-footer />
</x-layout>
