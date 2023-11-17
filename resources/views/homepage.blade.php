<x-layout>
    <x-slot name="title">
        Homepage
    </x-slot>
    <!-- Navigation-->
    <x-navbar />



    <div class="container mb-5">

        @guest
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
        @endguest


        @auth
            <div class="row  d-flex text-center align-items-center ">
                <div class="col-12 col-md-4  d-flex flex-column align-items-center  ">
                    <a href="{{ route('books.index') }}"
                        class="a-row-auth-homepage text-decoration-none fw-bolder fs-1 text-muted ">
                        <i class="bi bi-book bg-trasparent "></i> Libreria
                        <img class="img-fluid img-homepage" width="330px" src="\immagini\libreria.jpg"
                            alt="immagine libreria ">
                    </a>
                </div>
                <div class="col-12 col-md-4 d-flex text-center flex-column align-items-center margin-column-homepage-media">
                    <a href="{{ route('authors.index') }}" class=" text-decoration-none fw-bolder fs-1 text-muted ">
                        <i class="bi bi-book bg-trasparent "></i> Autori
                        <img class="img-fluid img-homepage" width="330px" src="\immagini\GIU AMA 008-05.jpg"
                            alt="immagine piuma e inchiostro">
                    </a>
                </div>
                <div
                    class="col-12 col-md-4 d-flex text-center flex-column align-items-center  margin-column-homepage-media">
                    <a href="{{ route('categories.index') }}"class=" text-decoration-none fw-bolder fs-1 text-muted ">
                        <i class="bi bi-book bg-trasparent"></i>
                        Categorie
                        <img class="img-fluid  img-homepage" width="330px" src="\immagini\img2.jpg"
                            alt="imamgine penna ed inchiostro">

                    </a>
                </div>
            </div>
        @endauth

    </div>
















    <x-footer />
</x-layout>
