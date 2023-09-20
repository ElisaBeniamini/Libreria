<x-layout>
    <x-slot name="title">
        Dettaglio Categoria
    </x-slot>
    <x-navbar />

    <a class="btn btn-outline-warning  text-black mx-2 " style="margin-top: 90px" href=" {{ route('categories.index') }}">
        <i class="bi bi-backspace-fill "></i>
        Torna Indietro
    </a>
    <div class="container-fluid mt-5">
        <div class="row d-flex justify-content-center text-center align-items-center text-success">
            <div class="col-12 col-md-12  d-flex justify-content-center">
                <h1>Dettagli Categoria</h1>
            </div>
        </div>
        <div class="row d-flex align-items-center justify-content-center text-center">
            <div class="col-12 col-md-6 d-flex justify-content-center flex-column  mt-5 ">
                <p class="fs-4"> Nome categoria : <br> <span class="fw-semibold"> {{ $category['name'] }}</span> </p>
                <p class="fs-4"> Descrizione categoria : <br><span class="fw-semibold"> Lorem ipsum dolor sit amet,
                        consectetur
                        adipisicing elit. A, voluptates soluta, facilis accusamus dolorem sequi hic sed qui at quae
                        repellendus ducimus similique eligendi explicabo? Voluptates officia autem laudantium
                        possimus?</span> </p>
                @auth
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-outline-warning  text-black mx-2"
                            href="{{ route('categories.edit', ['category' => $category->id]) }}">Modifica
                        </a>

                        <form action="{{ route('categories.destroy', $category) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-danger text-black " type="submit">Elimina </button>
                        </form>
                    </div>
                </div>
            @endauth






        </div>
    </div>
    <x-footer />
</x-layout>
