@extends('layouts.app')
@section('content')
<header class="bg-light-gray mb-3">
    <div class=" p-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2">
                <div class="col d-flex justify-content-center align-items-center">
                    <div style="height: 150px;">
                        <h1 class="display-3 Roboto-Bold">
                            Recursos
                        </h1>
                        <p class="lead fs-3 Roboto-Medium">
                            @hasanyrole('admin|teacher')
                                AGREGA RECURSOS PARA AMPLIAR EL CONTENIDO DE LA MATERIA
                            @endhasanyrole
                            @role('student')
                                EXPLORA UNA AMPLIA VARIEDAD DE RECURSOS EDUCATIVOS
                            @endrole
                        </p>
                    </div>

                </div>
                <div class="col d-none d-lg-block text-center">
                    <img class="w-75" src="{{ asset('Ilustraciones/SVG/Recursos.svg') }}" alt=""
                        srcset="">
                </div>
            </div>

        </div>

    </div>
</header>
    <div class="container min-vh-100">

        <div class="container mb-3">
            <h4 class="fs-4 Roboto-Bold">Fíltros</h4>
            <form action="{{ route('resource.index') }}" method="get" class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <label for="title" class="form-label Roboto-Bold">Título</label>
                    <input type="search" name="title" id="title" placeholder="Título" class="form-control">
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-3">
                    <label for="category" class="form-label Roboto-Bold">Categoría</label>
                    <select name="category_id" id="category" class="form-select">
                        <option value="">TODAS</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="col-12 col-lg-3 d-flex align-items-center justify-content-end">
                    <input type="submit" value="Buscar" class="btn btn-primary mx-3 mt-3">
                    <input type="reset" value="Limpiar" class="btn btn-warning mx-3 mt-3">
                </div>


            </form>

        </div>
        @foreach ($resources as $resource)
            <article class="bg-light-gray resource-item rounded mb-3">
                <div class="row">
                    <div class="col-2 d-flex justify-content-center align-items-center py-3">
                        @if ($resource->category->name == 'DOCUMENTOS')
                            <i class="bi bi-file-earmark-text-fill display-3"></i>
                        @elseif ($resource->category->name == 'INFOGRAFÍAS')
                            <i class="bi bi-file-image display-3"></i>
                        @elseif ($resource->category->name == 'PRESENTACIONES')
                            <i class="bi bi-file-earmark-slides-fill display-3"></i>
                        @elseif ($resource->category->name == 'HOJAS DE CALCULO')
                            <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                        @elseif ($resource->category->name == 'PDF')
                            <i class="bi bi-filetype-pdf display-3"></i>
                        @endif

                    </div>
                    <div class="col py-3">
                        <h4 class="fs-4 Roboto-Bold">{{ $resource->title }}</h4>
                        <p>{{ $resource->description }}</p>
                    </div>
                    <div class="col-2 py-3 text-center">
                        <div class="mb-2 h-100">
                            <div>
                                <a href="{{ route('resource.download', $resource->id) }}" target="_blank"><i
                                    class="bi bi-download color-gray fs-4"></i></a>
                            </div>

                                @if ($resource->user_id == auth()->user()->id)
                                    <div>
                                        <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                class="bi bi-trash3-fill text-danger fs-4"></i></a>

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
                                                            <input type="text" name="id" hidden
                                                                value="{{ $resource->id }}">
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
                </div>
            </article>
        @endforeach
        {{ $resources->links() }}
    </div>
@endsection
