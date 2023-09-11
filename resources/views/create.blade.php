<x-layout>
    <x-slot name="title">
        Inserimento Libri
    </x-slot>
    <!-- Navigation-->
    <x-navbar />
    <x-header />
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="d-flex justify-content-center">

        <form method="POST" action="{{ route('books.store') }}" enctype="multipart/form-data" class="mt-5">
            @csrf
            @method('POST')
            <div class="mb-3">

                <input class="form-control" id="name" value="{{ old('name') }}" type="text" name="name">
                <label for="name" class="form-label">Nome del libro</label>
                @error('name')
                    <span style="color: red">
                        Errore - nome obbligatorio!
                    </span>
                @enderror


            </div>
            <div class="mb-3">
                <input class="form-control" id="page" value="{{ old('pages') }}" type="text" name="pages">
                <label for="email" class="form-label">Numero di pagine</label>
                @error('pages')
                    <span style="color: red">
                        Errore - pagine obbligatorio!
                    </span>
                @enderror
            </div>
            <div class="mb-3 ">
                <input class="form-control" id="year" value="{{ old('year') }}" type="text" name="year">
                <label for="email" class="form-label">Anno di pubblicazione</label>
                @error('year')
                    <span style="color: red">
                        Errore - Anno obbligatorio!
                    </span>
                @enderror
            </div>



            <div class="mb-3 ">
                <input class="form-control" id="image" type="file" name="image">
                <label for="image" class="form-label">Copertina</label>
            </div>



            <button type="submit" class="btn btn-primary">Aggiungi!</button>
        </form>
    </div>



    <x-footer />
</x-layout>
