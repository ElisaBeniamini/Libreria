<x-layout>
    <x-slot name="title">
        Homepage
    </x-slot>

    <!-- Navigation-->
    <x-navbar />
    <x-header />

    <div class="container  ">
        <img class="img-fluid object-fit-cover opacity-50" src="\immagini\img-1.jpg" alt="sfondo-libri">

        <div style=" position:absolute; top:15 " class=" row  d-flex text-dark opacity-80  text-center ">
            <div class="col-12 col-md-12 d-flex flex-column align-items-center ">
                <h1 style="font-size: 150px; ">Crea la tua libreria online!</h1>
                <div>
                    <a class="text-decoration-none btn btn-warning fs-3 w-100  "
                        href="{{ route('books.index') }}">Anteprima
                        Libreria</a>
                </div>
            </div>


            @auth
                <div data-aos="fade-left">

                    <div class="d-flex flex-column" style=" position-absolute top-50 end-0 translate-middle-y">
                        <a href="{{ route('books.index') }}" class=" my-2 btn btn-outline-warning text-black fs-4">I tuoi
                            libri
                            <br>
                            <i class=" fs-4 bi bi-arrow-right"></i>
                        </a>

                        <a href="{{ route('books.create') }}" class=" btn btn-outline-warning text-black fs-5 ">Aggiungi
                            libro <br>
                            <i class=" fs-4 bi bi-arrow-right"></i>
                        </a>
                    </div>
                @endauth
            </div>
        </div>


    </div>




    <x-footer />
</x-layout>
