@extends('layouts.app')

@section('content')
    <div class="bg-light-gray">
        <div class="container ">
            <section class="py-4">
                <div class="row">
                    <div class="col p-5 Roboto-Bold">
                        <h1 class="fs-1">¡HOLA!</h1>
                        <h3 class="fs-4">TE DAMOS LA BIENVENIDA AL <br> PORTAL EDUCATIVO</h3>
                    </div>
                    <div class="col text-center d-none d-lg-block">
                        <img class="w-75" src="{{ asset('Ilustraciones/SVG/Hola.svg') }}" alt=""
                            srcset="">
                    </div>
                </div>
            </section>

        </div>
    </div>

    <div class="container">
        <section>
            <h1 class="text-center display-3 Roboto-Bold">Aprendizaje Práctico</h1>
            <p class="text-center Roboto-Bold fs-4">APRENDE DE MANERA GRADUAL Y <br> A TU PROPIO RITMO.</p>
            <div class="row row-cols-3 row-flex align-items-center justify-content-center">
                <div class="col-12 col-md-6 col-lg-3 mb-3">
                    <a href="" class="text-decoration-none">
                        <div class="card ">
                            <div class="card-body bg-primary text-center">
                                <div class="py-5">
                                    <i class="bi bi-card-image text-white display-1"></i>
                                </div>

                            </div>
                            <div class="card-footer bg-gray text-white text-center Roboto-Medium fs-5">
                                ESTRUCTURA DE UNIDADES
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-3">
                    <a href="{{route('resource.index')}}" class="text-decoration-none">
                        <div class="card ">
                            <div class="card-body bg-gray text-center">
                                <div class="py-5">
                                    <i class="bi bi-card-image text-white display-1"></i>
                                </div>
                            </div>
                            <div class="card-footer bg-gray text-white text-center Roboto-Medium fs-5">
                                RECURSOS RELEVANTES
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section class="my-5">
            <h1 class="fs-1 text-center Roboto-Bold">Unidades Disponibles</h1>
            <p class="lead text-center Roboto-Medium">DESCUBRE LAS UNIDADES DISPONIBLES</p>
            <div class="text-center">
                <a href="{{route('unit.index')}}" class="btn btn-primary Roboto-Regular ">Inicia aquí</a>
            </div>

        </section>
    </div>
@endsection
