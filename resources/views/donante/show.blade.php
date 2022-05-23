@extends('layouts.app')

@section('template_title')
{{ $donante->name ?? 'Show Donante' }}
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-danger">
                    <div class="float-left">
                        <H1 class="text-white">Informacion de Donante</H1>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('donantes.index') }}">Regresar</a>
                    </div>
                </div>

                <div class="card-body bg-danger p-2 text-dark bg-opacity-25">

                    <div class="form-group">
                        <strong>Nombre:</strong>
                        {{ $donante->nombre }}
                    </div>
                    <div class="form-group">
                        <strong>Apellido:</strong>
                        {{ $donante->apellido }}
                    </div>
                    <div class="form-group">
                        <strong>Edad:</strong>
                        {{ $donante->edad }}
                    </div>
                    <div class="form-group">
                        <strong>Direccion:</strong>
                        {{ $donante->direccion }}
                    </div>
                    <div class="form-group">
                        <strong>Telefono:</strong>
                        {{ $donante->telefono }}
                    </div>
                    <div class="form-group">
                        <strong>Email:</strong>
                        {{ $donante->email }}
                    </div>
                    <div class="form-group">
                        <strong>Donante:</strong>
                        {{ $donante->donante }}
                    </div>
                    <div class="form-group">
                        <strong>Sexo:</strong>
                        {{ $donante->sexo }}
                    </div>
                    <div class="form-group">
                        <strong>Tipo Sangre:</strong>
                        {{ $donante->tipo_sangre }}
                    </div>
                    <div class="form-group">
                        <strong>Dui:</strong>
                        {{ $donante->dui }}
                    </div>
                    <div class="form-group">
                        <strong>Padecimiento:</strong>
                        {{ $donante->padecimiento }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection