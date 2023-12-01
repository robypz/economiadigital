@extends('layouts.app')
@section('content')
<div class="vh-100 bg-primary d-flex justify-content-center align-items-center">
    <div class="card">
        <div class="card-body p-0">
            <div class="row rounded-start row-cols-1 row-cols-md-2">
                <div class="col p-0">

                </div>
                <div class="col text-center p-5">
                    <h1 class="fs-1 Roboto-Black mb-3">¡BIENVEIDO!</h1>
                    <h2 class="fs-5 Roboto-Bold mb-3">LA HERRAMIENTA EDUCATIVA PARA EL APRENDISAJE DE ECONOMIA DIGITAL</h2>
                    <a href="{{route('login')}}" class="btn btn-primary mb-3">Inicia aqui</a>
                    <div>
                        <img src="{{asset('logos/Logo_V.2.2.png')}}" alt="" height="32px">
                        <img src="{{asset('logos/Logo_AIS_V.1.1.png')}}" alt="" height="32px">
                        <img src="{{asset('logos/Logo_UNERG_V.1.0.png')}}" alt="" height="32px">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
