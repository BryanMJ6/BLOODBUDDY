<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Blood Buddy</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>

    </style>
</head>


<body>
    <div class="fondo">

    </div>

    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <img src="https://www.integramedica.cl/integramedica/site/artic/20210317/imag/foto_0000000420210317161710.png"
                    alt="" width="100" height="100" align="left">


                <a class="navbar-brand " href="{{ url('/') }}">
                    <h3 class="text-danger">Bloodbuddy</h3>
                </a>
                <meta charset=" UTF-8">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navegation">
                    <span class="navbar-toggler-icon"></span>

                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a @click="abrirForm('home')" class="nav-link " href="#">Home</a>

                        </li>
                        <li class="nav-item">
                            <a class=" nav-link " href="{{ route('donantes.index') }}">Donantes</a>

                        </li>
                        <li class="nav-item">
                            <a class=" nav-link " href="{{ route('pacientes.index') }}">Pacientes</a>
                        </li>
                        <li class="nav-item">
                            <a a class=" nav-link " href="{{ route('contactos.index') }}">contactos</a>
                        </li>
                        <li class="nav-item">
                            <a a class=" nav-link " href="{{ route('ayudas.index') }}">Ayuda</a>
                        </li>

                        <li class="nav-item">
                            <a a class=" nav-link " href="{{ route('equipos.index') }}">Nosotros</a>
                        </li>
                        <li class=" nav-item">
                            <a a class="nav-link  " href="{{ route('terminos.index') }}">Terminos</a>
                        </li>
                        </li>
                        <li class=" nav-item">
                            <a a class="nav-link  " href="{{ route('NewPassword') }}">Mi Perfil</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        @auth
                        <a href="{{ url('/home') }}" class="btn btn-outline-dark">Menu
                            Inicio</a>
                        @else
                        <a href="{{ route('login') }}" class=" btn btn-outline-dark">Iniciar Sesion</a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-outline-danger">Registrarme</a>
                        @endif
                        @endauth


                    </ul>
                </div>
            </div>
        </nav>

    </div>
    <p></p>
    <div class="container">
        <div class="row justify-content-center"></div>
        <h3 class="text-5xl text-center pt-24">Bienvenido a Blood Buddy</h3>

        <h3 class="text-5xl text-center text-danger pt-14">Nuestra Filosofia</h3>
        <h3 class="text-2x1 text-center pt-5">Facilitar los servicios siempre a las personas guiandolas
            para conseguir con mayor facilidad hemoconponentes.
        </h3>
        <p></p>
        <p></p>
        <h3 class="text-5xl text-center text-danger pt-24">¿Quienes Somos?</h3>
        <p></p>
        <h3 class="text-1x1 text-center pt-5">Somos personas que buscan brindar
            una herramienta util para la donacion de sangre
            fijandonos en ser una herramienta de utilidad para las personas.</h3>
        <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>