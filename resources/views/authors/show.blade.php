<x-layout>
    <x-slot name="title">
        Dettaglio Autore
    </x-slot>
    <x-navbar />

    <a class="btn btn-outline-warning  text-black mx-2 " style="margin-top: 90px" href=" {{ route('authors.index') }}">
        <i class="bi bi-backspace-fill "></i>
        Torna Indietro
    </a>
    <div class="row d-flex justify-content-center  text-center align-items-center" style="margin-bottom:25px; ">
        <div class="col-12 col-md-12 mb-3 ">
            <h1>Dettagli Autore</h1>
        </div>
        <div class="row d-flex align-items-center">

            <div class="col-12 col-md-6 ">
                <img class="img-fluid " style="width: 300px" src="\immagini\img2.jpg" alt="">
            </div>

            <div class="col-12 col-md-4 d-flex flex-column  ">
                <div class="text-center" style="font-size:25px ">
                    <p> Nome : {{ $author['firstname'] }} </p>
                    <p>Cognome : {{ $author['lastname'] }}</p>
                    <p>Anno di nascita: {{ $author['birthday'] }}</p>
                    <p>Biografia:
                        <span style="font-size: 20px " class="fst-italic"> Lorem ipsum dolor sit amet
                            consectetur,adipisicing elit.</span>
                    </p>
                </div>
                @auth
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-outline-warning  text-black mx-3"
                            href="{{ route('authors.edit', ['author' => $author->id]) }}">Modifica
                        </a>
                        <form action="{{ route('authors.destroy', compact('author')) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a class="btn btn-outline-warning text-black " type="submit">Elimina </a>
                        </form>

                    </div>
                @endauth
            </div>

        </div>






        <x-footer />
</x-layout>
