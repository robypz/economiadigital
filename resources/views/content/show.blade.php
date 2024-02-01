@extends('layouts.app')
@section('content')
    <div class="min-vh-100">




        <section class="container py-4">
            <header class="mb-3 bg-light-gray p-3 rounded">
                <h1 class="fs-1 Roboto-Black">CONTENIDO: {{ $content->title }}</h1>
                <div class="">
                    <h3 class="Roboto-Bold fs-3">Administra</h3>
                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</button>



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
                                    ¿Esta seguro que desea eliminar el contenido?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    <a href="{{route('content.delete',$content)}}" class="btn btn-danger">Eliminar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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
                    @role('admin|teacher')
                        <div class="my-3">
                            <h4 class="fs-4">¿Deseas ampliar el contenido?</h4>
                            <a href="{{ route('resource.create', ['content_id' => $content->id]) }}"
                                class="btn btn-primary">Cargar
                                Recursos</a>
                        </div>
                    @endrole
                </header>
                @foreach ($content->resources as $resource)
                    <article class="bg-light-gray resource-item rounded mb-3">
                        <div class="row">
                            <div class="col-1 d-flex justify-content-center align-items-center py-3">
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
                            <div class="col-1 py-3 text-center">
                                <div class="mb-2">
                                    <a href="{{ route('resource.download', $resource->id) }}" target="_blank"><i
                                            class="bi bi-download text-primary fs-4"></i></a>
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </section>

    </div>
@endsection
