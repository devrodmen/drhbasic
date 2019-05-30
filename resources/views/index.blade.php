@extends('vendor.gyomanager.master')

@section('body')
    <div id="app">
        <login-component></login-component>
    </div>

    <div id="app">
        <example-component></example-component>
    </div>
    <!--<div class="page-center">
        <div class="page-center-in">
            <div class="container-fluid">
                <form class="sign-box" action="{{ url(config('adminlte.login_url', 'login')) }}" method="post" id="form_inicio" name="form_inicio" method="post">
                    {!! csrf_field() !!}
                    <div class="sign-avatar">
                        <img src="{{ asset('vendor/gyomanager/img/avatar-sign.png') }}" alt="">
                    </div>
                    <header class="sign-title"><b>Iniciar Sesión</b></header>

                    <div class="form-group has-feedback" {{ $errors->has('email') ? 'has-error' : '' }}>
                        <div class="input-group">
                            <input class="form-control" type="email" id="email" name="email" placeholder="E-mail" minlength="4" value="{{ old('email') }}"/>
                            <span style="float: right;position: absolute;top:7px;" class="glyphicon glyphicon-remove form-control-feedback"></span>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group has-feedback" {{ $errors->has('email') ? 'has-error' : '' }}>
                        <div class="input-group">
                            <input type="password" id="idtxtpassword" name="password" class="form-control" placeholder="Contraseña" minlength="4"/>

                            <span style="float: right;position: absolute;top:7px;" class="glyphicon glyphicon-remove form-control-feedback"></span>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="checkbox float-left">
                            <input type="checkbox" id="signed-in"/>
                            <label for="signed-in"><b>Recuérdame</b></label>
                        </div>
                        <div class="float-right reset">
                            <a href="recuperar.php"><b>¿Olvidó su contraseña?</b></a>
                        </div>
                    </div>

                    <button style="position: relative;top: 10px;" type="submit" class="btn btn-rounded btn-success"><i class="fa fa-unlock-alt" style="position: relative;top: 1px;"></i> <b>Acceder</b></button>
                </form>
            </div>
        </div>
    </div>-->