@extends('layouts.app')

@section('content')
    <div class="bg-light-gray min-vh-100 d-flex justify-content-center align-items-center">
        <div class="card">
            <div class="card-header bg-primary text-white"><h1 class="fs-3 Roboto-Bold">Agregar llave de acceso</h1></div>
            <div class="card-body">
                <form action="{{route('key.store')}}" method="post">
                    @csrf
                    <label for="key" class="form-label Roboto-Bold">Identificación</label>
                    <input type="text" id="key" name="key" placeholder="V12345678|E12345678" pattern="[A-Z].*"
                        class="form-control mb-3">
                    <label for="role" class="form-label Roboto-Bold">Rol</label>
                    <select name="role" id="role" class="form-select mb-3">
                        @hasrole('admin')
                            @foreach ($roles as $role)
                                <option value="{{ $role }}">{{ __($role) }}</option>
                            @endforeach
                        @endhasrole

                        @hasrole('teacher')
                            @foreach ($roles as $role)
                                @if ($role != 'teacher' &&  $role !='admin')
                                    <option value="{{ $role }}">{{ __($role) }}</option>
                                @endif
                            @endforeach
                        @endhasrole

                    </select>
                    <div class="text-center">
                        <input type="submit" value="Guardar" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
