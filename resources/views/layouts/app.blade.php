<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="shortcut icon" href="{{ asset('logos/Logo_V.2.0.png') }}" type="image/x-icon">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('logos/Logo_V.3.0.png') }}" alt="" srcset="" class="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        @auth
                            <li class="nav-item">

                                <div class="dropdown-center">
                                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" class="d-flex align-items-center"
                                        aria-expanded="false"><i class="bi bi-grid fs-5 me-2"></i><span class="fs-5">Explorar</span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ route('home') }}" class="dropdown-item color-gray fs-5"
                                                href="#"><i class="bi bi-app me-2"></i>Inicio</a></li>
                                        <li><a href="{{ route('unit.index') }}" class="dropdown-item color-gray fs-5"><i
                                                    class="bi bi-book-fill me-2"></i>Unidades</a></li>
                                        <li><a class="dropdown-item color-gray fs-5" href="{{ route('resource.index') }}"><i
                                                    class="bi bi-collection-fill me-2"></i>Recursos</a></li>

                                        @role('admin')
                                        <li><a class="dropdown-item color-gray fs-5"
                                            href="{{ route('user.index') }}"><i
                                                class="bi bi-person-fill me-2"></i>Usuarios</a></li>
                                                <li><a class="dropdown-item color-gray fs-5"
                                                    href="{{ route('key.index') }}"><i
                                                        class="bi bi-key me-2"></i>Llaves</a></li>
                                        @endrole

                                        @role('teacher')
                                                <li><a class="dropdown-item color-gray fs-5"
                                                    href="{{ route('key.index') }}"><i
                                                        class="bi bi-key me-2"></i>Llaves</a></li>
                                        @endrole

                                    </ul>
                                </div>
                            </li>
                        @endauth

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle d-flex align-items-center"
                                    href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" v-pre>
                                    <i class="bi bi-person-circle fs-5 nav-item me-2"></i><span class="fs-5">{{ Auth::user()->name }}</span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="bi bi-box-arrow-right fs-5 me-2"></i>{{ __('Logout') }}
                                    </a>
                                    <a href=""></a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>
    </div>
</body>

</html>
