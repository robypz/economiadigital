@extends('layouts.app')
@section('content')
    <div class="bg-light-gray">
        <div class="container">
            <div class="row flex-row justify-content-center align-items-center min-vh-100">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <div class=" text-center p-5">
                                <h2 class="fs-2 Roboto-Bold text-white">Agregar Contenido</h2>
                                <h3 class="fs-3 text-white fw-bold">UNIDAD: {{ $unit->title }}</h3>
                            </div>
                        </div>
                        <div class="card-body p-5 d-flex justify-content-center">
                            <div class="w-75">

                                <form method="POST" action="{{ route('content.store') }}" id="content-store-form">
                                    @csrf
                                    <input type="text" name="unit_id" id="unit_id" value="{{ $unit->id }}" hidden>
                                    <label for="" class="form-label fw-bold" >Titulo</label>
                                    <input type="text" class="form-control mb-3" name="title" id="title">
                                    <label for="editorjs" class="mb-3">Desglose</label>
                                    <div id="editorjs" class="w-100 border border-primary mb-3">

                                    </div>

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
