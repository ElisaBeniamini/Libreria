<x-layout>
    <x-slot name="title">
        Homepage
    </x-slot>
    <!-- Navigation-->
    <x-navbar />

    <!-- Testo di Invito header-->
    @auth
        <div class="container">
            <div class="row d-flex  text-center align-self-center row-authHomepage-media">
                <!-- Colonna Aggiungi Libro -->
                <div class="col-12 col-md-4 p-3 d-flex flex-column align-items-center  ">
                    <!--button add book-->
                    <a class="button-30 button-30-aggiungi-media text-center" href="{{ route('books.create') }}">
                        <i class="bi bi-plus fs-2 text-success"></i>
                        Aggiungi<br> Libro
                    </a>
                    <!-- Go library -->
                    <a href="{{ route('books.index') }}"
                        class="a-row-auth-homepage text-decoration-none fw-bolder  text-muted " style="font-size: 50px">
                        Libreria
                        <i class="bi bi-arrow-right-circle-fill  text-success text-gradient "></i>
                    </a>
                </div>
                <!-- Colonna Aggiungi Autore -->
                <div
                    class="col-12 col-md-4 p-3 d-flex text-center flex-column align-items-center margin-column-homepage-media">
                    <!--button add author-->
                    <a class="button-30 button-30-aggiungi-media text-center" href="{{ route('authors.create') }}">
                        <i class="bi bi-plus fs-3 text-primary"></i>
                        Aggiungi <br> Autore
                    </a>
                    <!-- Go Author -->
                    <a href="{{ route('authors.index') }}" class=" text-decoration-none fw-bolder text-muted "
                        style="font-size:50px">
                        Autori
                        <i class="bi bi-arrow-right-circle-fill  text-primary text-gradient"></i>
                    </a>
                </div>
                <!-- Colonna Aggiungi Categoria -->
                <div
                    class="col-12 col-md-4 p-3 d-flex text-center flex-column align-items-center margin-column-homepage-media">
                    <!--button add category-->
                    <a class="button-30 button-30-aggiungi-media text-center" href="{{ route('categories.create') }}">
                        <i class="bi bi-plus fs-3 text-dark"></i>
                        Aggiungi <br>
                        Categoria
                    </a>
                    <!-- go category -->
                    <a href="{{ route('categories.index') }}"class=" text-decoration-none fw-bolder text-muted "
                        style="font-size: 50px">
                        Categorie
                        <i class="bi bi-arrow-right-circle-fill  "></i>
                    </a>
                </div>
            </div>
        </div>
    @endauth

    @guest
        <div class="container mt-5 ">
            <div class="row  p-3 d-flex justify-content-center   rounded-pill ">
                <div class=" col-12 col-md-7 text-start ">
                    <h3>Esplora e condividi le tue avventure letterarie su una libreria online dedicata agli appassionati
                        della lettura!
                    </h3>

                </div>
            </div>

        </div>
    @endguest
    <div class="container mt-5" style="margin-bottom: 150px">
        <div class="row d-flex justify-content-center"
            style="box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
            @foreach ($latestBooks as $item)
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
    @guest
        <!-- Griglia collegamenti ai vari index -->
        <div class="container "style="margin-bottom: 200px">
            <!-- Visita librerie-->
            <div class="row rounded mt-5 d-flex justify-content-center">
                <div class="col-12 col-md-7 p-0">
                    <img class="rounded" width="100%" height="250px" src="\immagini\libreria-guest.jpg"
                        style="object-fit: cover" alt="">
                </div>
                <div class=" col-12 col-md-5 text-center text-dark  align-self-center">
                    <h3 style="font-size: 45px">Visita alcune librerie!</h3>
                    <a style="font-size: 30px" class="text-decoration-none text-secondary"
                        href="{{ route('books.index') }}"> Scopri di più
                        <i class="bi bi-arrow-right-circle-fill ">
                        </i>
                    </a>
                </div>
            </div>
            <!-- Visita autori-->
            <div class="row rounded mt-5 d-flex justify-content-center">
                <div class=" col-12 col-md-5 text-center text-dark align-self-center">
                    <h3 style="font-size: 45px">Autori </h3>
                    <a style="font-size: 30px" class="text-decoration-none text-secondary"
                        href="{{ route('authors.index') }}">Scopri di più
                        <i class="bi bi-arrow-right-circle-fill ">
                        </i>
                    </a>
                </div>
                <div class="col-12 col-md-7  p-0">
                    <img width="100%" height="250px" class="rounded" style="object-fit: cover"
                        src="\immagini\authors-homepage.jpg" alt="">
                </div>
            </div>
            <!-- Visita categorie-->
            <div class="row rounded mt-5 mb-5 d-flex justify-content-center ">
                <div class="col-12 col-md-7  p-0">
                    <img width="100%" height="250px" class="rounded" style="object-fit: cover"
                        src="\immagini\category_homepage.jpg" alt="">
                </div>
                <div class=" col-12 col-md-5 text-center text-dark align-self-center">
                    <h3 style="font-size: 45px">Categorie </h3>
                    <a style="font-size: 30px" class="text-decoration-none text-secondary"
                        href="{{ route('authors.index') }}">Scopri di più
                        <i class="bi bi-arrow-right-circle-fill ">
                        </i>
                    </a>
                </div>

            </div>
        </div>
    @endguest
































    <x-footer />
</x-layout>
