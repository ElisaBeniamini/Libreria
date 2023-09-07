<x-layout>
    <x-slot name="title">
        Dettaglio libro
    </x-slot>
    <x-navbar />


    <div class="container-fluid ">
    </div>
    <div class="row mt-5 d-flex justify-content-center flex-row">
        <div class="col-12 col-md-4">
            <img class="img-fluid" src="https://picsum.photos/450/550
                " alt="img-random">
        </div>
        <div class="col-12 col-md-6">
            <div class="text-center pb-3 pt-4 ">
                <p style="font-family: 'Courier New', Courier, monospace; font-size:80px " class=" text-center mb-5">
                    {{ $book['name'] }}</p>
                <div style="font-family: 'Courier New', Courier, monospace; font-size:50px">
                    <p>Numero di pagine:</p>
                    <p style="font-size:65px"> {{ $book['pages'] }}</p>
                </div>
                <div>
                    <p>Anno di pubblicazione:</p>
                    <p>{{ $book['year'] }}</p>
                </div>
            </div>
        </div>

    </div>


    <a class="btn btn-outline-dark mt-auto" href="{{ route('books.show', ['book' => $book->id]) }}">Vedi
        dettagli
        <br>
        {{ $book['nome'] }}</a>



    <x-footer />
</x-layout>
