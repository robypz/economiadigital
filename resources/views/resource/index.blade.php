@extends('layouts.app')
@section('content')
    <div class="container min-vh-100">
        <header class="mb-3">
            <div class="bg-light-gray p-5">
                <div class="container">
                    <div class="row row-cols-1 row-cols-md-2">
                        <div class="col">
                            <h1 class="fs-1 Roboto-Black">
                                Recursos
                            </h1>
                            <p class="lead">
                                Explora los recursos para ampliar tu conocimiento sobre Economia Digital.
                            </p>
                        </div>
                        <div class="col">

                        </div>
                    </div>

                </div>

            </div>
        </header>
        <div class="container mb-3">
            <h4 class="fs-4 Roboto-Bold">Filtros</h4>
            <form action="{{route('resource.index')}}" method="get" class="row">
                <div class="col">
                    <label for="title" class="form-label Roboto-Bold">Titulo</label>
                    <input type="search" name="title" id="title" placeholder="titulo" class="form-control">
                </div>
                <div class="col">
                    <label for="category" class="form-label Roboto-Bold">Categoría</label>
                    <select name="category" id="category" class="form-select">
                        <option value="">Infografías</option>
                    </select>
                </div>
                <div class="col d-flex align-items-end">
                    <input type="submit" value="Buscar" class="btn btn-primary mx-3">
                    <input type="reset" value="Limpiar" class="btn btn-warning">
                </div>


            </form>

        </div>
        @foreach ($resources as $resource)
            <article class="bg-light-gray resource-item rounded mb-3">
                <div class="row">
                    <div class="col-1 d-flex justify-content-center align-items-center py-3">
                        <i class="bi bi-file-earmark-fill display-3"></i>
                    </div>
                    <div class="col py-3">
                        <h4 class="fs-3 Roboto-Bold">{{ $resource->title }}</h4>
                        <p>{{ $resource->description }}</p>
                    </div>
                    <div class="col-1 py-3 text-center">
                        <div class="mb-2">
                            <a href="{{ route('resource.download', $resource->id) }}" target="_blank"><i
                                    class="bi bi-download color-gray fs-4"></i></a>
                        </div>
                        @if ($resource->user_id == auth()->user()->id)
                            <div>
                                <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                        class="bi bi-trash3-fill color-gray fs-4"></i></a>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header bg-danger text-white">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">¿Desea eliminar este
                                                    recurso?</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p><span class="fw-bold">Titulo:</span>{{ $resource->title }}</p>
                                                <p><span class="fw-bold">Descripcion:</span>{{ $resource->description }}
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cerrar</button>
                                                <form action="{{ route('resource.destroy') }}" method="POST">
                                                    @csrf
                                                    <input type="text" name="id" hidden value="{{ $resource->id }}">
                                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif



                    </div>
                </div>
            </article>
        @endforeach
        {{$resources->links()}}
    </div>
@endsection
