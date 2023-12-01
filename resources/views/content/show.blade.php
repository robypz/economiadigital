@extends('layouts.app')
@section('content')
    <div class="min-vh-100">




        <section class="container py-4">
            <header>
                <h1 class="fs-1 Roboto-Black">Contenido: {{ $content->title }}</h1>
                @role('admin')
                    <div class="my-3">
                        <h4 class="fs-4">¿Deseas ampliar el contenido?</h4>
                        <a href="{{ route('resource.create', ['content_id' => $content->id]) }}" class="btn btn-primary">Cargar
                            Recursos</a>
                    </div>
                @endrole
            </header>
            @foreach ($content->itemization['blocks'] as $block)
                @if ($block['type'] == 'paragraph')
                    <p class="lead"><?php echo $block['data']['text']; ?></p>
                @endif
                @if ($block['type'] == 'header')
                    <h2 class="fs-2 Roboto-Bold">{{ $block['data']['text'] }}</h2>
                @endif
                @if ($block['type'] == 'list')
                    <ul>
                        @foreach ($block['data']['items'] as $item)
                            <li class="lead"><?php echo $item; ?></li>
                        @endforeach
                    </ul>
                @endif
            @endforeach
        </section>

        <section>
            <div class="container">
                <header>
                    <h1 class="text-start Roboto-Bold fs-1">Recursos</h1>
                </header>
                @foreach ($content->resources as $resource)
                    <article class="bg-light-gray resource-item rounded">
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
                                <div>
                                    <a href="#" type="button" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"><i class="bi bi-trash3-fill color-gray fs-4"></i></a>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
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


                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </section>

    </div>
@endsection
