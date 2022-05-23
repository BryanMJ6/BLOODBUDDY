@extends('layouts.app')

@section('template_title')
terminos
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center"></div>
    <br>
    <br>
    <h1 class="text-5xl text-center pt-14 text-danger">Terminos Y Condiciones de Uso</h1>
    <h1 class="text-5xl text-center pt-14">Terminos y condiciones de uso al aceptar estos terminos aceptara que podamos
        utilizar la informacion necesaria para que pueda ser utilizada para la informacion
        de su usuario asi como tambien prodra utilizar las funcionalidades de la pagina.</h1>

    <br>
    <div class="form-check">
        <input class="form-check-input-center" type="checkbox" name="remember" id="remember"
            {{ old('remember') ? 'checked' : '' }}>
        <label class="form-check-label-center" for="remember">
            {{ __('Acepto los terminos y condiciones') }}
        </label>
    </div>

    <div class="row justify-content-center">
        <a href="http://127.0.0.1:8000/" class="btn btn-outline-dark">Aceptar Terminos</a>

        </tbody>
    </div>
</div>
</div>
@endsection