@extends('layouts.app')

@section('content')
    <div class="min-vh-100">
        <header class="bg-light-gray">
            <div class="container">
                <div class="row p-5">
                    <div class="col d-flex align-items-center justify-content-center">
                        <div style="height: 150px;">
                            <h1 class="display-3 Roboto-Black">!Hola!</h1>
                            <h2 class="fs-3 Roboto-Bold">TE DAMOS LA BIENVENIDA A LA HERRAMIENTA EDUCATIVA</h2>
                        </div>

                    </div>
                    <div class="col text-center d-none d-lg-block">
                        <img class="w-75" src="{{asset('Ilustraciones/SVG/Hola.svg')}}" alt="" srcset="">
                    </div>
                </div>
            </div>
        </header>
        <section class="container py-4">
            <header class="text-center">
                <h1 class="fs-1 Roboto-Black">Explora el Contenido</h1>
                <h5 class="fs-5 Roboto-Bold">DESCUBRE LAS UNIDADES Y EL CONTENIDO DE LA MATERIA</h5>
            </header>

            <div class="row">
                <div class="col-12 col-lg-6 col-xl-4 mb-3">
                    <a href="{{route('unit.index')}}" class="text-decoration-none">
                        <div class="card ">
                            <div class="card-body bg-primary text-center">
                                <div class="py-5">
                                    <i class="bi bi-book-fill text-white display-1"></i>
                                </div>

                            </div>
                            <div class="card-footer bg-dark-blue text-white text-center Roboto-Medium fs-5">
                                ESTRUCTURA DE LAS UNIDADES
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-lg-6 col-xl-4 mb-3">
                    <a href="{{route('resource.index')}}" class="text-decoration-none">
                        <div class="card ">
                            <div class="card-body bg-gray text-center">
                                <div class="py-5">
                                    <i class="bi bi-card-image text-white display-1"></i>
                                </div>
                            </div>
                            <div class="card-footer bg-dark-blue text-white text-center Roboto-Medium fs-5">
                                Recursos
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-lg-6 col-xl-4 mb-3">
                    <a href="{{route('key.index')}}" class="text-decoration-none">
                        <div class="card ">
                            <div class="card-body bg-primary text-center">
                                <div class="py-5">
                                    <i class="bi bi-key display-1 text-white"></i>
                                </div>
                            </div>
                            <div class="card-footer bg-dark-blue text-white text-center Roboto-Medium fs-5">
                                Llaves de Acceso
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </section>
        <section class="my-5">
            <h1 class="fs-1 text-center Roboto-Bold">Estructura de las Unidades</h1>
            <p class="lead text-center Roboto-Medium">VISUALIZA LOS CONTENIDOS Y GESTIONA LOS RECURSOS</p>
            <div class="text-center">
                <a href="{{route('unit.index')}}" class="btn btn-primary Roboto-Regular">Inicia aquí</a>
            </div>

        </section>
    </div>
@endsection
