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
                    <img src="{{ asset('logos/Logo_V.2.0.png') }}" alt="" srcset="" class="logo">
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
                                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false">Explorar</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ route('home') }}" class="dropdown-item color-gray fs-5"
                                                href="#"><i class="bi bi-app me-2"></i>Inicio</a></li>
                                        <li><a href="{{ route('unit.index') }}" class="dropdown-item color-gray fs-5"
                                                ><i class="bi bi-book-fill me-2"></i>Unidades</a></li>
                                        <li><a class="dropdown-item color-gray fs-5" href="{{route('resource.index')}}"><i
                                                    class="bi bi-collection-fill me-2"></i>Recursos</a></li>
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
                                    <i class="bi bi-person-circle fs-3 nav-item me-2"></i>{{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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

        <footer class="bg-gray">
            <div class="container p-5">
                <div class="row">
                    <div class="col text-center"><img src="{{ asset('logos/Logo_V.2.1.png') }}" alt=""
                            srcset="" class="logo"></div>
                    <div class="col text-center"><img src="{{ asset('logos/Logo_AIS_V.1.0.png') }}" alt=""
                            srcset="" class="logo"></div>
                    <div class="col text-center"><img src="{{ asset('logos/Logo_UNERG_V.1.0.png') }}" alt=""
                            srcset="" class="logo"></div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
