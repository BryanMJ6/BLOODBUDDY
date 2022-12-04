@extends('layouts.app')

@section('content')
<br><br><br>
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/normalize.css">
<link rel="stylesheet" href="/css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">

<div class="container order-card">
    <div class="row justify-content-center">
        <div class="col-md-8 servicio">
            <div class="card col-md-12 ">
                <div class="card-header servicio2 texto textonegro "><h3>{{ __('Restablecer Contraseña') }}</h3></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end textonegro"><h5>{{ __('Correo Electronico') }}</h5></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control servicio3 @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end textonegro"><h5>{{ __('Password') }}</h5></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control servicio3 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end textonegro"><h5>{{ __('Confirm Password') }}</h5></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control servicio3" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-dark textonegro">
                                    <h5>{{ __('Reset Password') }}</h5>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
