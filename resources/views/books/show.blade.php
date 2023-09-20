<x-layout>
    <x-slot name="title">
        Dettaglio libro
    </x-slot>
    <x-navbar />

    <a class="btn btn-outline-warning  text-black " style="margin-top: 90px" href=" {{ route('books.index') }}">
        <i class="bi bi-backspace-fill "></i>
        Torna Indietro
    </a>
    <div class="row d-flex justify-content-center  text-center align-items-center" style="margin-bottom:25px; ">
        <div class="col-12 col-md-6 px-0">
            <img style="width: 20em;height:30em" class="img-fluid " src="{{ Storage::url($book->image) }}"
                alt="{{ Storage::url($book->name) }}">
        </div>

        <div class="col-12 col-md-5 d-flex flex-column px-0 align-items-center  ">
            <div class="text-center">
                <p style="font-size:30px " class=" text-center ">
                    {{ $book['name'] }}
                </p>
                <div style=" font-size:20px;">
                    <p>Pagine: {{ $book->pages }}</p>
                    <p>Anno: {{ $book->year }}</p>
                    <p>Autore: {{ $book->author->firstname . ' ' . $book->author->lastname }} </p>
                </div>
            </div>
            @auth
                <div class="d-flex">
                    <a class="btn btn-outline-warning  text-black mx-2"
                        href="{{ route('books.edit', ['book' => $book->id]) }}">Modifica
                    </a>

                    <form action="{{ route('books.destroy', $book) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger text-black " type="submit">Elimina </button>
                    </form>
                </div>

            @endauth
        </div>






        <x-footer />
</x-layout>
