@extends('layouts.app')
@section('content')
    <div class="min-vh-100">




        <section class="container py-4">
            <header>
                <h1 class="fs-1 Roboto-Black">CONTENIDO: {{ $content->title }}</h1>
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
