<x-layout>
    <x-slot name="title">
        Libreria
    </x-slot>
    <x-navbar />
    <!-- Section-->
    <section>
        @if (session('success'))
            <div class="alert alert-success mt-4 d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                    <use xlink:href="#check-circle-fill" />
                </svg>
                <div>
                    {{ session('success') }}
                </div>
            </div>
        @endif
        <div style="padding-top: 80px" class="text-center">
            <h2>Autori caricati</h2>
            <a class="btn btn-outline-dark" href="{{ route('authors.create') }}">Aggiungi nuovo Autore</a>
        </div>


        <table class="table border mt-2">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Cognome</th>
                    <th scope="col">Anno di nascita</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($authors as $author)
                    <tr>
                        <th scope="row">{{ $author->id }}</th>
                        <td>{{ $author->firstname }}</td>
                        <td>{{ $author->lastname }}</td>
                        <td>{{ $author->birthday }}</td>
                        <td>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="{{ route('authors.show', $author) }}"
                                    class="btn btn-outline-success  text-black">Visualizza</a>
                                @auth
                                    <a class="btn btn-outline-warning  text-black "
                                        href="{{ route('authors.edit', ['author' => $author->id]) }}">Modifica
                                    </a>

                                    <form action="{{ route('authors.destroy', ['author' => $author['id']]) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-outline-danger text-black" type="submit">
                                            Elimina
                                        </button>
                                    </form>
                                @endauth
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr colspan="4"> </tr>
                @endforelse
            </tbody>
        </table>






    </section>






    </div>


    <x-footer />
</x-layout>
