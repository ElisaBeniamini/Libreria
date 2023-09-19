<x-layout>
    <x-slot name="title">
        Homepage
    </x-slot>
    <!-- Navigation-->
    <x-navbar />

    <!-- img sfondo-->
    <section class="container-fluid opacity-50"
        style=" width: 100%; z-index: -1;height: 100%;top: 0;left: 0;background: url(/immagini/img-1.jpg) no-repeat center top;position: fixed;background-size: cover; ">
    </section>

    <div class="row d-flex justify-content-center">
        <!-- title header-->
        <div class="col-12 col-md-12 text-center d-flex" style="margin-top: 180px;  margin-left: 50px;">
            <div>
                <h1 style="color: rgb(51, 49, 49);font-size: 110px;"> Crea la tua libreria online!</h1>
            </div>
            @guest
                <div>
                    <a href="{{ route('books.index') }}" class="text-decoration-none btn btn-outline-warning  fw-bolder "
                        style="box-shadow: rgba(0, 0, 0, 0.2) 0px 12px 28px 0px, rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;font-size:30px;color: rgb(51, 49, 49);margin-top: 100px;  ">Anteprima
                        Libreria
                    </a>
                    <a href="{{ route('authors.index') }}"class="text-decoration-none btn btn-outline-warning fw-bolder "
                        style="box-shadow: rgba(0, 0, 0, 0.2) 0px 12px 28px 0px, rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;font-size:30px;color: rgb(51, 49, 49);margin-top: 30px;  ">Lista
                        Autori
                    </a>
                </div>
            @endguest
            @auth
                <div class="d-flex flex-column mx-5 ">
                    <a href="{{ route('books.index') }}" class="text-decoration-none btn btn-outline-warning  fw-bolder  "
                        style="box-shadow: rgba(0, 0, 0, 0.2) 0px 12px 28px 0px, rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;font-size:25px;color: rgb(51, 49, 49)">
                        <i class="bi bi-book bg-trasparent  fs-3"></i>
                        Libreria
                    </a>
                    <a href="{{ route('authors.index') }}"
                        class="text-decoration-none btn btn-outline-warning  fw-bolder my-3 "
                        style="box-shadow: rgba(0, 0, 0, 0.2) 0px 12px 28px 0px, rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;font-size:25px;color: rgb(51, 49, 49)">
                        <i class="bi bi-book bg-trasparent  fs-3"></i>
                        Lista autori
                    </a>

                    <a href="{{ route('books.create') }}"class="text-decoration-none btn btn-outline-warning fw-bolder mb-3"
                        style="box-shadow: rgba(0, 0, 0, 0.2) 0px 12px 28px 0px, rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;font-size:25px;color: rgb(51, 49, 49)">
                        <i class="bi bi-book bg-trasparent  fs-3"></i>
                        Aggiungi libro

                    </a>

                    <a href="{{ route('authors.index') }}" class="text-decoration-none btn btn-outline-warning  fw-bolder  "
                        style="box-shadow: rgba(0, 0, 0, 0.2) 0px 12px 28px 0px, rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;font-size:25px;color: rgb(51, 49, 49)">
                        <i class="bi bi-book bg-trasparent  fs-3"></i>
                        Aggiungi Autore
                    </a>

                </div>
            @endauth


        </div>
        <!--guest e auth-->



    </div>





    <x-footer />
</x-layout>
