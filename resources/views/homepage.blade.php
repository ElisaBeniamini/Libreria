<x-layout>
    <x-slot name="title">
        Homepage
    </x-slot>
    <!-- Navigation-->
    <x-navbar />
    <!-- Testo di Invito -->
    <div class="container rounded">
        <div class="row mt-5 mb-5 d-flex justify-content-center">
            <div class=" col-12 col-md-12 text-center">
                <h1>Riempi la tua libreria personale!</h1>
                <h3 class="mb-5 mt-4 ">AGGIUNGI I LIBRI CHE HAI LETTO {{-- E CONDIVIDI LE TUE ESPERIENZE LETTERARIE CON ALTRI 
                    APPASSIONATI! --}}
                </h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row rounded d-flex justify-content-center">
            <div class="col-12 col-md-6 p-0">
                <img class="rounded" width="100%" height="250px" src="\immagini\libreria-guest.jpg"
                    style="object-fit: cover" alt="">
            </div>
            <div class=" col-12 col-md-6 text-center text-dark  align-self-center">
                <h3 style="font-size: 45px">Visita alcune librerie!</h3>
                <a style="font-size: 30px" class="text-decoration-none text-secondary"
                    href="{{ route('books.index') }}">Scopri di più
                    <i class="bi bi-arrow-right-circle-fill ">
                    </i>
                </a>
            </div>
        </div>

        <div class="row rounded d-flex justify-content-center">
            <div class=" col-12 col-md-6 text-center text-dark align-self-center">
                <h3 style="font-size: 45px">Autori </h3>
                <a style="font-size: 30px" class="text-decoration-none text-secondary"
                    href="{{ route('authors.index') }}">Scopri di più
                    <i class="bi bi-arrow-right-circle-fill ">
                    </i>
                </a>
            </div>
            <div class="col-12 col-md-6  p-0">
                <img width="100%" height="250px" class="rounded" style="object-fit: cover"
                    src="\immagini\authors-homepage.jpg" alt="">
            </div>
        </div>

        <div class="row rounded d-flex justify-content-center ">
            <div class="col-12 col-md-6  p-0">
                <img width="100%" height="250px" class="rounded" style="object-fit: cover"
                    src="\immagini\category_homepage.jpg" alt="">
            </div>
            <div class=" col-12 col-md-6 text-center text-dark align-self-center">
                <h3 style="font-size: 45px">Categorie </h3>
                <a style="font-size: 30px" class="text-decoration-none text-secondary"
                    href="{{ route('authors.index') }}">Scopri di più
                    <i class="bi bi-arrow-right-circle-fill ">
                    </i>
                </a>
            </div>

        </div>

    </div>
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
    <div class="container mt-5">
        @auth
            <!-- Colonna Aggiungi Libro -->
            <div class=" row  d-flex justify-content-evenly text-center align-items-center "
                style="box-shadow: rgba(17, 17, 26, 0.1) 0px 4px 16px, rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px;">
                <div class="col-12 col-md-4  d-flex flex-column align-items-center  ">
                    <a class="button-30 button-30-aggiungi-media text-center" href="{{ route('books.create') }}">
                        <i class="bi bi-plus fs-3"></i>
                        Aggiungi <br>
                        Libro
                    </a>
                    <a href="{{ route('books.index') }}"
                        class="a-row-auth-homepage text-decoration-none fw-bolder fs-1 text-muted ">
                        <i class="bi bi-book bg-trasparent "></i>
                        Libreria <br>
                        <i class="bi bi-arrow-right-circle-fill iconahomepage"></i>
                    </a>
                </div>
                <!-- Colonna Aggiungi Autore -->
                <div class="col-12 col-md-4 d-flex text-center flex-column align-items-center margin-column-homepage-media">
                    <a class="button-30 button-30-aggiungi-media text-center" href="{{ route('authors.create') }}">
                        <i class="bi bi-plus fs-3"></i>
                        Aggiungi <br>
                        Autore
                    </a>
                    <a href="{{ route('authors.index') }}" class=" text-decoration-none fw-bolder fs-1 text-muted ">
                        <i class="bi bi-book bg-trasparent "></i>
                        Autori <br>
                        <i class="bi bi-arrow-right-circle-fill iconahomepage"></i>
                    </a>
                </div>
                <!-- Colonna Aggiungi Categoria -->
                <div
                    class="col-12 col-md-4 d-flex text-center flex-column align-items-center  margin-column-homepage-media">
                    <a class="button-30 button-30-aggiungi-media text-center" href="{{ route('categories.create') }}">
                        <i class="bi bi-plus fs-3"></i>
                        Aggiungi <br>
                        Categoria
                    </a>
                    <a href="{{ route('categories.index') }}"class=" text-decoration-none fw-bolder fs-1 text-muted ">
                        <i class="bi bi-book bg-trasparent"></i>
                        Categorie <br>
                        <i class="bi bi-arrow-right-circle-fill iconahomepage"></i>
                    </a>
                </div>
            </div>
        @endauth
    </div>























    <x-footer />
</x-layout>
