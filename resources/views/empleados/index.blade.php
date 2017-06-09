@extends('layouts.app')
@section('content')
    <br/>
    <div class="col-md-10 col-md-offset-1 col-sm-12">
        <a href="{{ route('empleado.create') }}" class="btn btn-sm btn-success btn-addon"><i class="glyphicon glyphicon-plus"></i> Registrar Empleado</a>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>RFC</th>
                    <th>Nombre</th>
                    <th>email</th>
                    <th>Fecha de nacimiento</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($empleados as $empleado)
                    <tr>
                        <td>{{ $empleado->id }}</td>
                        <td>{{ $empleado->rfc }}</td>
                        <td>{{ $empleado->nombre }}</td>
                        <td>{{ $empleado->email }}</td>
                        <td>{{ \Carbon\Carbon::parse(str_replace('-',"/",$empleado->fecha_nacimiento))->format('d/m/Y')}}</td>
                        <td>
                            <a href="{{ route('empleado.direccion.create', ['empleado' => $empleado->id]) }}" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span></a>
                            <a href="{{ route('empleado.direcciones', ['empleado' => $empleado->id]) }}" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-home"></span></a>
                            <a href="{{ route('empleado.delete', ['empleado' => $empleado->id]) }}" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
