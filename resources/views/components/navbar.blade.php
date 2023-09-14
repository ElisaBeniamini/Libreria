<nav class="navbar navbar-expand-lg bg-dark bg-gradient  fixed-top ">
    <div class="container-fluid justify-content-between  ">

        <a class="navbar-brand text-warning" style="font-size: 28px ;" href="{{ route('homepage') }}">
            <i class="bi bi-book bg-trasparent text-white mx-3 fs-1"></i>
            Libreria Database</a>


        @guest
            <div class="d-flex mx-4 " id="navbarSupportedContent ">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4 ">
                    <li class="nav-item">
                        <a class="nav-link text-warning text-center mx-3 p-0" style="font-size:15px"
                            href="{{ route('login') }}">Entra
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-warning text-center p-0" style="font-size: 15px"
                            href="{{ route('register') }}">Registrati </a>
                    </li>
                </ul>
            </div>
        @endguest
        @auth
            <div class="d-flex align-items-start " style="align-items: flex-end; margin-top:0px; ">
                <li class="nav-item list-unstyled d-flex flex-column text-center">
                    <span class="text-light">{{ Auth::user()->name }}, {{ Auth::user()->email }}</span>
                    <a class="btn btn-warning btn-sm fs-5" href="{{ route('profile') }}">Il tuo profilo</a>
                </li>

                <li class="nav-item list-unstyled">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <a class="nav-link text-danger mx-2 "
                            onclick="event.preventDefault(); this.closest('form').submit();">
                            Esci
                        </a>
                    </form>
                </li>
            </div>
        @endauth
    </div>

</nav>
