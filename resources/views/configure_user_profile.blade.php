@extends('layouts.app')

@section('content')

@include('msjs')
<h2 class="text-center ">Actualizar mis Datos
    <hr>
</h2>
<div class="row justify-content-center bg-secondary.bg-gradient 10">
    <div class="col-md-8">
        <form action="{{route('changePassword')}}" method="POST" class="needs-validation" novalidate>
            @csrf

            <div class="row mb-3">
                <div class="form-group mt-3">
                    <label for="name">Nombre de Usuario</label>
                    <input type="text" name="name" value="{{ Auth::user()->name }}"
                        class="form-control @error('name') is-invalid @enderror" required>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <div class="form-group mt-3">
                    <label for="password_actual">Contraceña Actual</label>
                    <input type="password" name="password_actual"
                        class="form-control @error('password_actual') is-invalid @enderror" required>
                    @error('password_actual')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <div class="form-group mt-3">
                    <label for="new_password ">Nueva Contraceña</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                        required>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <div class="form-group mt-3">
                    <label for="confirm_password">Confirmar nueva Contaceña</label>
                    <input type="password" name="confirm_password"
                        class="form-control @error('confirm_password') is-invalid @enderror" required>
                    @error('confirm_password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row text-center mb-4 mt-5">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-outline-dark" id="formSubmit">Guardar Cambios</button>
                    <a href="/home" class="btn btn-outline-danger">Cancelar</a>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
@endsection