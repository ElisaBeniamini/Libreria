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
    <!--button go-back  + title inserisci Autore-->
    <div class="div-title-create mt-3">
        <a class="text-decoration-none  text-dark " href="{{ URL::previous() }}">
            <i class=" mx-2 bi bi-backspace-fill text-dark fs-4"></i>
        </a>
        <h3>Aggiungi Autore</h3>
    </div>

    <div class=" container d-flex justify-content-center mt-5">
        <!--row form inserimento autore + img -->
        <div class="row  mt-3 d-flex justify-content-end ">
            <!--inserimento autore -->
            <div class="col-12 col-md-7  ">
                <form method="POST" action="{{ route('authors.store') }}" class="form-style-css ">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <input class="form-control" id="firstname" value="{{ old('firstname') }}" type="text"
                            name="firstname">
                        <label for="name" class="form-label">Nome Autore</label>
                        @error('firstname')
                            <span style="color: red">
                                Errore - nome obbligatorio!
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input class="form-control" id="lastname" value="{{ old('lastname') }}" type="text"
                            name="lastname">
                        <label for="email" class="form-label">Cognome Autore</label>
                        @error('lastname')
                            <span style="color: red">
                                Errore - Cognome obbligatorio!
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3 ">
                        <input class="form-control" id="birthday" value="{{ old('birthday') }}" type="date"
                            name="birthday">
                        <label for="birthday" class="form-label ">Anno di Nascita</label>
                        @error('birthday')
                            <span style="color: red">
                                Errore - Anno obbligatorio!
                            </span>
                        @enderror
                    </div>
                    <button type="submit" class=" button-30 mt-2 button-30-media">Aggiungi!</button>
                </form>
            </div>
            <div class="col-12  col-md-5 img-create-xs-displaynone ">
                <img width="100%" height="100%" class="img-fluid" src="\immagini\create_author-removebg-preview.png"
                    alt="">
            </div>
        </div>
    </div>





    <x-footer />
</x-layout>
