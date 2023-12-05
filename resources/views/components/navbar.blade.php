<nav class="navbar navbar-expand-lg bg-dark bg-gradient ">
    <div class="container container-navbar-media-query">
        <!-- Logo - ciao usee-->
        <div class="d-flex align-items-end">
            <div>
                <a class="navbar-brand logo-title text-center" href="{{ route('homepage') }}">
                    <i class="bi bi-book mx-2 icona-logo"></i>
                    BOOKSREAD
                </a>
            </div>

            <!-- Start Auth - Ciao User -->
            @auth
                <div class="desktop-only-ciao-user ">
                    <div style="display: inline-block; margin-bottom:7px "onmouseover="showEmail(true)"
                        onmouseout="showEmail(false)">
                        <span class="text-light fs-5" id="greetingText">Ciao {{ Auth::user()->name }}!</span>,
                        <span id="userEmail" style="color: grey; display: none;">{{ Auth::user()->email }}</span>
                    </div>
                </div>
            @endauth
        </div>
        @auth
            <div class="d-flex mx-3 fs-5">
                <a class="text-decoration-none" href="{{ route('profile') }}">
                    Profilo
                </a>
                <form action="{{ route('logout') }}" method="POST" class="mx-2" style=" cursor: pointer;">
                    @csrf
                    <a class="text-decoration-none text-danger"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        Esci
                    </a>
                </form>
            </div>
        @endauth
        @guest
            <div id="navbarSupportedContent" class="mx-4">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4 ul-navabar-media-screen">
                    <li class="nav-item">
                        <a class="nav-link mx-3 p-0 link-nav-css" href="{{ route('login') }}">Entra</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-0 link-nav-css" href="{{ route('register') }}">Registrati</a>
                    </li>
                </ul>
            </div>
        @endguest
    </div>

</nav>





<script>
    //show mail all hover di ciao user 
    function showEmail(isHovering) {
        var greetingText = document.getElementById('greetingText');
        var userEmail = document.getElementById('userEmail');

        if (isHovering) {
            greetingText.style.display = 'none';
            userEmail.style.display = 'inline';
        } else {
            greetingText.style.display = 'inline';
            userEmail.style.display = 'none';
        }
    }
</script>
