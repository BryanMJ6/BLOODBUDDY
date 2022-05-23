@extends('layouts.app')

@section('template_title')
{{ $paciente->name ?? 'Show Paciente' }}
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark">
                    <div class="float-left">
                        <H1 class="text-white">Informacion de Paciente</H1>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-danger" href="{{ route('pacientes.index') }}">Regresar</a>
                    </div>
                </div>

                <div class="card-body bg-dark p-2 text-dark bg-opacity-25">

                    <div class="form-group">
                        <strong>Nombre:</strong>
                        {{ $paciente->nombre }}
                    </div>
                    <div class="form-group">
                        <strong>Apellido:</strong>
                        {{ $paciente->apellido }}
                    </div>
                    <div class="form-group">
                        <strong>Edad:</strong>
                        {{ $paciente->edad }}
                    </div>
                    <div class="form-group">
                        <strong>Direccion:</strong>
                        {{ $paciente->direccion }}
                    </div>
                    <div class="form-group">
                        <strong>Telefono:</strong>
                        {{ $paciente->telefono }}
                    </div>
                    <div class="form-group">
                        <strong>Email:</strong>
                        {{ $paciente->email }}
                    </div>
                    <div class="form-group">
                        <strong>Tratamiento:</strong>
                        {{ $paciente->Tratamiento }}
                    </div>
                    <div class="form-group">
                        <strong>Sexo:</strong>
                        {{ $paciente->sexo }}
                    </div>
                    <div class="form-group">
                        <strong>Tipo Sangre:</strong>
                        {{ $paciente->tipo_sangre }}
                    </div>
                    <div class="form-group">
                        <strong>Dui:</strong>
                        {{ $paciente->dui }}
                    </div>
                    <div class="form-group">
                        <strong>Padecimientos:</strong>
                        {{ $paciente->padecimientos }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection