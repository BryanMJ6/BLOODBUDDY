@if ( session('updateClave') )
<div class="alert alert-primary" role="alert">
    <h3>Exito</h3>
    {{ session('updateClave') }}
</div>

<div class="row justify-content-center">
    <div class="col-md-12 mt-5 text-center">
    </div>
</div>
@endif


@if ( session('name') )
<div class="alert alert-primary" role="alert">
    <h3>Exito</h3>
    {{ session('name') }}
</div>
@endif


@if ( session('claveIncorrecta') )
<div class="alert alert-danger" role="alert">
    <h3>Lo siento!</h3> {{ session('claveIncorrecta') }}
</div>
@endif


@if ( session('clavemenor') )
<div class="alert alert-warning" role="alert">
    <h3>Lo siento !</h3>
    {{ session('clavemenor') }}
</div>
@endif