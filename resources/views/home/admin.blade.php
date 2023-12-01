@extends('layouts.app')

@section('content')
    <div class="min-vh-100">
        <header class="bg-light-gray">
            <div class="container">
                <div class="row p-5">
                    <div class="col">
                        <h1 class="fs-1 Roboto-Black">¡Bienvenido!</h1>
                        <h2 class="fs-5 Roboto-Bold">TE DAMOS LA BIENVENIDA A <br> LA HERRAMIENTA EDUCATIVA.</h2>
                    </div>
                    <div class="col">

                    </div>
                </div>
            </div>
        </header>
        <section class="container py-4">
            <header class="text-center">
                <h1 class="fs-1 Roboto-Black">Administra el Contenido</h1>
                <h5 class="fs-5 Roboto-Bold">GESTIONA Y PERSONALIZA EL CONTENIDO DE LA MATERIA</h5>
                <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum, iusto eligendi dolorem esse
                    nostrum provident porro, quibusdam quae nulla quidem ducimus fugiat a deserunt officia, necessitatibus
                    laboriosam! Ratione, voluptatem eum?</p>
            </header>

            <div class="row">
                <div class="col">
                    <a href="{{route('unit.index')}}" class="text-decoration-none">
                        <div class="card ">
                            <div class="card-body bg-primary text-center">
                                <div class="py-5">
                                    <i class="bi bi-book-fill text-white display-1"></i>
                                </div>

                            </div>
                            <div class="card-footer bg-dark-blue text-white text-center">
                                ESTRUCTURA LAS UNIDADES
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="{{route('key.index')}}" class="text-decoration-none">
                        <div class="card ">
                            <div class="card-body bg-gray text-center">
                                <div class="py-5">
                                    <i class="bi bi-key display-1 text-white"></i>
                                </div>
                            </div>
                            <div class="card-footer bg-dark-blue text-white text-center">
                                Llaves de Acceso
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="{{route('user.index')}}" class="text-decoration-none">
                        <div class="card">
                            <div class="card-body bg-yellow text-center">
                                <div class="py-5">
                                    <i class="bi bi-file-arrow-up-fill text-white display-1"></i>
                                </div>
                            </div>
                            <div class="card-footer text-center bg-dark-blue text-white">
                                Usuarios
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </section>
    </div>
@endsection
