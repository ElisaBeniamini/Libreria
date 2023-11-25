<x-layout>
    <x-slot name="title">
        Inserimento Autori
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
        <h3>Aggiungi Categoria </h3>
    </div>

    <div class="container ">
        <div class="row d-flex align-items-end">
            <div class="col-12 col-md-6 d-flex justify-content-end ">
                <img class="img-fluid "src="\immagini\create_author-removebg-preview.png" alt="">
            </div>

            <div class="col-12 col-md-5 ">

                <form method="POST" action="{{ route('categories.store') }}" class="form-style-css">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <input class="form-control" id="name" value="{{ old('name') }}" type="text"
                            name="name">
                        <label for="name" class="form-label">Nome Categoria</label>
                        @error('name')
                            <span style="color: red">
                                Errore - nome obbligatorio!
                            </span>
                        @enderror
                    </div>

                    <button type="submit" class=" button-30 mt-3 button-30-media">Aggiungi!</button>
                </form>
            </div>


        </div>

    </div>

    </div>




    <x-footer />
</x-layout>
