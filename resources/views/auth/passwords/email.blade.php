@extends('/layouts.app')

@section('content')
<br><br><br>
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/normalize.css">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/css/estilos.css">

<div class="container order-card" align="center">
    <div class="row justify-content-center">
        <div class="col-md-8 servicio">
            <div class="card col-md-12">
                <div class="card-header texto textonegro"><h3>Restablecer Contraseña</h3></div>

                <div class="card-body p-2">
                    @if (session('status'))
                    <div class=" alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <br>
                        <div class="row-justify-content-center mb-3">
                             <img src="/img/contrasena.png" class="img-fluid" alt="" width="250" height="250">
                             
                            <h3 class="textonegro">Correo Electronico</h3>
                            <label for="email" class="col-md-4 col-form-label text-md-end ""></label>

                            <div class=" col-md-6">
                                <input id="email" type="email" class="form-control servicio3 @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">

                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>
                </div>
                    <br>
                     <div class="row">
                            <div class="col-md-6 offset-md-3" align="center">
                                <button type="submit" class="btn btn-danger textonegro colorrojo">
                                    <h3>{{ __('Restablecer Contraseña') }}</h3>
                                </button>
                    <!--Aqui esta el boton que al precionar 
                        mandara el correo electronico para restablecer la contraseña--->

                    </div>
                </div>
                <br>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
