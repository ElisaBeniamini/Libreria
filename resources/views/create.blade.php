<x-layout>
    <x-slot name="title">
        Inserimento Libri
    </x-slot>
    <!-- Navigation-->
    <x-navbar />
    <x-header />
    <div class="d-flex justify-content-center">


        <form method="POST" action="{{ route('books.store') }}" class="mt-5">
            @csrf
            <div class="mb-3">

                <input class="form-control" id="name" value="{{ old('name-value') }}" type="text" name="name">
                <label for="name" class="form-label">Nome del libro</label>

            </div>
            <div class="mb-3">
                <input class="form-control" id="page" value="{{ old('page-value') }}" type="text"
                    name="pages">
                <label for="email" class="form-label">Numero di pagine</label>

            </div>
            <div class="mb-3 ">
                <input class="form-control" id="year" value="{{ old('year-value') }}" type="text"
                    name="year">
                <label for="email" class="form-label">Anno di pubblicazione</label>

            </div>
            <button type="submit" class="btn btn-primary">Aggiungi!</button>
        </form>
    </div>



    <x-footer />
</x-layout>
