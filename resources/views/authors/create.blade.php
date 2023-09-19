<x-layout>
    <x-slot name="title">
        Inserimento Autori
    </x-slot>
    <!-- Navigation-->
    <x-navbar />


    <div style="margin-top:130px" class="d-flex justify-content-center">
        <h1 style="color: rgb(74, 69, 69)">Inserisci gli Autori </h1>
    </div>

    <div class="container  d-flex align-items-center justify-content-center" style="background-color: #f7f7f7">
        <div class="row">
            <div class="col-12 col-md-6  ">
                <img class="img-fluid " style="width: 500px" src="\immagini\penna.jpg" alt="">
            </div>

            <div class="col-12 col-md-6 d-flex align-items-center justify-content-center flex-column">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{ route('authors.store') }}" style="margin-left: 0px">
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
                        <label for="birthday" class="form-label">Anno di Nascita</label>
                        @error('birthday')
                            <span style="color: red">
                                Errore - Anno obbligatorio!
                            </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-outline-warning text-black ">Aggiungi Autore!</button>
                </form>
            </div>


        </div>

    </div>

    </div>




    <x-footer />
</x-layout>
