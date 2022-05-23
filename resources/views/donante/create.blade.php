@extends('layouts.app')

@section('template_title')
Create Donante
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card card-default">
                <div class="card-header bg-danger">
                    <H1 align="center" class="text-white">Crear nueva Informacion</H1>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('donantes.store') }}" role="form"
                        enctype="multipart/form-data">
                        @csrf

                        @include('donante.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection