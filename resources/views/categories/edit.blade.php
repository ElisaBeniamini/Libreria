<x-layout>
    <x-slot name="title">
        Modifica Categoria
    </x-slot>
    <!-- Navigation-->
    <x-navbar />


    <div style="margin-top:130px" class="d-flex justify-content-center">
        <h1 style="color: rgb(74, 69, 69)">Modifica Categoria </h1>
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
                <form action="{{ route('categories.update', $category) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-floating mb-3">
                        <input class="form-control @error('name') is-invalid @enderror" id="name"
                            value="{{ $category->name }}" name="name" type="text">
                        <label for="name">Nome</label>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg" type="submit">Aggiorna</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
