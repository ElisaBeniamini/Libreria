<x-layout>
    <x-slot name="title">
        Inserimento Libri
    </x-slot>
    <!-- Navigation-->
    <x-navbar />
    <!--button go-back START-->
    <div>
        <a class="btn btn-outline-warning  text-black " style="margin-top: 90px" href=" {{ route('books.index') }}">
            <i class="bi bi-backspace-fill "></i>
            Torna Indietro
        </a>
    </div>
    <!--button go-back END-->



    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div style="margin-top:10px" class="d-flex justify-content-center">
        <h1 style="color: rgb(74, 69, 69)">Inserisci qui il tuo libro </h1>
    </div>
    <div class="d-flex justify-content-center ">
        <form method="POST" action="{{ route('books.store') }}" enctype="multipart/form-data" class="mt-2">
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

            <select name="author_id" class="form-control">
                @foreach ($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->firstname . ' ' . $author->lastname }}</option>
                @endforeach
            </select>
            <label for="name" class="form-label">Autore</label>

            <div>
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
            <button type="submit" class="btn btn-outline-warning text-black">Aggiungi!</button>
        </form>
    </div>



    <x-footer />
</x-layout>
