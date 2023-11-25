<x-layout>
    <x-slot name="title">
        Libreria
    </x-slot>
    <x-navbar />
    <!-- Section-->
    <section class="mt-5">
        <div class="text-center">
            <h2>Libri caricati</h2>
            @auth
                <a class="button-30 button-30-aggiungi-media" href="{{ route('books.create') }}"> <i
                        class="bi bi-plus fs-3"></i> Aggiungi </a>
            @endauth
        </div>
    </section>
    <main class="index-book-media d-flex mb-5 mt-5">
        @if (isset($message))
            <div class=" col-12 col-md-10 d-flex flex-column justify-content-center align-items-center  text-center">
                <h2 class="text-warning ">{{ $message }}</h2>
                <img class="img-fluid img-default-media " src="\immagini\default-book.png" alt="">
            </div>
        @else
            <div class="container">
                <div class="row d-flex justify-content-center">
                    @foreach ($book as $item)
                        <div class="col-12 col-md-3 text-start  book-card" id="bookCard">
                            <div class="book-card__cover">
                                <div class="book-card__book">
                                    <div class="book-card__book-front">
                                        <img class="book-card__img border border-secondary"
                                            src="{{ empty($item->image) ? '/immagini/default.jpg' : Storage::url($item->image) }}"
                                            alt="Book Cover">
                                    </div>
                                    <div class="book-card__book-back"></div>
                                    <div class="book-card__book-side"></div>
                                </div>
                            </div>
                            <div class="book-card__info text-center">
                                <div class="book-card__title">
                                    <h5 class="text-capitalize">{{ $item['name'] }}</h5>
                                </div>
                                <div class="book-card__author">
                                    {{ $item->author->firstname . ' ' . $item->author->lastname }}
                                </div>

                                <a href="{{ route('books.show', ['book' => $item->uri]) }}"
                                    class=" mt-2 button-show-scopri-di-piu">
                                    <span class="text">Scopri di più</span>

                                </a>


                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

    </main>






    <x-footer />


</x-layout>
