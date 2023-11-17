<x-layout>
    <x-slot name="title">
        Inserimento Libri
    </x-slot>
    <!-- Navigation-->
    <x-navbar />
    <!--button go-back START-->
    <div class="row  ">
        <div class="col-12 col-md-12 d-flex  justify-content-center align-items-center">
            <a class="text-decoration-none  text-dark " href="{{ URL::previous() }}">
                <i class="bi bi-backspace-fill mx-2 text-dark fs-3"></i>
            </a>
            <h3 class="mt-2">Inserisci libro </h3>

        </div>

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


    <div class="d-flex justify-content-center ">
        <form method="POST" action="{{ route('books.store') }}" enctype="multipart/form-data" class="mt-2">
            @csrf
            @method('POST')
            <div class="mb-3 mt-4">
                <input class="form-control" id="name" value="{{ old('name') }}" type="text" name="name">
                <label for="name" class="form-label">Titolo</label>
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
                <label for="email" class="form-label">Numero pagine</label>
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


            @foreach ($categories as $category)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="{{ $category->id }}" name="categories[]">
                    <label class="form-check-label" for="flexCheckDefault">
                        {{ $category->name }}
                    </label>
                </div>
            @endforeach

            <div class=" mt-3 ">
                <input class="form-control" id="image" type="file" name="image">
                <label for="image" class="form-label">Copertina</label>
            </div>
            <button type="submit" class="btn btn-outline-warning text-black">Aggiungi!</button>
        </form>
    </div>



    <x-footer />
</x-layout>
