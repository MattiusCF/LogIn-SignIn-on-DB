@extends('layouts.app')

@section('content')
<link href="{{asset('css/style.css')}}" rel="stylesheet">
<div class="container">
    <div class="row row-centered">
        <div class="col-md-5 col-centered">
            <div class="panel panel-default pan">
                <div class="panel-heading"><p class="titl">Planillero</p></div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/authPla">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="&#x1F482;  Nombre Completo." required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('doc') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <input id="doc" type="text" class="form-control" name="doc" value="{{ old('doc') }}" placeholder="&#x1F4B3;  Documento de identidad." required>

                                @if ($errors->has('doc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('doc') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="&#x1F4E7; Correo electrónico." required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" placeholder="&#x1F512;  Contraseña" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="&#x1F512;  Confirmar contraseña." required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-4">
                                <button type="submit" class="btn">
                                    Registrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection