<x-layout>
    <x-slot name="title">
        Homepage
    </x-slot>

    <!-- Navigation-->
    <x-navbar />
    <x-header />

    <div class="row  ">
        <img class="position-relative h-50 opacity-50 object-fit-contain" src="\immagini\img-1.jpg" alt="">
        <div
            class="col-12 col-md-12 d-flex text-success  justify-content-center position-absolute top-30 mt-5  text-center ">

            <h1 style="font-size: 150px; ">Crea la tua libreria online!</h1>

            @auth
                <button class="{{ route('books.index') }} btn btn-outline-success text-black fs-2">I tuoi libri <br>
                    <i class=" fs-1 bi bi-arrow-right"></i>
                </button>


            @endauth


















        </div>
    </div>

    <x-footer />
</x-layout>
