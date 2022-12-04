@extends('layouts.app')

@section('template_title')
equipos
@endsection

@section('content')
<br><br><br>
<div class="container">
  <div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card">
    <div class="card-header bg-light text-dark"><h3 class="text-center">Quienes Somos</h3></div>
    <div style="text-align:center;">
  <img src="img/somos.png" class="img-fluid" alt="" width="250" height="250">
    <div class="card-body">

    <h3>Somos personas que buscan brindar una herramienta util para
            la donacion de sangre fijandonos en ser una de mucha utilidad
            en un futuro para las personas.</h3>
    <br>
    <a href="{{route('extras.index')}}" class="btn btn-dark">Regresar</a>
    </div>
    </div>
    </div>
    </div>
    </div>
<br>
<br>

</div>
</div>
</div>
<!--El footer de nuestra Pagina-->
@include('pie_pagina')

@endsection