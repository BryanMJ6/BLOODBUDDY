@extends('layouts.app')

@section('content')
<br><br>
 <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">

    <!--- Mensajes -->
    @include('notificaciones_perfil_de_usuario')

<div class="container order-card " align="center">
    <div class="row justify-content-center">
        <div class="col-md-8 servicio">
        <div class="card card col-md-12">
        <h2 class="card-header servicio3 texto textonegro">Actualizar mis Datos</h2>
        <div class="card-body textonegro">
        <h3>
                <div class="col-md-6">
                    <form action="{{route('changePassword')}}" method="POST" class="needs-validation" novalidate>
                        @csrf
                        <br>
                      <img src="img/perfilusuario.png" alt="" width="120" height="120" align="center">
                        <div class="row-justify-content-center mb-3">
                        
                            <div class="form-group mt-3 textonegro ">
                                <label for="name" class="textonegro">Nombre de Usuario</label>
                                <input type="text" name="name" value="{{ Auth::user()->name }}"
                                    class="form-control servicio3 @error('name') is-invalid @enderror" required>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row-justify-content-center mb-3 textonegro ">
                            <div class="form-group mt-3">
                                <label for="password_actual">Clave Actual</label>
                                <input type="password" name="password_actual"
                                    class="form-control servicio3 @error('password_actual') is-invalid @enderror" required>
                                @error('password_actual')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row-justify-content-center mb-3 textonegro">
                            <div class="form-group mt-3">
                                <label for="new_password ">Nueva Clave</label>
                                <input type="password" name="password"
                                    class="form-control servicio3 @error('password') is-invalid @enderror" required>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                            <div class="form-group mt-3 textonegro ">
                                <label for="confirm_password">Confirmar Clave</label>
                                <input type="password" name="confirm_password"
                                    class="form-control servicio3 @error('confirm_password') is-invalid @enderror" required>
                                @error('confirm_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row-justify-content-center text-center mb-4 mt-5">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-dark textonegro" id="formSubmit">Guardar Cambios</button>
                                <a href="/home" class="btn btn-danger textonegro colorrojo">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>


    @endsection