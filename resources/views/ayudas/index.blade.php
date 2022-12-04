<!--Usamos la barra de navegacion de nuestro Layout-->
@extends('layouts.app')

<!--Nombre de esta seccion o Pantalla-->
@section('template_title')
ayudas
@endsection

<!--Aqui mostramos todo el contenido de la pantalla de contactos con el section('content')-->
@section('content')                                                                     
<br><br><br>


<div class="card-body" align="center"> 
<!--AQUI COMIENZA LA SECCION DE AYUDA-->
<div class="accordion w-75" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <a class="btn btn-outline-dark btn-lg">Empecemos</a>
      </button>
    </h2>
     <section id="Bienvenido" class="Bienvenido--section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-12 col-12">
      <div class="Bienvenido-img"><br>
        <img src="img/ayuda.jpg" alt="" class="img-fluid">
        </div>
      </div>
      <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
        <div class="informacion text">
          <h3>Seccion de Ayuda</h3>
          <p>Aqui encontraras toda la informacion,
         sobre nuestra plataforma BloodBuddy</p>
        </div>
      </div>
      </div>
    </div>
</section>
    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
       <p><strong>Bienvenido a esta Seccion de Ayuda .</strong> Aqui encontraras toda la informacion,
         sobre nuestra plataforma BloodBuddy aqui te ayudaremos con toda la informacion en general
        Y como se utlizan cada una de las funciones de BloodBuddy por si tienes dudas de como se usa
        alguna funcion especifica puedes revisar esta seccion para informarte un poco mas<br>
  <div class="accordion" id="accordionPanelsStayOpenExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
        AYUDA 1
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
        AYUDA 2
      </button>
    </h2>
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
        AYUDA 3
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>
      </div>
    </div>
  </div>
<!--AQUI TERMINA LA SECCION DE AYUDA-->



<!--AQUI COMIENZA LA SECCION DE HOME-->
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        <a class="btn btn-outline-dark btn-lg">Home</a>
      </button>
    </h2>
     <section id="Bienvenido" class="filosofia-section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-12 col-12">
      <div class="Bienvenido-img"><br>
        <img src="img/home.png" alt="" class="img-fluid">
        </div>
      </div>
      <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
        <div class="informacion text">
          <h2>Seccion Home</h2>
          <p>el menu de Home es La pagina principal que se mostrara al Iniciar Sesion</p>
        </div>
      </div>
      </div>
    </div>
</section>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
         <strong>El menu de Home.</strong>
        el menu de Home es La pagina principal que se mostrara al Iniciar Sesion y aqui se encuentran los
        botones de acceso a las demas secciones de la aplicacion en este pantalla podras acceder a todas las
        funcionalidades de la pagina haciendo clic sobre cualquiera de ellas.
  <div class="accordion" id="accordionPanelsStayOpenExample1">
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingHOME1">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseHOME1" aria-expanded="true" aria-controls="panelsStayOpen-collapseHOME1">
        SECCION HOME 1
      </button>
    </h2>
    <div id="panelsStayOpen-collapseHOME1" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingHOME1">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingHOME2">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseHOME2" aria-expanded="false" aria-controls="panelsStayOpen-collapseHOME2">
        SECCION HOME 2
      </button>
    </h2>
    <div id="panelsStayOpen-collapseHOME2" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingHOME2">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingHOME3">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseHOME3" aria-expanded="false" aria-controls="panelsStayOpen-collapseHOME3">
        SECCION HOME 3
      </button>
    </h2>
    <div id="panelsStayOpen-collapseHOME3" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingHOME3">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>
      </div>
    </div>
  </div>
  <!--AQUI TERMINA LA SECCION DE HOME-->



<!--AQUI COMIENZA LA SECCION DE MAS INFORMACION-->
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        <a class="btn btn-outline-dark btn-lg">Mas Informacion</a>
      </button>
    </h2>
    <section id="Bienvenido" class="Bienvenido--section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-12 col-12">
      <div class="Bienvenido-img"><br>
        <img src="img/informacion.png" alt="" class="img-fluid">
        </div>
      </div>
      <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
        <div class="informacion text">
          <h3>Seccion de Mas Informacion</h3>
          <p>La seccion de mas informacion te muestrar la informacion de otros apartados de informacion general.</p>
        </div>
      </div>
      </div>
    </div>
</section>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
  <div class="accordion" id="accordionPanelsStayOpenExample3">
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingINFO1">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseINFO1" aria-expanded="true" aria-controls="panelsStayOpen-collapseINFO1">
        Seccion Mas Informacion 1
      </button>
    </h2>
    <div id="panelsStayOpen-collapseINFO1" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingINFO1">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingINFO2">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseINFO2" aria-expanded="false" aria-controls="panelsStayOpen-collapseINFO2">
        Seccion Mas Informacion 2
      </button>
    </h2>
    <div id="panelsStayOpen-collapseINFO2" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingINFO2">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingINFO3">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseINFO3" aria-expanded="false" aria-controls="panelsStayOpen-collapseINFO3">
        Seccion Mas Informacion 3
      </button>
    </h2>
    <div id="panelsStayOpen-collapseINFO3" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingINFO3">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>
      </div>
    </div>
  </div>
</div>
<!--AQUI TERMINA LA SECCION DE MAS INFORMACION-->



<!--AQUI COMIENZA LA SECCION DE MI PERFIL--->
<div class="accordion w-75" id="accordionExample1">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingUNO">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseUNO" aria-expanded="true" aria-controls="collapseUNO">
        <a class="btn btn-outline-dark btn-lg">Mi Perfil</a>
      </button>
    </h2>
    <section id="Bienvenido" class="Bienvenido--section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-12 col-12">
      <div class="Bienvenido-img"><br>
        <img src="img/miperfil.png" alt="" class="img-fluid">
        </div>
      </div>
      <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
        <div class="informacion text">
          <h3>Seccion de Mi Perfil</h3>
          <p>Aqui encontraras toda la informacion,
         sobre la seccion de Mi Perfil</p>
        </div>
      </div>
      </div>
    </div>
</section>
    <div id="collapseUNO" class="accordion-collapse collapse" aria-labelledby="headingUNO" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
  <div class="accordion" id="accordionPanelsStayOpenExample4">
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingPERFIL1">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsePERFIL1" aria-expanded="true" aria-controls="panelsStayOpen-collapsePERFIL1">
        Seccion Mi Perfil 1
      </button>
    </h2>
    <div id="panelsStayOpen-collapsePERFIL1" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingPERFIL1">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingPERFIL2">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsePERFIL2" aria-expanded="false" aria-controls="panelsStayOpen-collapsePERFIL2">
        Seccion Mi Perfil 2
      </button>
    </h2>
    <div id="panelsStayOpen-collapsePERFIL2" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingPERFIL2">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingPERFIL3">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsePERFIL3" aria-expanded="false" aria-controls="panelsStayOpen-collapsePERFIL3">
        Seccion Mi Perfil 3
      </button>
    </h2>
    <div id="panelsStayOpen-collapsePERFIL3" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingPERFIL3">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>
      </div>
    </div>
  </div> 
<!--AQUI TERMINA LA SECCION DE MI PERFIL--->



<!--AQUI COMIENZA LA SECCION DE RESTABLECER CONTRASEÑA--->
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingDOS">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDOS" aria-expanded="false" aria-controls="collapseDOS">
      <a class="btn btn-outline-dark btn-lg">Restablecer Contraseña</a>
      </button>
    </h2>
     <section id="Bienvenido" class="Bienvenido--section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-12 col-12">
      <div class="Bienvenido-img"><br>
        <img src="img/restablecer.png" alt="" class="img-fluid">
        </div>
      </div>
      <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
        <div class="informacion text">
          <h3>Seccion de Restablecer Contraseña</h3>
          <p>Aqui encontraras toda la informacion,
         sobre la Seccion de Mi Perfil</p>
        </div>
      </div>
      </div>
    </div>
</section>
    <div id="collapseDOS" class="accordion-collapse collapse" aria-labelledby="headingDOS" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
  <div class="accordion" id="accordionPanelsStayOpenExample5">
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingRESTA1">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseRESTA1" aria-expanded="true" aria-controls="panelsStayOpen-collapseRESTA1">
        Seccion Restablecer Contraseña 1
      </button>
    </h2>
    <div id="panelsStayOpen-collapseRESTA1" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingRESTA1">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingRESTA2">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseRESTA2" aria-expanded="false" aria-controls="panelsStayOpen-collapseRESTA2">
        Seccion Restablecer Contraseña 2
      </button>
    </h2>
    <div id="panelsStayOpen-collapseRESTA2" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingRESTA2">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingRESTA3">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseRESTA3" aria-expanded="false" aria-controls="panelsStayOpen-collapseRESTA3">
        Seccion Restablecer Contraseña 3
      </button>
    </h2>
    <div id="panelsStayOpen-collapseRESTA3" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingRESTA3">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>
      </div>
    </div>
  </div>
<!--AQUI TERMINA LA SECCION DE RESTABLECER CONTRASEÑA--->



<!--AQUI COMIENZA LA SECCION DE EL DONANTE--->
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTRES">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTRES" aria-expanded="false" aria-controls="collapseTRES">
      <a class="btn btn-outline-dark btn-lg">Donante</a>
      </button>
    </h2>
    <section id="Bienvenido" class="Bienvenido--section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-12 col-12">
      <div class="Bienvenido-img"><br>
        <img src="img/donante2.png" alt="" class="img-fluid">
        </div>
      </div>
      <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
        <div class="informacion text">
          <h3>Seccion de Donante</h3>
          <p>Aqui encontraras toda la informacion,
         sobre la Seccion de Donante</p>
        </div>
      </div>
      </div>
    </div>
</section>
    <div id="collapseTRES" class="accordion-collapse collapse" aria-labelledby="headingTRES" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
  <div class="accordion" id="accordionPanelsStayOpenExample6">
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingDONANTE1">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseDONANTE1" aria-expanded="true" aria-controls="panelsStayOpen-collapseDONANTE1">
        Seccion Donante 1
      </button>
    </h2>
    <div id="panelsStayOpen-collapseDONANTE1" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingDONANTE1">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingDONANTE2">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseDONANTE2" aria-expanded="false" aria-controls="panelsStayOpen-collapseDONANTE2">
        Seccion Donante 2
      </button>
    </h2>
    <div id="panelsStayOpen-collapseDONANTE2" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingDONANTE2">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingDONANTE3">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseDONANTE3" aria-expanded="false" aria-controls="panelsStayOpen-collapseDONANTE3">
        Seccion Donante 3
      </button>
    </h2>
    <div id="panelsStayOpen-collapseDONANTE3" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingDONANTE3">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>
      </div>
    </div>
  </div>
</div>
<!--AQUI TERMINA LA SECCION DE EL DONANTE--->


<!--AQUI COMIENSA LA SECCION DE EL DONANTE--->
<div class="accordion w-75" id="accordionExample2">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFORO">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFORO" aria-expanded="true" aria-controls="collapseFORO">
      <a class="btn btn-outline-dark btn-lg">Foro</a>
      </button>
    </h2>
    <section id="Bienvenido" class="Bienvenido--section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-12 col-12">
      <div class="Bienvenido-img"><br>
        <img src="img/Foro1.png" alt="" class="img-fluid">
        </div>
      </div>
      <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
        <div class="informacion text">
          <h3>Seccion de Foro</h3>
          <p>Aqui encontraras toda la informacion,
         sobre el Foro de BloodBuddy</p>
        </div>
      </div>
      </div>
    </div>
</section>
    <div id="collapseFORO" class="accordion-collapse collapse" aria-labelledby="headingFORO" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
  <div class="accordion" id="accordionPanelsStayOpenExample7">
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingFORO1">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFORO1" aria-expanded="true" aria-controls="panelsStayOpen-collapseFORO1">
        Seccion Foro 1
      </button>
    </h2>
    <div id="panelsStayOpen-collapseFORO1" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFORO1">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingFORO2">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFORO2" aria-expanded="false" aria-controls="panelsStayOpen-collapseFORO2">
        Seccion Foro 2
      </button>
    </h2>
    <div id="panelsStayOpen-collapseFORO2" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFORO2">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingFORO3">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFORO3" aria-expanded="false" aria-controls="panelsStayOpen-collapseFORO3">
        Seccion Foro 3
      </button>
    </h2>
    <div id="panelsStayOpen-collapseFORO3" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFORO3">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>
      </div>
    </div>
  </div>
  <!--AQUI TERMINA LA SECCION DE EL FORO--->


 <!--AQUI COMIENSA LA SECCION DE EL INICIO DE SESION--->
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingINICIO">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseINICIO" aria-expanded="false" aria-controls="collapseINICIO">
      <a class="btn btn-outline-dark btn-lg">Inicio de Sesion</a>
      </button>
    </h2>
    <section id="Bienvenido" class="Bienvenido--section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-12 col-12">
      <div class="Bienvenido-img"><br>
        <img src="img/Sesion1.png" alt="" class="img-fluid">
        </div>
      </div>
      <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
        <div class="informacion text">
          <h3>Seccion de Inicio de Sesion</h3>
          <p>Aqui encontraras toda la informacion,
         sobre El inicio de Sesion y su uso.</p>
        </div>
      </div>
      </div>
    </div>
</section>
    <div id="collapseINICIO" class="accordion-collapse collapse" aria-labelledby="headingINICIO" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
  <div class="accordion" id="accordionPanelsStayOpenExample8">
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingINICIO1">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseINICIO1" aria-expanded="true" aria-controls="panelsStayOpen-collapseINICIO1">
        Seccion Inicio de Sesion 1
      </button>
    </h2>
    <div id="panelsStayOpen-collapseINICIO1" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingINICIO1">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingINICIO2">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseINICIO2" aria-expanded="false" aria-controls="panelsStayOpen-collapseINICIO2">
        Seccion Inicio de Sesion 2
      </button>
    </h2>
    <div id="panelsStayOpen-collapseINICIO2" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingINICIO2">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingINICIO3">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseINICIO3" aria-expanded="false" aria-controls="panelsStayOpen-collapseINICIO3">
        Seccion Inicio de Sesion 3
      </button>
    </h2>
    <div id="panelsStayOpen-collapseINICIO3" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingINICIO3">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>
      </div>
    </div>
  </div>
   <!--AQUI TERMINA LA SECCION DE EL INICIO DE SESION--->


 <!--AQUI COMIENSA LA SECCION DE EL INICIO DE REGISTRO--->
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingREGISTRO">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseREGISTRO" aria-expanded="false" aria-controls="collapseREGISTRO">
        <a class="btn btn-outline-dark btn-lg">Registro</a>
      </button>
    </h2>
    <section id="Bienvenido" class="Bienvenido--section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-12 col-12">
      <div class="Bienvenido-img"><br>
        <img src="img/Registro1.png" alt="" class="img-fluid">
        </div>
      </div>
      <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
        <div class="informacion text">
          <h3>Seccion de Ayuda</h3>
          <p>Aqui encontraras toda la informacion,
         sobre nuestra plataforma BloodBuddy</p>
        </div>
      </div>
      </div>
    </div>
</section>
    <div id="collapseREGISTRO" class="accordion-collapse collapse" aria-labelledby="headingREGISTRO" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
  <div class="accordion" id="accordionPanelsStayOpenExample9">
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingREGISTRO1">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseREGISTRO1">
        Seccion de Registro 1
      </button>
    </h2>
    <div id="panelsStayOpen-collapseREGISTRO1" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingREGISTRO1">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingREGISTRO2">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseREGISTRO2" aria-expanded="false" aria-controls="panelsStayOpen-collapseREGISTRO2">
        Seccion de Registro 2
      </button>
    </h2>
    <div id="panelsStayOpen-collapseREGISTRO2" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingREGISTRO2">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingREGISTRO3">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseREGISTRO3" aria-expanded="false" aria-controls="panelsStayOpen-collapseREGISTRO3">
        Seccion de Registro 3
      </button>
    </h2>
    <div id="panelsStayOpen-collapseREGISTRO3" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingREGISTRO3">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>
      </div>
    </div>
  </div>
</div>
 <!--AQUI TERMINA LA SECCION DE EL REGISTRO--->
@endsection


