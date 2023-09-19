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
            <img style="width: 30em;height:35em" class="img-fluid " src="{{ Storage::url($book->image) }}"
                alt="{{ Storage::url($book->name) }}">
        </div>

        <div class="col-12 col-md-5 d-flex flex-column px-0 ">
            <div class="text-center">
                <p style="font-size:30px " class=" text-center ">
                    {{ $book['name'] }}
                </p>
                <div style=" font-size:20px;">
                    <span>Pagine: {{ $book['pages'] }}</span>
                    <br>
                    <span>Anno: {{ $book['year'] }}</span>

                    <p>Descrizione: <span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore
                            recusandae ut
                            illum est nulla
                        </span></p>
                </div>
            </div>
            <div class="mb-5">

                <a class="btn btn-outline-warning  text-black mb-2"
                    href="{{ route('books.edit', ['book' => $book->id]) }}">Modifica
                </a>

                <form action="{{ route('books.destroy', $book) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a class="btn btn-outline-warning text-black " type="submit">Elimina </a>
                </form>
            </div>
        </div>






        <x-footer />
</x-layout>
