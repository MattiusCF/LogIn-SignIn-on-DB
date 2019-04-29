<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="csrf-token" content="{{ csrf_token() }}">
		<!-- styles -->
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
		<link href="{{ asset('css/loged.css') }}" rel="stylesheet">

		<title>Dragones</title>
	</head>
<body>
	<div class="contenedor">
		<div class="row center-block" style="height: 100%">
			<div class="row" style="height: 90%">
				<div class="col-sm-9 col-xs-9 col-lg-9 col-md-9" style="height: 100%">
					<div class="row margen" style="height: 10%">
						<div class="col-sm-12 col-xs-12 col-lg-12 col-md-12">
							<h3 style="font-size: 2vw">Eventos activos:</h3>
						</div>
					</div>
					<div class="row margen" style="height: 90%">
						<div class="col-sm-12 col-xs-12 col-lg-12 col-md-12" style="height: 100%">Torneos...<!-- Aquí se debe agregar el código para mostrar los torneos --></div>
					</div>
				</div>
				<div class="col-sm-3 col-xs-3 col-lg-3 col-md-3" style="height: 100%">
					<div class="row margen" style="height: 10%">
						<div class="col-sm-12 col-xs-12 col-lg-12 col-md-12">
							@if (Auth::guest()==false)
							<div class="collapse navbar-collapse" id="app-navbar-collapse">
			                    <!-- Left Side Of Navbar -->
			                    <ul class="nav navbar-nav">
			                        &nbsp;
			                    </ul>

			                    <!-- Right Side Of Navbar -->
			                    <ul style="border-radius: .5em; background-color: #b7b7b7" class="nav navbar-nav navbar-right">
			                        <li style="border: 1px solid grey; background-color: white; border-radius: .5em" class="dropdown">
		                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
		                                    {{ Auth::user()->name }} <span class="caret"></span>
		                                </a>

		                                <ul class="dropdown-menu" role="menu">
		                                    <li>
		                                        <a href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
		                                            Logout
		                                        </a>

		                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		                                            {{ csrf_field() }}
		                                        </form>
		                                    </li>
		                                </ul>
		                            </li>
			                    </ul>
			                </div>
			                @endif
						</div>
					</div>
					<div class= "row margen" style="height: 90%">
						<div class="row" style="height: 100%">
							<div class="col-sm-12 col-xs-12 col-lg-12 col-md-12" style="height: 100%">
								<input type="textarea" placeholder="Buscar club..." name="buscador" style="height: 10%; width: 100%">
								<div class="col-sm-12 col-xs-12 col-lg-12 col-md-12" style="height: 90%">
									Clubes
									<!-- Aquí se debe poner el código que muestre los clubes registrados en la web -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row" style="height: 10%; background-color: black">
				<div class="col-sm-12 col-xs-12 col-lg-12 col-md-12 margen" style="height: 60%">
					@if (Auth::guest()==false)
						@if (Auth::user()->admin==1)
							<button>1</button>
							<button>2</button>
							<button>3</button>
						@else
							<button>4</button>
							<button>5</button>
							<button>6</button>
						@endif
					@endif
				</div>
				<div class="col-sm-12 col-xs-12 col-lg-12 col-md-12 margen" style="height: 40%">
					<!-- Aquí se debe poner nombres de los desarrolladores, o vínculos a redes sociales -->
					Redes
				</div>
			</div>
		</div>
	</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>