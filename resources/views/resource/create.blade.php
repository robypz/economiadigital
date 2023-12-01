@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card">
            <div class="card-header  rounded-top-3 bg-primary text-white text-center p-5">
                <i class="bi bi-file-earmark-fill display-3"></i>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <span class="fs-3 Roboto-Bold mb-3">Agregar Recurso</span>
                </div>
                <form action="{{ route('resource.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="content_id" value="{{ $content_id }}" hidden>
                    <label for="title" class="form-label">Titulo</label>
                    <input type="text" class="form-control mb-3" id="title" name="title">
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <label for="description" class="form-label">Descripción</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control mb-3"></textarea>
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <label for="file">Archivo</label>
                    <input type="file" name="file" id="file" class="form-control mb-3">
                    @error('file')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="text-center">
                        <input type="submit" value="Guardar" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
