@extends('layouts.app')

@section('content')
    <div class="min-vh-100">
        <div class="bg-light-gray p-0">
            <header class="container py-5">
                <div class="row">
                    <div class="col d-flex align-items-center">
                        <div style="min-height: 150px;">
                            <h1 class="display-3 Roboto-Black">
                                Llaves
                            </h1>
                            <p class="lead fs-3 Roboto-Bold">
                                OTORGA UNA LLAVE DE ACCESO A LOS USUARIOS QUE SERAN REGISTRADOS EN LA PLATAFORMA
                            </p>
                        </div>

                    </div>
                    <div class="col text-center d-none d-lg-block">
                        <img class="w-75" src="{{asset('Ilustraciones/SVG/Llave de Acceso.svg')}}" alt="" srcset="">
                    </div>
                </div>

            </header>
        </div>
        <div class="container my-3">
            <div class="text-start mb-3">
                <span class="fs-5 fw-bold">Participante</span>&nbsp;<a href="{{route('key.create')}}" class="btn btn-primary btn-sm"><i class="bi bi-plus"></i> Agregar</a>
            </div>
            <table class="table bg-light-gray rounded-3 ">
                <thead>
                    <tr>
                        <th scope="col" class="bg-transparent">#</th>
                        <th scope="col" class="bg-transparent">Identificación</th>
                        <th scope="col" class="bg-transparent">Rol</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($keys as $key)
                        <tr>
                            <th scope="row" class="bg-transparent">{{ $key->id }}</th>
                            <td class="bg-transparent">{{ $key->key }}</td>
                            <td class="bg-transparent">
                                @foreach ($key->roles as $role)
                                    {{ __($role->name) }}
                                @endforeach
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
