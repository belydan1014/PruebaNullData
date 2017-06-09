@extends('layouts.app')
@section('content')
    <div class="col-md-8 col-md-offset-2 col-sm-12">
        <form class="form-horizontal" role="form" method="POST" action="{{ route('empleado.destroy', ['empleado' => $empleado->id]) }}">
            {!! csrf_field() !!}
            <input type="hidden" name="_method" value="DELETE">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Eliminar empleado
                </div>
                <div class="panel-body">
                    <p>Esta seguro de eliminar al empleado : <del>{{ $empleado->nombre }}</del>?</p>
                </div>
                <div class="panel-footer">
                    <button type="submit" class="btn btn-sm btn-danger btn-addon"><span class="glyphicon glyphicon-ok"></span> Eliminar</button>
                    <a href="{{ route('empleado.index') }}" class="btn btn-default btn-sm btn-addon"><span class="glyphicon glyphicon-remove"></span> Cancelar</a>
                </div>
            </div>
        </form>
    </div>
@endsection