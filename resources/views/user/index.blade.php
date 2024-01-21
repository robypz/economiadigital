@extends('layouts.app')

@section('content')
<div class="bg-light-gray p-0">
    <header class="container py-5">
        <div class="row">
            <div class="col d-flex align-items-center">
                <div style="min-height: 150px;">
                    <h1 class="display-3 Roboto-Black">
                        Usuarios
                    </h1>
                    <p class="lead fs-3 Roboto-Bold">
                        VISUALIZA LOS USUARIOS REGISTRADOS EN LA PLATAFORMA
                    </p>
                </div>

            </div>
            <div class="col text-center d-none d-lg-block">
                <img class="w-75" src="{{asset('Ilustraciones/SVG/Listado.svg')}}" alt="" srcset="">
            </div>
        </div>

    </header>
</div>
    <div class="container py-4 table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Cedula</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Rol</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->last_name}}</td>
                        <td>{{$user->dni}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            @foreach ($user->roles as $role)
                                {{__($role->name)}}
                            @endforeach
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        <div>
            {{ $users->links() }}
        </div>

    </div>
@endsection
