<x-layout>
    <x-slot name="title">
        Dettaglio Autore
    </x-slot>
    <x-navbar />

    <a class="btn btn-outline-warning  text-black mx-2 " style="margin-top: 90px" href=" {{ route('authors.index') }}">
        <i class="bi bi-backspace-fill "></i>
        Torna Indietro
    </a>
    <div class="container-fluid mt-5">
        <div class="row d-flex justify-content-center text-center align-items-center text-success">
            <div class="col-12 col-md-6  d-flex justify-content-center">
                <h1>Dettagli Autore</h1>
            </div>
            <div class="col-12 col-md-6 mb-3 ">
                <h1>Lista Libri Autore</h1>
            </div>
        </div>
        <div class="row d-flex align-items-center justify-content-center text-center">
            <div class="col-12 col-md-6 d-flex flex-column  ">
                <div class="text-center" style="font-size:20px ">
                    <p> Nome : {{ $author['firstname'] }} </p>
                    <p>Cognome : {{ $author['lastname'] }}</p>
                    <p>Anno di nascita: {{ $author['birthday'] }}</p>
                </div>
                @auth
                    <div class="d-flex justify-content-center ">
                        <a class="btn btn-outline-warning text-black mx-3"
                            href="{{ route('authors.edit', ['author' => $author->id]) }}">Modifica
                        </a>
                    </div>
                @endauth
            </div>
            <div class="col-12 col-md-6 d-flex  ">
                <table class="table border ">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome libro</th>
                            <th scope="col">N°pagine</th>
                            <th scope="col">Anno di uscita</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($author->book as $book)
                            <tr>
                                <th scope="row">{{ $book->id }}</th>
                                <td>{{ $book['name'] }}</td>
                                <td>{{ $book['pages'] }}</td>
                                <td>{{ $book['year'] }}</td>
                            </tr>
                        @empty
                            <tr colspan="4"> </tr>
                        @endforelse
                    </tbody>

                </table>






            </div>
        </div>





        <x-footer />
</x-layout>
