@extends('layouts.app')

@section('content')
    <div class="container py-4 min-vh-100 table-responsive">
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
