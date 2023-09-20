<x-layout>
    <x-slot name="title">
        Inserimento Autori
    </x-slot>
    <!-- Navigation-->
    <x-navbar />


    <div style="margin-top:130px" class="d-flex justify-content-center">
        <h1 style="color: rgb(74, 69, 69)">Inserisci Categoria </h1>
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
                <form method="POST" action="{{ route('categories.store') }}" style="margin-left: 0px"
                    class=" d-flex  flex-column ">
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

                    <button type="submit" class="btn btn-outline-warning text-black ">Aggiungi Categoria!</button>
                </form>
            </div>


        </div>

    </div>

    </div>




    <x-footer />
</x-layout>
