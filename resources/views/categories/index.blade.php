<x-layout>
    <x-slot name="title">
        Categorie libri
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
        <div style="padding-top: 80px" class="text-center text-success mt-3">
            <h2>Categorie caricate</h2>
            @auth
                <a class="btn btn-outline-success" href="{{ route('categories.create') }}">Aggiungi nuova categoria</a>

            @endauth
        </div>


        <div class="row  d-flex justify-content-center mt-5">
            <div class="col-6 d-flex justify-content-center ">
                <table class="table border mt-2 text-center">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $category)
                            <tr>
                                <th scope="row">{{ $category->id }}</th>
                                <td>{{ $category->name }}</td>

                                <td>
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <a href="{{ route('categories.show', $category) }}"
                                            class="btn btn-outline-success  text-black">Visualizza</a>
                                        @auth
                                            <a class="btn btn-outline-warning  text-black "
                                                href="{{ route('categories.edit', ['category' => $category->id]) }}">Modifica
                                            </a>

                                            <form
                                                action="{{ route('categories.destroy', ['category' => $category['id']]) }}"
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
            </div>
        </div>




    </section>






    </div>


    <x-footer />
</x-layout>
