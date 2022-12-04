@extends('layouts.app')

@section('content')
<br><br><br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

    <div class="container order-card">
        <div class="row justify-content-center ">
            <div class="col-md-8 servicio ">
                <div class="card  col-md-12">
                    <div class="card-header servicio2 texto textonegro">{{ __('Iniciar Sesión') }}</div>

                    <div class="card-body ">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3  ">
                                <label for="email" class="textonegro col-md-4 col-form-label text-md-end">{{ __('Iniciar Sesión') }}</label>

                                <div class="col-md-6 ">
                                    <input id="email" type="email" class=" servicio2 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="textonegro  col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class=" servicio2 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 ">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input pading servicio2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label textonegro " for="remember">
                                            {{ __('Recuerdame') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-dark textonegro">
                                        {{ __('Iniciar Sesión') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-dark textonegro colorrojo" href="{{ route('password.request') }}">
                                            {{ __('¿No recuerda tu contraseña?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<!---Aqui termina El Formulario de  Inicio de Sesion--->
@endsection
