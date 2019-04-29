<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Planilla</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/table.css') }}" rel="stylesheet">
</head>
<body>
	<!-- Contenedores para toda la página -->
	<div class="contenedor" >
		<div class="row center-block" style="height: 97%">
			<!-- algun comentario -->
			<div class="col-sm-3 col-xs-3 col-lg-3 col-md-3 neon">
				<div class="col-sm-12 logotipo neon">Nombre del equipo y logo</div>
				<div class="col-sm-12 neon" style="text-align: center; height: 10%"><h1><b>Jugadores</b></h1></div>
				<div class="col-sm-12 jugadores neon"><h3>Jugador 1</h3></div>
				<div class="col-sm-12 jugadores neon"><h3>Jugador 2</h3></div>
				<div class="col-sm-12 jugadores neon"><h3>Jugador 3</h3></div>
				<div class="col-sm-12 jugadores neon"><h3>Jugador 4</h3></div>
				<div class="col-sm-12 jugadores neon"><h3>Jugador 5</h3></div>
				<div class="col-sm-12 jugadores neon">
					<button type="button" class="btn btn-info grande">Falta</button>
				</div>
			</div>
			<!-- Contenedor central -->
			<div class="col-sm-6 col-xs-6 col-lg-6 col-md-6 neon" style="z-index: 1">
				<!-- Contenedor del marcador y tiempo restante para el final -->
				<div class="row" style="height: 20%">
					<div class="col-md-3 col-sm-3 col-lg-3 col-xs-3 marc" style="z-index: 1">
						<h1 class="marcador">0</h1>
					</div>
					<div class="col-md-6 col-sm-6 col-lg-6 col-xs-6 marc">
						<h1 class="marcador">40:00</h1>
					</div>
					<div class="col-md-3 col-sm-3 col-lg-3 col-xs-3 marc">
						<h1 class="marcador">0</h1>
					</div>
				</div>
				<!-- Contenedor del número de faltas de ambos equipos, nombre de cada uno y cuarto de juego en el que se encuentran -->
				<div class="row" style="height: 10%; background-color: #111111;">
					<div class="col-md-3 col-sm-3 col-lg-3 col-xs-3 marc" >
						<h1 class="marcador" style="font-size: 2vw">Equipo 1</h1>
					</div>
					<div class="col-md-2 col-sm-2 col-lg-2 col-xs-2 marc">
						<h1 class="marcador" style="font-size: 2vw">faltas</h1>
					</div>
					<div class="col-md-2 col-sm-2 col-lg-2 col-xs-2 marc">
						<h1 class="marcador" style="font-size: 3vw">4</h1>
					</div>
					<div class="col-md-2 col-sm-2 col-lg-2 col-xs-2 marc">
						<h1 class="marcador" style="font-size: 2vw">faltas</h1>
					</div>
					<div class="col-md-3 col-sm-3 col-lg-3 col-xs-3 marc">
						<h1 class="marcador" style="font-size: 2vw">Equipo 2</h1>
					</div>
				</div>
				<div class="row" style="height: 70%">
					<div class="row" style="height: 90%"></div>
					<div class="row" style="height: 10%">
						<div class="col-md-3 col-sm-3 col-lg-3 col-xs-3"></div>
						<div class="col-md-2 col-sm-2 col-lg-2 col-xs-2" style="height: 100%">
							<button type="button" class="btn btn-info grande">Play</button>
						</div>
						<div class="col-md-2 col-sm-2 col-lg-2 col-xs-2"></div>
						<div class="col-md-2 col-sm-2 col-lg-2 col-xs-2" style="height: 100%">
							<button type="button" class="btn btn-info grande">Stop</button>
						</div>
						<div class="col-md-3 col-sm-3 col-lg-3 col-xs-3"></div>
					</div>
				</div>
			</div>
			<!-- Columna derecha correspondiente al equipo 2 y a sus estadisticas -->
			<div class="col-sm-3 col-xs-3 col-lg-3 col-md-3 neon">
				<div class="col-sm-12 logotipo neon">Nombre del equipo y logo</div>
				<div class="col-sm-12 neon" style="text-align: center; height: 10%"><h1><b>Jugadores</b></h1></div>
				<div class="col-sm-12 jugadores neon"><h3>Jugador 1</h3></div>
				<div class="col-sm-12 jugadores neon"><h3>Jugador 2</h3></div>
				<div class="col-sm-12 jugadores neon"><h3>Jugador 3</h3></div>
				<div class="col-sm-12 jugadores neon"><h3>Jugador 4</h3></div>
				<div class="col-sm-12 jugadores neon"><h3>Jugador 5</h3></div>
				<div class="col-sm-12 jugadores neon">
					<button type="button" class="btn btn-info grande">Falta</button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<!-- Holi -->
<!--Hola, porfiiin-->

