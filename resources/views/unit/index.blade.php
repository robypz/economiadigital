@extends('layouts.app')
@section('content')
    <div class="min-vh-100">
        <header>
            <div class="bg-light-gray p-5">
                <div class="container">
                    <div class="row row-cols-1 row-cols-md-2">
                        <div class="col">
                            <h1 class="fs-1 Roboto-Black">
                                Unidades
                            </h1>
                            <p class="lead">
                                SUMERGETE EN LAS UNIDADES DISPONIBLES DE <span class="text-primary">ECONOMIA DIGITAL</span>.
                            </p>
                        </div>
                        @role('admin')
                            <div class="col">
                                <div class="d-flex justify-content-center align-items-center h-100">
                                    <a href="{{ route('unit.create') }}" class="btn btn-primary">Agregar</a>
                                </div>
                            </div>
                        @endrole

                    </div>

                </div>

            </div>
        </header>

        <section class="my-4 container">
            <header class="text-center">
                <h1 class="fs-1 text-primary Roboto-Black">Economía Digital</h1>
                <h2 class="fs-2 Roboto-Bold">Explora las Unidades</h2>
                <p class="lead">
                    SELECCIONA UNA UNIDAD PARA QUE DES INICIO A TU APRENDISAJE
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

        </section>
    </div>
@endsection
