@extends('layouts.app')

@section('template_title')
Update Paciente
@endsection

@section('content')
<section class="content container-fluid">
    <div class="">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card card-default">
                <div class="card-header  bg-dark">
                    <H1 class="text-white">Actualizar Informacion de Paciente</H1>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('pacientes.update', $paciente->id) }}" role="form"
                        enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        @csrf

                        @include('paciente.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection