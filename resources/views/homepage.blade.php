<x-layout>
    <x-slot name="title">
        Homepage
    </x-slot>
    <!-- Navigation-->
    <x-navbar />

    <!-- img sfondo-->
    <section class="container-fluid opacity-50"
        style=" width: 100%; z-index: -1;height: 100%;top: 0;left: 0;background: url(/immagini/img-1.jpg) no-repeat center top;position: fixed;background-size: cover; ">
    </section>

    <div class="row d-flex justify-content-center">
        <!-- title header-->
        <div class="col-12 col-md-9 text-center d-flex" style="margin-top: 180px;  margin-left: 50px;">
            <div>
                <h1 style="color: rgb(51, 49, 49);font-size: 110px;"> Crea la tua libreria online!</h1>
            </div>
            @guest
                <div>
                    <a href="{{ route('books.index') }}" class="text-decoration-none btn btn-outline-warning  fw-bolder mx-4 "
                        style="box-shadow: rgba(0, 0, 0, 0.2) 0px 12px 28px 0px, rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;font-size:30px;color: rgb(51, 49, 49)">Anteprima
                        Libreria
                    </a>
                    <i class="bi bi-arrow-right" style="font-size: 50px ;color: rgb(51, 49, 49)"></i>
                </div>
            @endguest
            @auth
                <div>
                    <a href="{{ route('books.index') }}"
                        class="text-decoration-none btn btn-outline-warning  fw-bolder my-5 "
                        style="box-shadow: rgba(0, 0, 0, 0.2) 0px 12px 28px 0px, rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;font-size:30px;color: rgb(51, 49, 49)">
                        <i class="bi bi-book bg-trasparent  mx-3 fs-1"></i>
                        La tua libreria

                    </a>
                    <a href="{{ route('books.create') }}"
                        class="text-decoration-none btn btn-outline-warning  fw-bolder mx-4 "
                        style="box-shadow: rgba(0, 0, 0, 0.2) 0px 12px 28px 0px, rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;font-size:30px;color: rgb(51, 49, 49)">
                        <i class="bi bi-book bg-trasparent  fs-1"></i>
                        Aggiungi
                        libro

                    </a>

                </div>
            @endauth


        </div>
        <!--guest e auth-->



    </div>





    <x-footer />
</x-layout>
