<x-layout>
    <x-slot name="title">
        Registrati
    </x-slot>
    <x-navbar />

    <div class="container text-center " style="margin-top:200px ; ">
        <h1 style="font-family: monospace">Effettua il Login</h1>

        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form class="p-5 shadow" action="{{ route('login') }}" method="POST">
                    @method('POST')
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="mb-3">
                        <label for="email" class="form-label">Email utente</label>
                        <input type="email" name="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" required>
                    </div>

                    <button type="submit" class="btn btn-dark">Entra</button>
                    <a href="{{ route('register') }}" class="btn btn-outline-dark">Non sei registrato?</a>
                </form>
            </div>
        </div>
    </div> <x-footer />
</x-layout>
