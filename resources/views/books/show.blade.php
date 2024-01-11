<x-layout>
    <x-slot name="title">
        Dettaglio libro
    </x-slot>
    <x-navbar />

    <!-- Section-->

    @auth
        <div class="d-flex  justify-content-center">
            <div>
                <a class=" button-30 button-30-aggiungi-media text-secondary "
                    href="{{ route('books.edit', ['book' => $book->id]) }}">Modifica
                </a>
            </div>

            <form action="{{ route('books.destroy', $book) }}" method="POST" class="mx-1">
                @csrf
                @method('DELETE')
                <button class=" button-30 button-30-aggiungi-media text-danger" type="submit">Elimina </button>
            </form>

            <div>
                <a class="button-30 button-30-aggiungi-media" href="{{ route('books.create') }}">
                    <i class="bi bi-plus fs-4"></i>
                    Libro
                </a>
            </div>

        </div>

    @endauth


    <div class="container mt-5 " style="margin-bottom: 500px">
        <div class="row  d-flex justify-content-center">
            <!--immagine dettaglio libro-->
            <div class="col-12 col-md-6 ">
                <div id="book" class="view-cover">
                    <div class="main">
                        <div class="book-font">
                            <div class="book-cover">
                                @if (empty($book->image))
                                    <img class="img-fluid custom-image" src="/immagini/default.jpg" alt="Book Cover">
                                @else
                                    <img class="img-fluid" src="{{ Storage::url($book->image) }}" alt="Book Cover">
                                @endif
                            </div>
                            <div class="book-cover-back"></div>
                        </div>
                        <div class="book-back">
                            <div class="isbn">
                            </div>
                        </div>
                        <div class="book-top"></div>
                        <div class="book-right"></div>
                        <div class="book-bottom"></div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-5  d-flex mt-2 flex-column align-items-center detail-book-media">
                <div class="text-capitalize ">
                    <h1> {{ $book['name'] }}</h1>
                    <h3 class="mt-3">Totale Pagine: {{ $book->pages }}</h3>
                    <h3>Anno: {{ $book->year }}</h3>
                    <h3>Autore: {{ $book->author->firstname . ' ' . $book->author->lastname }} </h3>
                </div>
                <div class="d-flex flex-column align-items-center">
                    <button
                        class="accordion button-30
                    "style="margin-top:30px;">Descrizione</button>
                    <div class="panel">
                        @if (empty($book->descrizione))
                            <p class="text-center text-danger">Non disponibile</p>
                        @else
                            <p>{{ $book->descrizione }}</p>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>


    {{-- <div class="accordion mt-5 " id="accordionExample">
                    <div class="accordion-item mt-5">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Descrizione
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p style="scrollable-description">{{ $book->descrizione }}</p>
                            </div>
                        </div>
                    </div>
                </div> --}}

    {{-- <label class="accordion-wrapper">
                    <input type="checkbox" class="accordion" hidden />
                    <div class="title">
                        <strong>Pure CSS Accordion</strong>
                        <svg viewBox="0 0 256 512" width="12" title="angle-right" class="side-icon" fill="white">
                            <path
                                d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" />
                        </svg>
                        <svg viewBox="0 0 320 512" height="24" title="angle-down" class="down-icon" fill="white">
                            <path
                                d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z" />
                        </svg>
                    </div>
                    <div class="content">
                        <p>Content</p>
                    </div>
                </label> --}}





    <!-- <div class="col-12 col-md-12  book-card" id="bookCard">
                <div class="book-card__cover">
                    <div class="book-card__book">
                        <div class="book-card__book-front">
                            <img class="book-card__img border border-secondary"
                                src="{{ empty($book->image) ? '/immagini/default.jpg' : Storage::url($book->image) }}"
                                alt="Book Cover">
                        </div>
                        <div class="book-card__book-back"></div>
                        <div class="book-card__book-side"></div>
                    </div>
                </div>
            </div>

       

        </div>
    </div>

-->

    <x-footer />
</x-layout>
