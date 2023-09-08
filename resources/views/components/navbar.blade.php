<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand text-white" href="{{ route('homepage') }}">Libreria Database</a>
        <div class="d-flex" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item">
                    <a class="nav-link text-danger text-center" href="{{ route('books.index') }}">Elenco </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger text-center" href="{{ route('books.create') }}">Inserisci </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
