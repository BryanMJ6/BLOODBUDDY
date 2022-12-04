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
         <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesion') }}</a>
    </li>
    @endif
    @if (Route::has('register'))
    <li class="nav-item">
         <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarme') }}</a>
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
