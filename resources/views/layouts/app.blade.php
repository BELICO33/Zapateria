
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>HERMES</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <style>
        a{
            text-decoration: none;
            color: white;
            text-transform: none;
            transition: 2.25s ease;
        }
        ul{
            display: flex;
            flex-wrap: wrap;
            list-style: none;
        }
        ul li{
            text-decoration: none;
            margin: 0 0.75em 0 0.75em;
        }
        ul:hover a{
            color: #575757;
        }
        ul:hover a:hover{
            color: #8EAAFB;
            box-shadow: 0 2px 0 0 currentColor;
        }
    </style>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="bg-white text-white">

<div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container m-4">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    HERMES
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

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
                            <li class="nav-item color">
                            <a href="{{url('colors')}}" class="nav-link" >Colores</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('tallas')}}" class="nav-link">Tallas</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('modelos')}}" class="nav-link">Modelos</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('marcas')}}" class="nav-link">Marcas</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('generos')}}" class="nav-link">Generos</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('personas')}}" class="nav-link">Personas</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('puestos')}}" class="nav-link">Puestos</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('turnos')}}" class="nav-link">Turnos</a>
                            </li>
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
