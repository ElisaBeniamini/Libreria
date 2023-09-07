<x-layout>
    <x-slot name="title">
        Inserimento Libri
    </x-slot>
    <!-- Navigation-->
    <x-navbar />
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Libreria Larav-Datab</h1>
                <p class="lead fw-normal text-white-50 mb-0">Inserisci i tuoi libri</p>
            </div>
        </div>
    </header>


    <div class="d-flex justify-content-center">


        <form method="POST" action="{{ route('books.store') }}" class="mt-5">
            @csrf
            <div class="mb-3">

                <input class="form-control" id="name" value="{{ old('name') }}" type="text" name="name">
                <label for="name" class="form-label">Nome del libro</label>

            </div>
            <div class="mb-3">
                <input class="form-control" id="page" value="{{ old('page') }}" type="text" name="pages">
                <label for="email" class="form-label">Numero di pagine</label>

            </div>
            <div class="mb-3 ">
                <input class="form-control" id="year" value="{{ old('year') }}" type="text" name="year">
                <label for="email" class="form-label">Anno di pubblicazione</label>

            </div>
            <button type="submit" class="btn btn-primary">Aggiungi!</button>
        </form>
    </div>


    <div style="height: 1200px">
        ciao
    </div>
    <x-footer />
</x-layout>
