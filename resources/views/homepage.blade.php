<x-layout>
    <x-slot name="title">
        Homepage
    </x-slot>

    <!-- Navigation-->
    <x-navbar />
    <x-header />

    <div class="row  ">
        <img class="position-relative h-50 opacity-50" src="\immagini\img-1.jpg" alt="">
        <div class="col-12 col-md-12 d-flex  justify-content-center position-absolute top-50 ">

            <a class="  btn btn-outline-success mx-5 text-black"style="font-size: 100px;  "
                href="{{ route('books.index') }}">
                <i class="bi bi-book text-black"></i>
                Elenco Libri
            </a>
            <a class="btn btn-outline-success text-black "style="font-size: 100px;  " href="{{ route('books.create') }}">
                <i class="bi bi-book text-black"></i>
                Inserisci Libri
            </a>

        </div>
    </div>

    <x-footer />
</x-layout>
