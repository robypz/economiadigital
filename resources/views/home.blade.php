@extends('layouts.app')

@section('content')
    <div class="bg-ligth-gray">
        <div class="container ">
            <section>
                <div class="row">
                    <div class="col p-5 Roboto-Bold">
                        <h1 class="fs-1">¡HOLA!</h1>
                        <h3 class="fs-4">TE DAMOS LA BIENVENIDA AL <br> PORTAL EDUCATIVO</h3>
                    </div>
                    <div class="col"></div>
                </div>
            </section>

        </div>
    </div>

    <div class="container">
        <section>
            <h1 class="text-center fs-1 Roboto-Bold">Aprendizaje Práctico</h1>
            <p class="text-center Roboto-Bold">APRENDE DE MANERA GRADUAL Y <br> A TU PROPIO RITMO.</p>
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quod sed accusamus rem.
                <br> Nihil quasi sint,
                numquam saepe nulla esse. Natus eum, autem doloribus consequuntur eligendi non id atque esse.
            </p>
            <div class="row">
                <div class="col">
                    <a href="" class="text-decoration-none">
                        <div class="card ">
                            <div class="card-body bg-primary text-center">
                                <div class="py-5">
                                    <i class="bi bi-card-image text-white display-1"></i>
                                </div>

                            </div>
                            <div class="card-footer bg-gray text-white text-center">
                                ESTRUCTURA DE UNIDADES
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="" class="text-decoration-none">
                        <div class="card ">
                            <div class="card-body bg-primary text-center">
                                <div class="py-5">
                                    <i class="bi bi-card-image text-white display-1"></i>
                                </div>
                            </div>
                            <div class="card-footer bg-gray text-white text-center">
                                DOCUMENTACIÓN DE CONTENIDO
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="" class="text-decoration-none">
                        <div class="card">
                            <div class="card-body bg-primary text-center">
                                <div class="py-5">
                                    <i class="bi bi-card-image text-white display-1"></i>
                                </div>
                            </div>
                            <div class="card-footer text-center bg-gray text-white">
                                INFOGRAFÍAS INFORMATIVAS
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section class="my-5">
            <h1 class="fs-1 text-center Roboto-Bold">Contenido de las <br> Unidades Disponibles</h1>
            <div class="text-center">
                <a class="btn btn-primary Roboto-Regular">Inicia aquí</a>
            </div>

        </section>
    </div>
@endsection
