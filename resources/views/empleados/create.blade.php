@extends('layouts.app')
@section('content')
    <br/>
    <div class="col-md-12">
        <form class="form-horizontal" role="form" method="POST" action="{{ route('empleado.store') }}">
            {!! csrf_field() !!}
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>Crear un nuevo empleado</strong>
                </div>
                <div class="panel-body">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">RFC</label>
                            <div class="col-sm-4">
                                <input type="text" name="rfc" class="form-control" value="{{ old('rfc') }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nombre</label>
                            <div class="col-sm-6">
                                <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Apellido Paterno</label>
                            <div class="col-sm-6">
                                <input type="text" id="paterno" name="paterno" class="form-control" value="{{ old('paterno') }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Apellido Materno</label>
                            <div class="col-sm-6">
                                <input type="text" id="materno" name="materno" class="form-control" value="{{ old('materno') }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Fecha de Nacimiento</label>
                            <div class="col-sm-6">
                                <input type="date"  id="fecha_nacimiento" name="fecha_nacimiento" class="form-control" value="{{ old('fecha_nacimiento') }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Calle</label>
                            <div class="col-sm-6">
                                <input type="text" name="calle" class="form-control" value="{{ old('calle') }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Colonia</label>
                            <div class="col-sm-6">
                                <input type="text" name="colonia" class="form-control" value="{{ old('colonia') }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Localidad</label>
                            <div class="col-sm-6">
                                <input type="text" name="localidad" class="form-control" value="{{ old('localidad') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Municipio</label>
                            <div class="col-sm-6">
                                <input type="text" name="municipio" class="form-control" value="{{ old('municipio') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Estado</label>
                            <div class="col-sm-6">
                                <input type="text" name="estado" class="form-control" value="{{ old('estado') }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Pais</label>
                            <div class="col-sm-6">
                                <input type="text" name="pais" class="form-control" value="{{ old('pais') }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">C.P</label>
                            <div class="col-sm-3">
                                <input type="text" name="codigo_postal" class="form-control" value="{{ old('codigo_postal') }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">No exterior</label>
                            <div class="col-sm-3">
                                <input type="text" name="no_exterior" class="form-control" value="{{ old('no_exterior') }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">No interior</label>
                            <div class="col-sm-3">
                                <input type="text" name="no_interior" class="form-control" value="{{ old('no_interior') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Telefono</label>
                            <div class="col-sm-4">
                                <input type="text" name="telefono" class="form-control" value="{{ old('telefono') }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-6">
                                <input type="text" name="email" class="form-control" value="{{ old('email') }}" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <button type="submit" class="btn btn-sm btn-success btn-addon"><span class="glyphicon glyphicon-ok"></span> Crear</button>
                    <a href="{{ route('empleado.index') }}" class="btn btn-default btn-sm btn-addon"><span class="glyphicon glyphicon-remove"></span> Cancelar</a>
                </div>
            </div>
        </form>
    </div>
@endsection