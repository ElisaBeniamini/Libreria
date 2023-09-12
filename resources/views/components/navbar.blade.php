<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid px-4 px-md-5">
        <a class="navbar-brand text-white" href="{{ route('homepage') }}">Libreria Database</a>
        <div class="d-flex" id="navbarSupportedContent">


            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">

                @guest
                    <li class="nav-item">
                        <a class="nav-link text-white text-center" href="{{ route('login') }}">Entra </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white text-center" href="{{ route('register') }}">Registrati </a>
                    </li>
                @endguest

                @auth
                    <li class="nav-item mt-2 me-3 ">
                        <span class="text-success">{{ Auth::user()->name }}, {{ Auth::user()->email }}</span>
                    </li>
                    <li class="nav-item">


                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="nav-link text-white"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                Esci
                            </button>
                        </form>
                    </li>

                @endauth
            </ul>
        </div>
    </div>
</nav>
