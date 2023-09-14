<x-layout>
    <x-navbar />


    <h1 style="margin-top: 150px; font-family:monospace" class="text-center">Welcome! <br> {{ Auth::user()->name }}</h1>
    <div class="col-12 col-md-12 p-5 "
        style="margin-top: 50px;box-shadow: rgba(0, 0, 0, 0.2) 0px 12px 28px 0px, rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;">


        <div class="text-center">
            <div style=" font-size:25px">
                <p>Nome: {{ Auth::user()->name }}</p>
            </div>
            <div style=" font-size:25px">
                <p>Email: {{ Auth::user()->email }}</p>
            </div>
            <div style=" font-size:25px">
                <p>Registrato il: {{ Auth::user()->created_at->diffForHumans() }}</p>
            </div>
            <a class="btn btn-outline-dark mt-auto" href="{{ route('homepage') }}">
                <i class="bi bi-backspace-fill "></i>
                Homepage
            </a>
            <a class="btn btn-outline-dark mt-auto" href="{{ route('books.index') }}">Vai alla libreria
                <br>
            </a>
            <a class="btn btn-outline-dark mt-auto" href="{{ route('books.create') }}">Carica subito il tuo primo libro!
                <br>
            </a>


        </div>
    </div>

    <x-footer />
</x-layout>
