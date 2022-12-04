@if ( session('updateClave') )
<script src="js/push.min.js"></script>
<script>
Push.create("BloodBuddy!", {
    body: "Felicidades! Su clave ha sido actualizada con exito.",
    icon: "img/contrasena.png",
    timeout: 5000,
    onClick: function() {
        window.location = "{{ session('updateClave') }}";
        this.close();
    }
});
</script>
<div class="alert alert-dark" role="alert">
    <strong>Felicitaciones Felicidades! Su clave ha sido actualizada con exito </strong>
    {{ session('updateClave') }}
</div>
<div class="row justify-content-center">
    <div class="col-md-12 mt-5 text-center">
    </div>
</div>
@endif

@if ( session('name') )
<div class="alert alert-dark" role="alert">
    <strong>Felicidades! Su nombre de Usuario se Actualizo Correctamente</strong>
    {{ session('name') }}
</div>
<script src="js/push.min.js"></script>
<script>
Push.create("BloodBuddy!", {
    body: "Felicidades! Su nombre de Usuario se  Actualizo Correctamente.",
    icon: "img/perfil.png",
    timeout: 5000,
    onClick: function() {
        window.location = "{{ session('updateClave') }}";
        this.close();
    }
});
</script>
@endif

@if ( session('claveIncorrecta') )
<div class="alert alert-danger" role="alert">
    <strong>Lo siento! Su contraceña no es Correcta.</strong> {{ session('claveIncorrecta') }}
</div>
<script src="js/push.min.js"></script>
<script>
Push.create("BloodBuddy!", {
    body: "Lo siento! Su contraceña no es Correcta.",
    icon: "img/contrasena-incorrecta.png",
    timeout: 5000,
    onClick: function() {
        window.location = "{{ session('updateClave') }}";
        this.close();
    }
});
</script>
@endif


@if ( session('clavemenor') )
<div class="alert alert-warning" role="alert">
    <strong>Lo siento ! Su contraceña es demasiado corta por favor intentalo otra vez</strong>
    {{ session('clavemenor') }}
</div>
<script src="js/push.min.js"></script>
<script>
Push.create("BloodBuddy!", {
    body: "Lo siento ! Su contraceña es demasiado corta por favor intentalo otra vez",
    icon: "img/contracena-corta.png",
    timeout: 5000,
    onClick: function() {
        window.location = "{{ session('updateClave') }}";
        this.close();
    }
});
</script>
@endif