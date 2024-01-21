@extends('layouts.app')
@section('content')
    <div class="bg-light-gray">
        <div class="container">
            <div class="row flex-row justify-content-center align-items-center min-vh-100">
                <div class="col-12 col-xxl-5">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <div class=" text-center p-5">
                                <h2 class="fs-2 Roboto-Bold text-white">Agregar unidad</h2>
                                <i class="bi bi-folder-fill display-2 text-white"></i>
                            </div>
                        </div>
                        <div class="card-body p-5 d-flex justify-content-center">
                            <div class="w-75">
                                <form method="POST" action="{{ route('unit.update',['unit' => $unit]) }}">
                                    @csrf
                                    <label for="number" class="form-label">Numero</label>
                                    <input type="number" class="form-control mb-3" name="number" value="{{$unit->number}}">
                                    <label for="number" class="form-label">Titulo</label>
                                    <input type="text" class="form-control mb-3" name="title" value="{{$unit->title}}">
                                    <label for="description">Descripcion</label>
                                    <textarea name="description" id="" cols="30" rows="10" class="form-control mb-3">
                                        {{$unit->description}}
                                    </textarea>
                                    <input type="submit" class="btn btn-primary text-white w-100" value="Guardar">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
