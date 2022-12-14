<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title class="text-danger">{{ config('app.name', 'BloodBuddy') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<!--Aqui estan los Estilos-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
<body>

<!--Aqui empieza la barra de navegacion de nuestra pagina Principal-->   
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm fixed-top">
<div class="container">
    <a class="navbar-brand text-danger" href="{{ url('/') }}">{{ config('app.name', 'BloodBuddy' ) }}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
     aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
    <span class="navbar-toggler-icon"></span>
    </button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto"></ul>
    <!-- Lado derecho de la barra de navegación -->
    <ul class="navbar-nav ms-auto">
    <!--Enlaces de autenticación -->
    <li class=" nav-item">
        <a a class="nav-link  " href="{{ route('home') }}">Home</a>
        </li>
        <li class=" nav-item">
        <a a class="nav-link  " href="{{ route('ayudas.index') }}">Ayuda</a>
        </li>
        <li class=" nav-item">
        <a a class="nav-link  " href="{{ route('extras.index') }}">Mas Informacion</a>
        </li>
        <li class=" nav-item">
        <a a class="nav-link  " href="{{route('NewPassword')}}">Perfil</a>
        </li>
        <li class=" nav-item">
        <a a class="nav-link  " href="{{route('donantes.create')}}">Donante</a>
        </li>
        <li class="nav-item">
        <a class=" nav-link " href="{{ route('password.request') }}">Restablecer Contraseña</a>
        </li>
        <li class="nav-item">
        <a class=" nav-link " href="{{ url(config('forum.web.router.prefix')) }}">Foro</a>
        </li>
    @guest
    @if (Route::has('login'))
    <li class="nav-item">
         <a class="btn btn-dark" href="{{ route('login') }}">{{ __('Iniciar Sesion') }}</a>
    </li>
    @endif
    @if (Route::has('register'))
    <li class="nav-item">
         <a class="btn btn-danger" href="{{ route('register') }}">{{ __('Registrarme') }}</a>
    </li>
    @endif
    @else
    <!--Nombre de el Usuario-->
    <li class="nav-item dropdown bg-dark">
    <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
    {{ Auth::user()->name }}
    </a>
    <!--Cerrar la sesion de el Usuario-->
    <div class="dropdown-menu dropdown-menu-end bg-dark" aria-labelledby="navbarDropdown">
         <a class="dropdown-item text-white" href="{{ route('logout') }}"
    onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
    {{ __('Cerrar Sesion') }}
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

<!--Aqui Termina la barra de navegacion de nuestra pagina Principal--> 


    <main class="py-4">
        @yield('content')
    </main>
    </div>

</body>
</html>

