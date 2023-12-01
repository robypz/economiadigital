@extends('layouts.app')

@section('content')
    <div class="min-vh-100">
        <div class="container py-4">
            <div class="text-end">
                <a href="{{route('key.create')}}" class="btn btn-primary">Agregar</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Identificación</th>
                        <th scope="col">Rol</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($keys as $key)
                        <tr>
                            <th scope="row">{{ $key->id }}</th>
                            <td>{{ $key->key }}</td>
                            <td>
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
