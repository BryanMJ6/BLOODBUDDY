@extends('layouts.app')

@section('template_title')
Paciente
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header bg-dark">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <form action="{{ route('pacientes.index') }}" method="GET">
                            <div class="btn-group">
                                <input type="text" name="buscar" class="form-control">
                                <input type="submit" value="Buscar" class="btn btn-danger">
                            </div>
                        </form>
                        <H1 align="center" class="text-white">Pacientes</H1>
                        {{ __('') }}
                        </h1>

                        <div class="float-right">
                            <a href="{{ route('pacientes.create') }}" class="btn btn-primary btn-sm float-right"
                                data-placement="left">
                                {{ __('Crear nueva Informacion') }}
                            </a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-dark">{{ $message}}</div>
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
                                    <th>Tratamiento</th>
                                    <th>Sexo</th>
                                    <th>Tipo Sangre</th>
                                    <th>Dui</th>
                                    <th>Padecimientos</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pacientes as $paciente)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $paciente->nombre }}</td>
                                    <td>{{ $paciente->apellido }}</td>
                                    <td>{{ $paciente->edad }}</td>
                                    <td>{{ $paciente->direccion }}</td>
                                    <td>{{ $paciente->telefono }}</td>
                                    <td>{{ $paciente->email }}</td>
                                    <td>{{ $paciente->Tratamiento }}</td>
                                    <td>{{ $paciente->sexo }}</td>
                                    <td>{{ $paciente->tipo_sangre }}</td>
                                    <td>{{ $paciente->dui }}</td>
                                    <td>{{ $paciente->padecimientos }}</td>

                                    <td>
                                        <form action="{{ route('pacientes.destroy',$paciente->id) }}" method="POST">
                                            <a class="btn btn-sm btn-dark "
                                                href="{{ route('pacientes.show',$paciente->id) }}"><i
                                                    class="fa fa-fw fa-eye"></i>Ver Informacion</a>
                                            <a class="btn btn-sm btn-primary"
                                                href="{{ route('pacientes.edit',$paciente->id) }}"><i
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
            {!! $pacientes->links() !!}
        </div>
    </div>
</div>
@endsection