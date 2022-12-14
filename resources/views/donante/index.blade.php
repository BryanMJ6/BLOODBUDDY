@extends('layouts.app')

@section('template_title')
Donante
@endsection
@section('content')
<br><br><br>
</div>
<div class="row justify-content-center">
    <div class="col-sm-7">
        <div class="card">
            <div class="card-header bg-dark text-white">
                <div style="display: flex; justify-content: space-between; align-items: center;">

                    <span id="card_title">
                        {{ __('Detalles de las ultimas Personas registradas') }}
                    </span>

                </div>
            </div>
            
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                    <caption>Descripcion de los ultimos registrados</caption>
                        <thead class="thead">
                            <tr>
                                <th>Soy un</th>
                                <th>Nombres</th>
                                <th>Edad</th>
                                <th>Donante</th>
                                <th>Sexo</th>
                                <th>Tipo Sangre</th>
                                <th>Padecimiento</th>

                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($donantes as $donante)
                            <tr>
                                <td class="text-danger"><h5>{{ $donante->soy }}</h5></td>
                                <td>{{ $donante->nombres }}</td>
                                <td>{{ $donante->edad }}</td>
                                <td>{{ $donante->donante }}</td>
                                <td>{{ $donante->sexo }}</td>
                                <td class="text-danger"><h5>{{ $donante->tipo_sangre }}</h5></td>
                                <td>{{ $donante->padecimiento }}</td>

                                <td>
                                    
                                    <form action="{{ route('donantes.destroy',$donante->id) }}" method="POST">

                                        @csrf
                                        @method('DELETE')

                                </td>
                            </tr> 
                            @endforeach
                            <div class="row content-center">
                                <h3>
                                    Hola🖐
                                    <h2 class="text-danger">

                                    </h2>

                                    <h2>
                                        🎉¡Muchas gracias por haberte registrado!🎉 
                                        <h2>Aqui esta la lista de las ultimas Personas Registradas<h1>
                                                <h3>
                                                    <a class="btn btn-danger" href="home">Regresar al
                                                        Menu de Inicio</a>
                                                        
                        </form>                              
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {!! $donantes->links() !!}
    </div>

</div>
</div>

@endsection