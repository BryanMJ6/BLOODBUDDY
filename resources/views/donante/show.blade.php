@extends('layouts.app')

@section('template_title')
    {{ $donante->name ?? 'Show Donante' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Donante</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('donantes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Soy:</strong>
                            {{ $donante->soy }}
                        </div>
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $donante->nombres }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $donante->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $donante->edad }}
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
