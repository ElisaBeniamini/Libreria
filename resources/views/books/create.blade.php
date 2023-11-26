<x-layout>
    <x-slot name="title">
        Inserimento Libri
    </x-slot>
    <!-- Navigation-->
    <x-navbar />


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <!--button go-back  + title inserisci libro-->
    <div class="div-title-create mt-3">
        <a class="text-decoration-none  text-dark " href="{{ URL::previous() }}">
            <i class=" mx-2 bi bi-backspace-fill text-dark fs-4"></i>
        </a>
        <h3>Inserisci libro </h3>
    </div>
    <div class=" container d-flex justify-content-center ">
        <!--row form inserimento libro + img -->
        <div class="row  mt-3">
            <!--inserimento libro -->
            <div class="col-12 col-md-6 ">
                <form method="POST" action="{{ route('books.store') }}" enctype="multipart/form-data"
                    class="mt-2 form-style-css">
                    @csrf
                    @method('POST')
                    <div>
                        <label for="name" class="form-label">Titolo</label>
                        <input class="form-control" placeholder="" id="name" value="{{ old('name') }}"
                            type="text" name="name">
                        @error('name')
                            <span style="color: red">
                                Errore - nome obbligatorio!
                            </span>
                        @enderror
                    </div>
                    <div>
                        <label for="name" class="form-label">Autore</label>
                        <select name="author_id" class="form-control">
                            <option value="" disabled selected>Scegli Autore</option>
                            @foreach ($authors as $author)
                                <option value="{{ $author->id }}">{{ $author->firstname . ' ' . $author->lastname }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class=" mt-3">
                        <label for="descrizione">Descrizione</label>
                        <textarea class="form-control" id="descrizione" name="descrizione" rows="4" cols="50">{{ old('descrizione') }}</textarea>
                        @error('descrizione')
                            <span style="color: red">
                                Errore - Descrizione obbligatoria!
                            </span>
                        @enderror
                    </div>
                    <div class="d-flex mt-3 px-1">
                        <div>
                            <label for="email" class="form-label ">Numero pagine</label>
                            <input class="form-control" placeholder="xxx pagine" id="page"
                                value="{{ old('pages') }}" type="text" name="pages">
                            @error('pages')
                                <span style="color: red">
                                    Errore - pagine obbligatorio!
                                </span>
                            @enderror
                        </div>
                        <div class=" mx-1 ">
                            <label for="email" class="form-label  ">Anno </label>
                            <input class="form-control" placeholder="Pubblicato il ..." id="year"
                                value="{{ old('year') }}" type="text" name="year">
                            @error('year')
                                <span style="color: red">
                                    Errore - Anno obbligatorio!
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="d-flex flex-column mt-3">
                        <label for="email" class="form-label  ">Categoria </label>
                        <select name="category_id" class="form-control">
                            <option value="" disabled selected>Scegli Categoria</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"> {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class=" mt-3 ">
                        <label for="image" class="form-label">Copertina</label>
                        <input class="form-control  bg-dark bg-gradient text-light" id="image" type="file"
                            name="image">
                    </div>

                    <button type="submit" class=" button-30 mt-3 button-30-media">Aggiungi!</button>
                </form>
            </div>
            <!--img inserimento libro -->
            <div class="col-12 col-md-6 img-create-xs-displaynone ">
                <img width="100%" height="100%" class="img-fluid" src="\immagini\4087-removebg-preview.png"
                    alt="">
            </div>
        </div>
    </div>

    <x-footer />
</x-layout>
