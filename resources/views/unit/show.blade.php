@extends('layouts.app')

@section('content')
    <div class="container min-vh-100">
        <section>
            <header class="mb-3">
                <div class="bg-light-gray p-5">
                    <div class="container">
                        <div class="row row-cols-1 row-cols-md-2">
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
                    @role('admin|teacher')
                        <div class="container">
                            <h3 class="fs-3 Roboto-Bold">Contenido</h3> <a href="{{ route('content.create', ['unit' => $unit]) }}"
                                class="btn btn-primary">Agregar</a>
                        </div>
                    @endrole

                </div>
            </header>
            <section>

                @foreach ($unit->contents as $content)
                    <article class="content rounded-3">
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
            </section>
        </section>
    </div>
@endsection
