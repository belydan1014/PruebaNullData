@extends('layouts.app')

@section('content')
    <div class="container">
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">Acceso prueba NullData</div>
                </div>

                <div style="padding-top:30px" class="panel-body">

                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="email" type="email" class="form-control" name="email"
                                       value="{{ old('email') }}"
                                       placeholder="Email">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="password" type="password" class="form-control" name="password"
                                       placeholder="password">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="input-group">
                            <div class="checkbox">
                                <label>
                                    <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                </label>
                            </div>
                        </div>


                        <div style="margin-top:10px" class="form-group">
                            <!-- Button -->

                            <div class="col-sm-12 controls">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    <i class="fa fa-btn fa-sign-in"></i> Accesar
                                </button>

                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-12 control">
                                <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%">
                                    Aun no tienes cuenta?
                                    <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                        Registrate!
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
        <div id="signupbox" style="display:none; margin-top:50px"
             class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">Registro de Acceso</div>
                    <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#"
                                                                                               onclick="$('#signupbox').hide(); $('#loginbox').show()">Login</a>
                    </div>
                </div>
                <div class="panel-body">
                    <form id="signupform" class="form-horizontal" role="form" method="POST"
                          action="{{ url('/register') }}">
                        {{ csrf_field() }}
                        <div id="signupalert" style="display:none" class="alert alert-danger">
                            <p>Error:</p>
                            <span></span>
                        </div>


                        <div class="form-group">
                            <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-3 control-label">Email</label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" name="email" id="email"
                                           placeholder="Ingresa tu Email">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="firstname" class="col-md-3 control-label">Nombre</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="name" id="name"
                                           placeholder="Ingresa tu nombre">
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-3 control-label">Password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Ingresa tu contraseña">
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-3 control-label">Password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="password_confirmation" id="password-confirm" placeholder="Ingresa tu contraseña">
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <!-- Button -->
                            <div class="col-md-offset-5 col-md-7">
                                <button id="btn-signup" type="submit" class="btn btn-info"><i
                                            class="icon-hand-right"></i> &nbsp Registrar
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
