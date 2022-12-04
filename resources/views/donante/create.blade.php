
@extends('layouts.app')

@section('template_title')
Create Donante
@endsection

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/style.css">
<br><br><br>
<div class="container" align="center">
    <div class="row justify-content "></div>
    <section class="content container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">

                @includeif('partials.errors')

                <div class="card card-default bg-danger p-2 text-dark bg-opacity-25">
                    <div class="card-header bg-danger text-white">
                        <h5><span class="card-title">Registro de Donante</span></h5>
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