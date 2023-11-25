<x-layout>
    <x-slot name="title">
        Dettaglio libro
    </x-slot>
    <x-navbar />
    <!-- Section-->
    <section class="mt-3">
        <div class="text-center">
            <h2 class="text-capitalize"> Dettagli</h2>
            @auth
                <a class="button-30 button-30-aggiungi-media" href="{{ route('books.create') }}"> <i
                        class="bi bi-plus fs-3"></i> Libro </a>
            @endauth
        </div>
    </section>
    <div class="row mt-5 d-flex justify-content-center  text-center align-items-center" style="margin-bottom:25px; ">
        <div class="col-12 col-md-6 px-0 d-flex justify-content-end  ">
            <img style="width: 20em;height:30em" class="img-fluid"
                src="{{ empty($book->image) ? '/immagini/default.jpg' : Storage::url($book->image) }}"
                alt="{{ Storage::url($book->name) }}">
        </div>




        <div class="col-12 col-md-5 d-flex flex-column px-0 align-items-center  ">
            <div class="text-start">


                <div>
                    <h2 class="text-capitalize"> {{ $book['name'] }}</h2>
                    <h5 class="mt-5">Pagine: {{ $book->pages }}</h5>
                    <h5>Anno: {{ $book->year }}</h5>
                    <h5>Autore: {{ $book->author->firstname . ' ' . $book->author->lastname }} </h5>
                </div>
            </div>
            @auth
                <div class="d-flex mt-5">
                    <a class=" button-30 text-secondary mx-2"
                        href="{{ route('books.edit', ['book' => $book->id]) }}">Modifica
                    </a>

                    <form action="{{ route('books.destroy', $book) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class=" button-30 text-danger" type="submit">Elimina </button>
                    </form>
                </div>

            @endauth



        </div>


        <x-footer />
</x-layout>
