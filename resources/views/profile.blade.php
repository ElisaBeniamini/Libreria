<x-layout>
    <x-navbar />
    <section>
        <!--h2 - go-back -->
        <div class="container " style="margin-top: 0px">
            <div class="row  container-title-profile">
                <div class="col-12 col-md-12 d-flex  justify-content-center align-items-center">
                    <a class="text-decoration-none  text-dark " href="{{ URL::previous() }}">
                        <i class="bi bi-backspace-fill mx-2 text-dark fs-3"></i>
                    </a>
                    <h2 style=" font-family:monospace" class="text-center fs-1 m-0">
                        Riepilogo Profilo:
                    </h2>

                </div>

                <!--button riepilogo -->
                <div class="d-flex justify-content-center mt-3 div-button-30-media">
                    <a class=" button-30 mx-1 div-button-30-media " href="{{ route('books.index') }}">La tua Libreria
                        <br>
                    </a>
                    <a class="button-30 div-button-30-media " href="{{ route('books.create') }}">Aggiungi Libro
                        <br>
                    </a>
                </div>
            </div>
        </div>
        <!--section riepilogo + button + img only LG-->
        <section class="container mb-5 mt-3">
            <div class="row ">
                <div class="col-12 col-md-6   ">
                    <!--riepilogo-->
                    <div class=" riepilogo-profilo text-muted ">
                        <p>
                            Nome:<i class=" fw-bold text-dark"> {{ Auth::user()->name }}</i>
                        </p>
                        <p class="mx-3">
                            Email: <i class=" fw-bold  text-dark"> {{ Auth::user()->email }}</i>
                        </p>
                        <p class="mx-2">Registrato il:
                            <i class=" fw-bold  text-dark"> {{ Auth::user()->created_at->diffForHumans() }}</i>
                        </p>
                    </div>

                </div>
                <div class="col-12 col-md-6">
                    <img class="img-fluid img-media-profile circular-square"
                        src="\immagini\fronte-della-copertura-della-giovane-donna-del-primo-piano-con-il-libro.jpg"
                        alt="">
                </div>

            </div>



        </section>


        <div class="d-flex justify-content-center mt-3 ">
            <a class=" button-30  mx-2 " href="{{ route('books.index') }}">La tua Libreria
                <br>
            </a>
            <a class="button-30 " href="{{ route('books.create') }}">Aggiungi Libro
                <br>
            </a>
        </div>

    </section>








    <x-footer />
</x-layout>
