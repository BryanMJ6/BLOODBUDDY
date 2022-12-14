<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--El estilo de Iconos-->
    <!--Esto nos sirve para poder integrar los iconos de Bootstrap-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <!--Scripts-->
  <script src="{{ asset('js/app.js') }}"></script>

  <!--Nos sirve para incorporar y llamar parte de nuestro chatbot-->
  <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
  <script id="botmanWidget" src="{{ asset('/js/widget.js') }}"></script>
  <!---->
  
  <!--Aqui esta ubicado el chatbot que se mostrara en la pantalla principal-->
    <script>
    var botmanWidget = { 
    title: 'BloodBuddy',
    introMessage:"✋ ¡Hola! Bienvenido al Servicio de Soporte de BloodBuddy escribe Hola o Hola Bot🤖 para poder comenzar",
    mainColor: '#c02026',
    aboutText: '',
    bubbleBackground: '#c02026',
    headerTextColor: '#fff',
    };
    </script>

    <!--Aqui colocamos la primera notificacion push Bienvenido a BloodBuddy-->
  <script src="js/push.min.js"></script>
    <title>Blood Buddy</title>
    <script>
    Push.create("BloodBuddy!", {
        body: "Te damos la bienvenida a BloodBuddy!",
        icon: "img/logo.png",
        timeout: 2500,
        onClick: function() {
            this.close();
        }
    });
    </script>
</head>
<!--Titulo de la Pestaña-->
<title>BloodBuddy</title>
<!--Aqui estan los Estilos-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
<body>

@include('barra_navegacion')
<!--Aqui comienza el carrousel de imagenes de nuestra pagina principal-->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
     <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/4.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption">
        <h5>BloodBuddy</h5>
        <p>Te damos la Bienvenida a BloodBuddy</p>
        <p><a href="{{route('register')}}"class="btn btn-danger mt-3" >Registrarme</a></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/donacion.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption">
         <h5>La sangre es vital</h5>
        <p>la sangre ayuda a curar muchas enfermedades</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption">
        <h5>Salva vidas</h5>
        <p>Gracias a la sangre se pueden salvar muchas vidas</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/5.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption">
       <h5>Donar es ayudar</h5>
        <p>La mejor forma de ayudar es donar</p>
      </div>
    </div>
  </div>
<!--Boton de imagen anterior de el carrousel-->
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
<!--Boton de imagen Siguiente de el carrousel-->
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Siquiente</span>
  </button>
</div>
<!--Aqui Termina el carrousel de imagenes de nuestra pagina principal-->


<!--Aqui comienza la seccion de filosofia-->
<section id="filosofia" class="filosofia-section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-12 col-12">
      <div class="filosofia-img"><br>
        <img src="img/equipo.jpg" alt="" class="img-fluid">
        </div>
      </div>
      <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
        <div class="informacion text">
          <h2>Nuestra<br>Filosofia</h2>
          <p>Brindar una ayuda a las personas necesitadas cuyo propocito sea la obtencion de sangre o plasma.</p>
        </div>
      </div>
      </div>
    </div>
</section>
<!--Aqui Termina la seccion de filosofia-->

<!--Aqui comienza la seccion de informacion -->
<section id="informacion" class="informacion section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-header text-center pb-5">
          <h2>BloodBuddy</h2>
          <p>Aqui puedes ser participe en la donacion de sangre<br> con el propocito de salvar muchas
             vidas en el proceso<br>gracias a tu ayuda esto puede ser posible.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-12 col-lg-4">
        <div class="card text-white text-center bg-dark pb-2">
          <div class="card-body">
          <i class="bi bi-clipboard2-check-fill"></i>
          <h3 class="card-title">Registrate</h3>
          <p class="lead">Solo tardaras unos minutos en cambio tendras distintos Beneficios que podrian
            ser de mucha ayuda en tu vida como el tener la posibilidad de adquirir hemocomponentes.</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-12 col-lg-4">
        <div class="card text-white text-center bg-dark pb-2">
          <div class="card-body">
          <i class="bi bi-chat-square-heart-fill"></i>
          <h3 class="card-title">Dona</h3>
          <p class="lead">Si estás disponible, y puedes ayudar, es el momento de donar recuerda que la
             sangre es muy importante ya que su uso es vital para tratar muchas enfermedades.</p>
          </div>
        </div>
        </div>
       <div class="col-12 col-md-12 col-lg-4">
        <div class="card text-white text-center bg-dark pb-2">
          <div class="card-body">
          <i class="bi bi-person-hearts"></i>
          <h3 class="card-title">Salva Vidas</h3>
          <p class="lead">Salvar vidas, no solo es asunto de médicos o del personal de salud. Salvar
                    vidas, es asunto de todos, y con la donación de sangre, lo estas logrando.</p>
          </div>
        </div>
    </div>
  </div>
</section>
<!--Aqui Termina la seccion de informacion -->

@include('Pie_pagina')
  
</body>
</html>