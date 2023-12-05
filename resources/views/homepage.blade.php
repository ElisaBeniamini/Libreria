<x-layout>
    <x-slot name="title">
        Homepage
    </x-slot>
    <!-- Navigation-->
    <x-navbar />

    <!-- Testo di Invito header-->
    @auth




        <div class="container " style="margin-top: 200px">
            <div class="row d-flex justify-content-between text-center align-items-center ">
                <!-- Colonna Aggiungi Libro -->
                <div class="col-12 col-md-4  d-flex flex-column align-items-center  ">
                    <!--button add book-->
                    <a class="button-30 button-30-aggiungi-media text-center" href="{{ route('books.create') }}">
                        <i class="bi bi-plus fs-3 text-success"></i>
                        Aggiungi<br> Libro
                    </a>
                    <!-- Go library -->
                    <a href="{{ route('books.index') }}"
                        class="a-row-auth-homepage text-decoration-none fw-bolder  text-muted " style="font-size: 80px">
                        Libreria
                        <i class="bi bi-arrow-right-circle-fill  text-success text-gradient "></i>
                    </a>
                </div>
                <!-- Colonna Aggiungi Autore -->
                <div class="col-12 col-md-4 d-flex text-center flex-column align-items-center margin-column-homepage-media">
                    <!--button add author-->
                    <a class="button-30 button-30-aggiungi-media text-center" href="{{ route('authors.create') }}">
                        <i class="bi bi-plus fs-3 text-primary"></i>
                        Aggiungi <br> Autore
                    </a>
                    <!-- Go Author -->
                    <a href="{{ route('authors.index') }}" class=" text-decoration-none fw-bolder text-muted "
                        style="font-size: 80px">
                        Autori <br>
                        <i class="bi bi-arrow-right-circle-fill  text-primary text-gradient"></i>
                    </a>
                </div>
                <!-- Colonna Aggiungi Categoria -->
                <div class="col-12 col-md-4 d-flex text-center flex-column align-items-center margin-column-homepage-media">
                    <!--button add category-->
                    <a class="button-30 button-30-aggiungi-media text-center" href="{{ route('categories.create') }}">
                        <i class="bi bi-plus fs-3 text-dark"></i>
                        Aggiungi <br>
                        Categoria
                    </a>
                    <!-- go category -->
                    <a href="{{ route('categories.index') }}"class=" text-decoration-none fw-bolder text-muted "
                        style="font-size: 80px">
                        Categorie <br>
                        <i class="bi bi-arrow-right-circle-fill text-dark text-gradient"></i>
                    </a>
                </div>
            </div>
        </div>
    @endauth

    @guest
        <div class="container mt-5 ">
            <div class="row  p-3 d-flex justify-content-center   rounded-pill "
                style="box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
                <div class=" col-12 col-md-6 text-center ">
                    <h2>Incrementa la tua libreria personale e condividi le tue avventure letterarie con altri appassionati
                        della lettura!
                    </h2>

                </div>
            </div>
        </div>
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






    {{-- @guest
            <div class="row justify-content-center ">
                <div class="col-12 col-md-12 text-center d-flex justify-content-center align-items-center"
                    style="margin-top: 180px;  margin-left: 50px;">
                    <h1 style="color: rgb(51, 49, 49);font-size: 110px;"> Crea la tua libreria online!</h1>
                    <div>
                        <a href="{{ route('books.index') }}" class="text-decoration-none btn btn-outline-warning  fw-bolder "
                            style="box-shadow: rgba(0, 0, 0, 0.2) 0px 12px 28px 0px, rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;font-size:30px;color: rgb(51, 49, 49);margin-top: 100px;  ">Anteprima
                            Libreria
                        </a>
                        <a href="{{ route('authors.index') }}"class="text-decoration-none btn btn-outline-warning fw-bolder "
                            style="box-shadow: rgba(0, 0, 0, 0.2) 0px 12px 28px 0px, rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;font-size:30px;color: rgb(51, 49, 49);margin-top: 30px;  ">Anteprima
                            Autori
                        </a>
                    </div>
                </div>
            </div>
        @endguest --}}

























    <x-footer />
</x-layout>
