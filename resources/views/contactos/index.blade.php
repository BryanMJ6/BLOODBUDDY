<!--Usamos la barra de navegacion de nuestro Layout-->
@extends('layouts.app')

<!--Nombre de esta seccion o Pantalla-->
@section('template_title')
contactos
@endsection

<!--Aqui mostramos todo el contenido de la pantalla de contactos con el section('content')-->
@section('content')
<!--style-->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
<!---->

<!--Comienso de la seccion de contactos-->
<section id="contactos" class="contactos section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-header text-center pb-5">
        <img src="img/comunicar.png" alt="" width="220" height="220">
          <h2>Informacion de Contacto</h2>
          <p>“BloodBuddy” pone a disposición las diferente plataformas<br> como medio de
            comunicación, para poder hacer diferentes consultas<br>y en seguida uno de nuestros corresponsales se pondrá en
            pronto contacto<br> con usted podras contactarnos atraves de estos medios.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card text-center">
          <div class="card-body">
            <img src="img/facebook1.png" alt="" class="img-fluid rounded-circle">
            <h5 class="card-title py-2">Nuestro Facebook</h5>
            <a class="btn bg-primary text-white  "href="https://www.facebook.com/"Target="_blank"><i class="bi bi-facebook"></i>Facebook</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card text-center">
          <div class="card-body">
            <img src="img/Whatsapp.png" alt="" class="img-fluid rounded-circle">
            <h5 class="card-title py-2">Nuestro Whatsapp</h5>
            <a class="btn bg-success text-white  "href="https://www.whatsapp.com/"Target="_blank"><i class="bi bi-whatsapp"></i>Whatsapp</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card text-center">
          <div class="card-body">
            <img src="img/telegram.png" alt="" class="img-fluid rounded-circle">
            <h5 class="card-title py-2">Nuestro Telegram</h5>
            <a class="btn bg-info text-white  "href="https://web.telegram.org/z/"Target="_blank"><i class="bi bi-telegram"></i>Telegram</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card text-center">
          <div class="card-body">
            <img src="img/instagram.png" alt="" class="img-fluid rounded-circle">
            <h5 class="card-title py-2">Nuestro Instagram</h5>
            <a class="btn bg-danger text-white  "href="https://www.instagram.com/"Target="_blank"><i class="bi bi-instagram"></i>Instagram</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Final de la seccion de contactos-->        
</div>
</div>
</div>
<!--El footer de nuestra Pagina-->
@include('pie_pagina')

@endsection