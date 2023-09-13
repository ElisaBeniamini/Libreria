<x-layout>
    <x-slot name="title">
        Homepage
    </x-slot>

    <!-- Navigation-->
    <x-navbar />


    <div class="container-fluid m-0 p-0  position-relative">

        <img class="img-fluid mw-100 opacity-50" src="\immagini\img-1.jpg" alt="sfondo-libri">
    </div>
    <div style=" position:absolute; top:180px;
        row" class="d-flex text-dark opacity-80  text-center ">
        <div class="col-12 col-md-12 d-flex flex-column align-items-center ">
            <h1 style="font-size: 150px; ">Crea la tua libreria online!</h1>
            <div>
                <a class="text-decoration-none btn btn-warning fs-3 w-100  " href="{{ route('books.index') }}">Anteprima
                    Libreria</a>
            </div>


            @auth
                <div class="d-flex 
                 flex-column">
                    <a href="{{ route('books.index') }}" class=" btn btn-outline-warning text-black fs-4">I
                        tuoi
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




    <x-footer />
</x-layout>
