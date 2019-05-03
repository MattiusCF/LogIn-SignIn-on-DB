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
						<div class="col-sm-12 col-xs-12 col-lg-12 col-md-12" style="height: 100%">
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
			                @else
			                <div style="height: 100%">
			                	<button class="btn" onclick="window.location.href = '{{ url('/login') }}';">Login</button>
			                </div>
			                @endif
						</div>
					</div>
					<div class= "row margen" style="height: 90%">
						<div class="row" style="height: 100%">
							<div class="col-sm-12 col-xs-12 col-lg-12 col-md-12" style="height: 100%">
								<div class="col-sm-12 col-xs-12 col-lg-12 col-md-12" style="height: 10%; background-color: white"></div>
								<div class="col-sm-12 col-xs-12 col-lg-12 col-md-12" style="height: 90%">
									<!-- Aquí se debe poner el código que muestre los clubes registrados en la web -->
									@if(!Auth::guest() && Auth::user()->rol==0)
									<div class="row" style="height: 100%">
										<strong>
										<div class="col-sm-12 col-xs-12 col-lg-12 col-md-12" style="height: 90%; font-size: 20px">
											
											<div style="display: none">{{$array = ((LogIn\club::findOrFail((LogIn\coord::findOrFail(Auth::user()->id))->club->id))->jugadores)}}
											</div>
											<br>
											@for($i=0; $i < sizeof($array); $i++)
												-
												{{($array)[$i]->name}}
												<br>
											@endfor
										</div>
										@if((Auth::user()->rol==0) and ((LogIn\coord::findOrFail(Auth::user()->id))->club!=null))
											<div class="col-sm-12 col-xs-12 col-lg-12 col-md-12" style="height: 10%">
												<a href="/jugador" class="btn">+ Añadir jugador</a>
											</div>
										@endif
										</strong>
									</div>
									@else
										<strong>
										<div class="row" style="height: 100%; font-size: 20px">
											Clubes
										</div>
										</strong>
									@endif
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row" style="height: 10%; background-color: black">
				<div class="col-sm-12 col-xs-12 col-lg-12 col-md-12 margen" style="height: 60%">
					@if (Auth::guest()==false)
						@if ( (Auth::user()->rol==1) or (((LogIn\coord::findOrFail(Auth::user()->id))->club==null)&&(Auth::user()->rol==0)))
							<div class="col-sm-2 col-xs-2 col-lg-2 col-md-2" style="height: 100%">
								<!-- Botòn para crear un club -->
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
								  Club
								</button>

								<!-- Modal -->
								<form class="form-horizontal" method="POST" action="/authClub">
									{{ csrf_field() }}
									<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									  	<div class="modal-dialog" role="document">
									    	<div class="modal-content">
										      	<div class="modal-header">
											        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											          <span aria-hidden="true">&times;</span>
											        </button>
											        <h5 class="modal-title" id="exampleModalLabel">Crear club</h5>
										      	</div>
									      		<div class="modal-body">
									      			<form>
									      				<label>Nombre del club</label>
									      				<input type="text" name="name" style="width: 100%" required autofocus>
									      				<input type="text" value="{{Auth::user()->id}}" name="idCoo" style="display: none;">
									      				@if (Auth::user()->rol==1)
									      					<label>Coordinador de club</label>
									      					<input type="text" name="cooName" style="width: 100%">
									      				@endif
									      			</form>
									      		</div>
									      		<div class="modal-footer">
									      			<div class="row">						      				
									      				<div class="col-sm-6 col-xs-6 col-lg-6 col-md-6">
									      					<button type="submit" class="btn">Registrar</button>
									      				</div>
									      				<div class="col-sm-6 col-xs-6 col-lg-6 col-md-6">
									      					<button type="button" class="btn" data-dismiss="modal">Cancelar</button>
									      				</div>
									      			</div>
									      		</div>
									    	</div>
									  	</div>
									</div>
								</form>
								<!--<button style="height: 100%; width: 100%">Club</button>-->
							</div>
						@endif
						@if (Auth::user()->rol==1)
							<div class="col-sm-2 col-xs-2 col-lg-2 col-md-2" style="height: 100%">
								<a class="btn" href="{{ url('/coordinador') }}">Coordinador</a>
							</div>
							<div class="col-sm-2 col-xs-2 col-lg-2 col-md-2" style="height: 100%">
                        		<a class="btn" href="{{ url('/jugador') }}">Jugador</a>
							</div>
							<div class="col-sm-2 col-xs-2 col-lg-2 col-md-2" style="height: 100%">
                        		<a class="btn" href="{{ url('/planillero') }}">Planillero</a>
							</div>
							<div class="col-sm-2 col-xs-2 col-lg-2 col-md-2" style="height: 100%">
								<button style="height: 100%; width: 100%">Torneo</button>
							</div>
							<div class="col-sm-2 col-xs-2 col-lg-2 col-md-2" style="height: 100%">
								<button style="height: 100%; width: 100%">Historial</button>
							</div>
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