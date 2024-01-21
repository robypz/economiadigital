@extends('layouts.app')
@section('content')
    <div class="vh-100 bg-primary d-flex justify-content-center align-items-center">
        <div class="card w-75 h-75">
            <div class="card-body p-0">
                <div class="row rounded-start row-cols-1 row-cols-lg-2 h-100">
                    <div class="col d-none d-lg-block rounded-start p-5 bg-light-gray d-flex align-items-center justify-content-center">
                        <img class="w-100" src="{{asset('Ilustraciones/SVG/Bienvenida.svg')}}" alt="" srcset="">
                    </div>
                    <div class="col text-center bg-white p-5">
                        <div class="d-flex align-items-center h-100">
                            <div class="welcome">
                                <div>
                                    <h1 class="fs-1 Roboto-Black mb-3">¡BIENVENIDO!</h1>
                                    <h3 class="fs-3 Roboto-Bold mb-3">A LA HERRAMIENTA EDUCATIVA PARA EL APRENDISAJE DE ECONOMÍA
                                        DIGITAL</h3>

                                </div>

                                <div class="my-3">
                                    <a href="{{ route('login') }}" class="btn btn-primary mb-3 btn-lg">Inicia aqui</a>
                                </div>

                                <div class="text-center">
                                    <div class="row flex-row justify-content-center align-items-center">
                                        <div class="col-4 col-sm-2 col-md-2 col-lg-3 col-xl-2">
                                            <img class="mx-3 w-100" src="{{ asset('logos/Logo_V.2.2.png') }}" alt="" >
                                        </div>
                                        <div class="col-4 col-sm-2 col-md-2 col-lg-3 col-xl-2">
                                            <img class="mx-3 w-100" src="{{ asset('logos/Logo_AIS_V.1.1.png') }}" alt="" >
                                        </div>
                                        <div class="col-4 col-sm-2 col-md-2 col-lg-3 col-xl-2">
                                            <img class="mx-3 w-100" src="{{ asset('logos/Logo_UNERG_V.2.0.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
