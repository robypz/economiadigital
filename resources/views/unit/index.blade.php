@extends('layouts.app')
@section('content')
    <div class="min-vh-100">
        <header>
            <div class="bg-light-gray p-5">
                <div class="container">
                    <div class="row row-cols-1 row-cols-md-2">
                        <div class="col d-flex align-items-center">
                            <div style="height: 150px;">
                                <h1 class="display-3 Roboto-Black">
                                    Unidades
                                </h1>
                                <p class="lead fs-3 Roboto-Bold">
                                    @hasanyrole('admin|teacher')
                                        SELECCIONA UNA UNIDAD PARA VISUALIZAR EL TEMA Y EL CONTENIDO
                                    @endhasanyrole
                                    @role('student')
                                        SELECCIONA UNA UNIDAD PARA QUE DES INICIO A TU APRENDIZAJE
                                    @endrole
                                </p>
                            </div>

                        </div>
                        <div class="col text-center d-none d-lg-block">
                            <img class="w-75" src="{{ asset('Ilustraciones/SVG/Unidades.svg') }}" alt=""
                                srcset="">
                        </div>

                    </div>
                    <div class="row my-3">
                        @role('admin')
                            <div class="col">
                                <div class="d-flex justify-content-center align-items-center">
                                    <a href="{{ route('unit.create') }}" class="btn btn-primary btn-lg">Agregar</a>
                                </div>
                            </div>
                        @endrole
                    </div>

                </div>

            </div>
        </header>

        <section class="my-4 container">
            <header class="text-center">
                <h2 class="display-3 Roboto-Bold">Explora las Unidades</h2>
                <p class="lead fs-4 Roboto-Bold">
                    @hasanyrole('admin|teacher')
                        SELECCIONA UNA UNIDAD PARA VISUALIZAR EL TEMA Y EL CONTENIDO
                    @endhasanyrole
                    @role('student')
                        SELECCIONA UNA UNIDAD PARA QUE DES INICIO A TU APRENDIZAJE
                    @endrole
                </p>
            </header>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xxl-4">
                @foreach ($units as $unit)
                    <div class="col p-5">
                        <a href="{{ route('unit.show', ['unit' => $unit]) }}" class="text-decoration-none">

                            <div class="card bg-primary h-100">
                                <div class="card-body text-center p-5">
                                    <i class="bi bi-folder-fill display-3 text-white"></i>
                                </div>
                                <div class="card-footer bg-gray text-white">
                                    <h3 class="fs-3 Roboto-Bold">
                                        Unidad #{{ $unit->number }}
                                    </h3>
                                    <p class="lead">
                                        {{ $unit->title }}
                                    </p>

                                </div>
                            </div>

                        </a>
                    </div>
                @endforeach
            </div>

            @hasanyrole('admin|teacher')
                <div class="text-center">
                    <h3 class="fs-1 Roboto-Bold">Gestiona los Recursos</h3>
                    <p class="lead Roboto-Medium">GESTIONA RECURSOS DIGITALES RELEVANTES</p>
                    <a href="{{ route('resource.index') }}" class="btn btn-primary btn-lg">Inicia aquí</a>
                </div>
            @endhasanyrole

            @hasrole('student')
                <div class="text-center">
                    <h3 class="fs-1 Roboto-Bold">Amplia tu Conocimiento</h3>
                    <p class="lead Roboto-Medium">DESCUBRE Y DESCARGA RECURSOS DIGITALES RELEVANTES</p>
                    <a href="{{ route('resource.index') }}" class="btn btn-primary btn-lg">Inicia aquí</a>
                </div>
            @endrole




        </section>
    </div>
@endsection
