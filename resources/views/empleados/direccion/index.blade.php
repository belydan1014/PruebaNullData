@extends('layouts.app')
@section('content')
    <br/>
    <div class="col-md-12">
        <div class="form-horizontal">
            {!! csrf_field() !!}
            <input type="hidden" name="_method" value="PATCH">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>Direcciones del
                        empleado {{$empleado->nombre}} {{$empleado->apellido_paterno}} {{$empleado->apellido_materno}}</strong>
                </div>
                <div class="panel-body">
                    <?php
                        $i=1;

                    ?>
                    @foreach($direcciones as $direccion)
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <h3>Dirección {{$i++}}</h3>
                        </div>
                    </div>
                        <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Calle</label>
                                <div class="col-sm-6">
                                    <input type="text" name="calle" class="form-control" value="{{$direccion->calle}}"
                                           required disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Colonia</label>
                                <div class="col-sm-6">
                                    <input type="text" name="colonia" class="form-control" value="{{$direccion->colonia}}"
                                           required disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Localidad</label>
                                <div class="col-sm-6">
                                    <input type="text" name="localidad" class="form-control"
                                           value="{{$direccion->localidad}}" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">No exterior</label>
                                <div class="col-sm-3">
                                    <input type="text" name="no_exterior" class="form-control"
                                           value="{{$direccion->no_exterior}}" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">No interior</label>
                                <div class="col-sm-3">
                                    <input type="text" name="no_interior" class="form-control"
                                           value="{{$direccion->no_interior}}" disabled>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Municipio</label>
                                <div class="col-sm-6">
                                    <input type="text" name="municipio" class="form-control"
                                           value="{{$direccion->municipio}}" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Estado</label>
                                <div class="col-sm-6">
                                    <input type="text" name="estado" class="form-control" value="{{$direccion->estado}}"
                                           disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Pais</label>
                                <div class="col-sm-6">
                                    <input type="text" name="pais" class="form-control" value="{{$direccion->pais}}"
                                           disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">C.P</label>
                                <div class="col-sm-3">
                                    <input type="text" name="codigo_postal" class="form-control"
                                           value="{{$direccion->codigo_postal}}" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Telefono</label>
                                <div class="col-sm-4">
                                    <input type="text" name="telefono" class="form-control"
                                           value="{{$direccion->telefono}}" disabled>
                                </div>
                            </div>
                            <hr>
                        </div>
                        </div>
                    @endforeach
                </div>
                <div class="panel-footer">
                    <a href="{{ route('empleado.index') }}" class="btn btn-default btn-sm btn-addon"><span
                                class="glyphicon glyphicon-arrow-left"></span>Regresar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
