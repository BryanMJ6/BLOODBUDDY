@extends('layouts.app')

@section('template_title')
terminos
@endsection

@section('content')
<br><br><br>
<div class="container">
  <div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card">
    <div class="card-header"><h3 class="text-center">Terminos y Condiciones</h3></div>
    <div style="text-align:center;">
  <img src="img/satisfecho.png" class="img-fluid" alt="" width="250" height="250">
    <div class="card-body">

    <h3>“BloodBuddy” busca ayudar a las personas que lo necesiten, por lo tanto, alguna información puede ser usada
            para procesar las diferentes donaciones. Usted debe contar con un usuario (registrarse) y agregar la
            información requerida para poder acceder de manera completa a la plataforma y poder usar los servicios que
            “BloodBody” ofrece.</h3>
    <br>
    <a href="{{route('extras.index')}}" class="btn btn-dark">Regresar</a>
    </div>
    </div>
    </div>
    </div>
</div>
<br><br>
</div>
</div>
</div>
<!--El footer de nuestra Pagina-->
<footer class="bg-dark p-2 text-center">
  <div class="container">
    <p class="text-white">2022 BloodBuddy - Todos los Derechos reservados.</p>
  </div>
</footer>
@endsection