@extends('layouts.app')

@section('template_title')
Donante
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header bg-danger">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <form action="{{ route('donantes.index') }}" method="GET">
                            <div class="btn-group">
                                <input type="text" name="busqueda" class="form-control">
                                <input type="submit" value="Buscar" class="btn btn-dark">
                            </div>
                        </form>
                        <H1 align="center" class="text-white">Donantes</H1>
                        <span id="card_title text-bold">
                            {{ __('') }}
                            </h1>

                            <div class=" float-right">
                                <a href="{{ route('donantes.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Crear nueva Informacion') }}
                                </a>
                            </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-danger">{{ $message}}</div>
                @endif

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>No</th>

                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Edad</th>
                                    <th>Direccion</th>
                                    <th>Telefono</th>
                                    <th>Email</th>
                                    <th>Donante</th>
                                    <th>Sexo</th>
                                    <th>Tipo Sangre</th>
                                    <th>Dui</th>
                                    <th>Padecimiento</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($donantes as $donante)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $donante->nombre }}</td>
                                    <td>{{ $donante->apellido }}</td>
                                    <td>{{ $donante->edad }}</td>
                                    <td>{{ $donante->direccion }}</td>
                                    <td>{{ $donante->telefono }}</td>
                                    <td>{{ $donante->email }}</td>
                                    <td>{{ $donante->donante }}</td>
                                    <td>{{ $donante->sexo }}</td>
                                    <td>{{ $donante->tipo_sangre }}</td>
                                    <td>{{ $donante->dui }}</td>
                                    <td>{{ $donante->padecimiento }}</td>

                                    <td>
                                        <form action="{{ route('donantes.destroy',$donante->id) }}" method="POST">
                                            <a class="btn btn-sm btn-dark "
                                                href="{{ route('donantes.show',$donante->id) }}"><i
                                                    class="fa fa-fw fa-eye"></i>Ver Informacion</a>
                                            <a class="btn btn-sm btn-primary"
                                                href="{{ route('donantes.edit',$donante->id) }}"><i
                                                    class="fa fa-fw fa-edit"></i>Editar Informacion</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm()"><i
                                                    class="fa fa-fw fa-trash"></i>Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
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