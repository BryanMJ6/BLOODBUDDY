@extends('layouts.app')

@section('template_title')
Update Donante
@endsection

@section('content')
<section class="content container-fluid">
    <div class="">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card card-default">
                <div class="card-header bg-danger">
                    <H1 align="center" class="text-white">Actualizar informacion Donante</H1>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('donantes.update', $donante->id) }}" role="form"
                        enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        @csrf

                        @include('donante.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection