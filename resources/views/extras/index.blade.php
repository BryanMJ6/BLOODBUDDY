<!--Usamos la barra de navegacion de nuestro Layout-->
@extends('layouts.app')

<!--Aqui mostramos todo el contenido de la pantalla de contactos con el section('content')-->
@section('content')
<!--style-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
<!---->

<!--Comienso de la seccion de contactos-->
<section id="extras" class="extras section-padding">
  <div class="container">
   <div class="row">
      <div class="col-md-12">
        <div class="section-header text-center pb-5">
          <h2>Mas Informacion</h2>
          <p>Aqui se encuentran nuestros apartados<br> de mas informacion los cuales te
             proporcionar informacion<br>especifica que te puede interesar.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-12 col-lg-4">
        <div class="card text-center bg-white pb-2">
          <div class="card-body text-dark">
           <div class="img-imagen1 mb-4">
            <img src="img/redes.jpg" alt="" class="img-fluid">
           </div>
           <h3 class="card-title">Contactos</h3>
           <p class="lead">Aqui encontraras la informacion de contacto que BlodBuddy
             te proporciona.</p>
             <a href="contactos" class="btn bg-dark text-white">Ver mas..</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-12 col-lg-4">
        <div class="card text-center bg-white pb-2">
          <div class="card-body text-dark">
           <div class="img-imagen1 mb-4">
            <img src="img/ter.jpg" alt="" class="img-fluid">
           </div>
           <h3 class="card-title">Terminos</h3>
           <p class="lead">Aqui encontraras la informacion sobre los terminos y condiciones de BloodBuddy.</p>
            <a href="terminos" class="btn bg-dark text-white">Ver mas..</a>
          </div>
        </div>
        </div>
      <div class="col-12 col-md-12 col-lg-4">
        <div class="card text-center bg-white pb-2">
          <div class="card-body text-dark">
           <div class="img-imagen1 mb-4">
            <img src="img/BloodBuddy.png" alt="" class="img-fluid">
           </div>
           <h3 class="card-title">Nosotros</h3>
           <p class="lead">Aqui encontraras informacion de Nosotros quienes somos BloodBuddy.</p>
            <a href="equipos" class="btn bg-dark text-white">Ver mas..</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Final de la seccion de mas informacion-->        
</div>
</div>
</div>

<!--El footer de nuestra Pagina-->
@include('pie_pagina')

@endsection
<!--Aqui termina el contenido de la pantalla de contactos con el endsection-->