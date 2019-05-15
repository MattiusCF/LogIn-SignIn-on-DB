@extends('layouts.app')

@section('content')
@if(!Auth::guest() && (Auth::user()->rol==0 || Auth::user()->rol==1))
<link href="{{asset('css/style.css')}}" rel="stylesheet">
<div class="container">
    <div class="row row-centered">
        <div class="col-md-5 col-centered">
            <div class="panel panel-default pan">
                <div class="panel-heading"><p class="titl">Jugador</p></div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/authJug">
                        {{ csrf_field() }}
                        <input type="text" name="club" style="display: none" value="{{(LogIn\coord::findOrFail(Auth::user()->id))->club->id}}">

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="&#x1F482;  Nombre Completo" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tipodoc') ? ' has-error' : '' }}">
                            <label for="tipodoc" class="col-md-2 col-form-label text-md-left">Tipo Documento</label>
                            <div class="col-md-6">
                                <input type="Radio" name="tipodoc" value="CC" required>CC &nbsp
                                <input type="Radio" name="tipodoc" value="TI" required>TI &nbsp
                                <input type="Radio" name="tipodoc" value="Pasaporte" required>Pasaporte &nbsp
                                @if ($errors->has('tipodoc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tipodoc') }}</strong>
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
                        
                        <div class="form-group{{ $errors->has('fecha') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <input id="fecha" type="text" class="form-control" name="fecha" value="{{ old('fecha') }}" placeholder="&#x1F4C6;  Fecha de nacimiento dd/mm/aaaa." required>

                                @if ($errors->has('fecha'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fecha') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('rh') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <input id="rh" type="text" class="form-control" name="rh" value="{{ old('rh') }}" placeholder="&#x1F489;  RH" required>

                                @if ($errors->has('rh'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rh') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('eps') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <input id="eps" type="text" class="form-control" name="eps" value="{{ old('eps') }}" placeholder="&#x1F489;  Seguridad o EPS" required>

                                @if ($errors->has('eps'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('eps') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tel') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <input id="tel" type="text" class="form-control" name="tel" value="{{ old('tel') }}" placeholder="&#x1F4DE;  Número celular del acudiente/profesor." required>

                                @if ($errors->has('tel'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tel') }}</strong>
                                    </span>
                                @endif
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
@else
    <meta http-equiv="refresh" content="0.001; url=/">
@endif
@else
    <meta http-equiv="refresh" content="0.001; url=/home">
@endif
@endsection