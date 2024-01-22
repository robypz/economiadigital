@extends('layouts.app')

@section('content')
    <div class="min-vh-100">
        <header class="bg-light-gray">
            <div class="container py-5">
                <div class="row">
                    <div class="col d-flex align-items-center">
                        <div style="min-height: 150px;">
                            <h1 class="display-3 Roboto-Black">Hola!</h1>
                            <h2 class="fs-3 Roboto-Bold">TE DAMOS LA BIENVENIDA A  LA HERRAMIENTA EDUCATIVA.</h2>
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
                <h1 class="fs-1 Roboto-Black">Gestiona el Contenido</h1>
                <h5 class="fs-5 Roboto-Bold">GESTIONA Y PERSONALIZA EL CONTENIDO DE LA MATERIA</h5>
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
                                ESTRUCTURA LAS UNIDADES
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-lg-6 col-xl-4 mb-3">
                    <a href="{{route('key.index')}}" class="text-decoration-none">
                        <div class="card ">
                            <div class="card-body bg-gray text-center">
                                <div class="py-5">
                                    <i class="bi bi-key-fill display-1 text-white"></i>
                                </div>
                            </div>
                            <div class="card-footer bg-dark-blue text-white Roboto-Medium fs-5 text-center">
                                LLAVES DE ACCESO
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-lg-6 col-xl-4 mb-3">
                    <a href="{{route('user.index')}}" class="text-decoration-none">
                        <div class="card">
                            <div class="card-body bg-yellow text-center">
                                <div class="py-5">
                                    <i class="bi bi-person-fill color-gray display-1"></i>
                                </div>
                            </div>
                            <div class="card-footer text-center bg-dark-blue Roboto-Medium fs-5 text-white">
                                USUARIOS
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </section>
    </div>
@endsection
