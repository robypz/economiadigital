@extends('layouts.app')

@section('content')
    <div class="container min-vh-100">
        <section>
            <header class="mb-3">
                <div class="bg-light-gray p-5">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h1 class="fs-1 Roboto-Black">
                                    UNIDAD #{{ $unit->number }}
                                </h1>
                                <h2 class="fs-2 Roboto-Black">
                                    <span class="text-primary">Tema:</span> {{ $unit->title }}
                                </h2>
                                <p class="lead">
                                    {{ $unit->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                    @role('admin')
                        <div class="container mt-3">
                            <h3 class="fs-3 Roboto-Bold">Administra</h3> <a href="{{ route('unit.edit', ['unit' => $unit]) }}"
                                class="btn btn-warning">Editar</a>
                            <button class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Eliminar</button>

                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-danger text-white">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Contenido</h1>
                                            <button type="button" class="btn-close text-white" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            ¿Esta seguro que desea eliminar la unidad?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cerrar</button>
                                            <a href="{{ route('unit.delete', $unit) }}" class="btn btn-danger">Eliminar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endrole

                </div>
            </header>
            <section class="p-5">
                @role('admin')
                    <div class="container">
                        <p class="Roboto-Bold d-flex align-items-center"><span class="fs-3 me-3">Contenido</span><a
                                href="{{ route('content.create', ['unit' => $unit]) }}"
                                class="btn btn-primary btn-sm fw-bold"><i class="bi bi-plus"></i>Agregar</a></p>
                    </div>
                @endrole
                <div class="bg-light-gray rounded-3">
                    @foreach ($unit->contents as $content)
                        <article class="content rounded-3 mb-3">
                            <a href="{{ route('content.show', ['id' => $content->id]) }}"
                                class="text-decoration-none text-gray">
                                <div class="row">
                                    <div class="col-2">
                                        <div class="rounded-3 d-flex justify-content-center align-items-center p-3">
                                            <i class="bi bi-folder-fill text-gray display-2"></i>
                                        </div>
                                    </div>

                                    <div class="col d-flex  align-items-center p-3">
                                        <h3 class="fs-3 Roboto-Bold text-uppercase">{{ $content->title }}</h3>
                                    </div>
                                </div>
                            </a>
                        </article>
                    @endforeach
                </div>

            </section>
        </section>
    </div>
@endsection
