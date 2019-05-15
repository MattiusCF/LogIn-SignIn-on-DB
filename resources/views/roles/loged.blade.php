<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="csrf-token" content="{{ csrf_token() }}">
	    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
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
						<div class="col-sm-12 col-lg-12 col-md-12 margen" style="height: 100%">
							<h3 style="font-size: 2vw; text-align: center">Eventos activos:</h3>
						</div>
					</div>
					<div class="row margen" style="height: 90%">
						@if((LogIn\Torneo::count())!=0)
							@for($i=0; $i < LogIn\Torneo::count(); $i++)
								<div style="height: 20%" class="col-sm-12 col-xs-12 col-lg-12 col-md-12 margen">
									<a style="font-size: 3vw" class="btn">{{((LogIn\Torneo::get())[$i])->name}}</a>	
								</div>
								
							@endfor
						@else
							<div style="height: 20%">
								<label style="font-size: 6vw">No hay eventos aún.</label>
							</div>
						@endif
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
								<div class="col-sm-12 col-xs-12 col-lg-12 col-md-12" style="height: 100%">
									<!-- Aquí se debe poner el código que muestre los clubes registrados en la web -->
									@if(!Auth::guest() && !((LogIn\coord::findOrFail(Auth::user()->id))->club==null))
									@if(!Auth::guest() && Auth::user()->rol==0)
									<div class="row" style="height: 100%">
										<strong>
										<div class="col-sm-12 col-xs-12 col-lg-12 col-md-12" style="height: 90%; font-size: 2vw">
											@if(LogIn\coord::find(Auth::user()->id)->club != null)
												<div>Club {{(LogIn\club::findOrFail((LogIn\coord::findOrFail(Auth::user()->id))->club->id))->name}}</div>
											
												<div style="display: none">{{$array = ((LogIn\club::findOrFail((LogIn\coord::findOrFail(Auth::user()->id))->club->id))->jugadores)}}
												</div>
												<br>
												@for($i=0; $i < sizeof($array); $i++)
													<div>
														<h4>- {{($array)[$i]->name}}</h4>
													</div>
													<br>
												@endfor
											@endif
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
										<div class="row" style="height: 100%; font-size: 2vw">
											Clubes
										</div>
										</strong>
									@endif
									@endif
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-lg-12 col-md-12 margen" style="height: 60%">
					@if (Auth::guest()==false)
						@if ( (Auth::user()->rol==1) or (((LogIn\coord::findOrFail(Auth::user()->id))->club==null)&&(Auth::user()->rol==0)))
							<div class="col-sm-2 col-lg-2 col-md-2" style="height: 100%">
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
									      				@if (Auth::user()->rol==1)
									      					<label>Coordinador de club</label>
									      					<div class="dropdown">
																<select name="idCoo" class="btn btn-primary dropdown-toggle" required>
																	{{$lista[0]=0}}
															  		@for($i=0; $i < LogIn\User::count(); $i++)
															  			@if(((LogIn\User::get())[$i])->rol == 0 )
															  				@if((LogIn\coord::find(((LogIn\User::get())[$i])->id))->club == null)
															  					{{$lista[]=((LogIn\User::get())[$i])}}
															  				@endif
															  			@endif
															  		@endfor
															  		@if(count($lista)>1)
																  		@for($i=1; $i < count($lista); $i++)
																  			<option value="{{$lista[$i]->id}}">{{$lista[$i]->name}}</option>
																  		@endfor
															  		@endif
																</select>
															</div>
															@if(count($lista)==1)
															  	<label style="color: red">Error, no hay coordinadores disponibles para crear un club</label>
															@endif
									      				@else
									      					<input type="text" name="idCoo" style="display: none" value="{{Auth::user()->id}}">
									      				@endif
									      			</form>
									      		</div>
									      		<div class="modal-footer">
									      			<div class="row">						      				
									      				<div class="col-sm-6 col-lg-6 col-md-6">
									      					<button type="submit" class="btn">Registrar</button>
									      				</div>
									      				<div class="col-sm-6 col-lg-6 col-md-6">
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
							<div class="col-sm-2 col-lg-2 col-md-2" style="height: 100%">
								<a class="btn btn-primary" href="{{ url('/coordinador') }}">Coordinador</a>
							</div>
							<div class="col-sm-2 col-lg-2 col-md-2" style="height: 100%">
                        		<a class="btn btn-primary" href="{{ url('/jugador') }}">Jugador</a>
							</div>
							<div class="col-sm-2 col-lg-2 col-md-2" style="height: 100%">
                        		<a class="btn btn-primary" href="{{ url('/planillero') }}">Planillero</a>
							</div>
							<div class="col-sm-2 col-lg-2 col-md-2" style="height: 100%">
								<!-- Botòn para crear un club -->
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#TorneoModal">
								  Torneo
								</button>

								<!-- Modal -->
								<form class="form-horizontal" method="POST" action="/authTorn">
									{{ csrf_field() }}
									<div class="modal fade" id="TorneoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									  	<div class="modal-dialog" role="document">
									    	<div class="modal-content">
										      	<div class="modal-header">
											        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											          <span aria-hidden="true">&times;</span>
											        </button>
											        <h5 class="modal-title" id="exampleModalLabel">Crear Torneo</h5>
										      	</div>
									      		<div class="modal-body">
									      			<form>
									      				<label>Nombre del Torneo</label>
									      				<input type="text" name="name" style="width: 100%" required autofocus>
									      			</form>
									      		</div>
									      		<div class="modal-footer">
									      			<div class="row">						      				
									      				<div class="col-sm-6 col-lg-6 col-md-6">
									      					<button type="submit" class="btn">Crear</button>
									      				</div>
									      				<div class="col-sm-6 col-lg-6 col-md-6">
									      					<button type="button" class="btn" data-dismiss="modal">Cancelar</button>
									      				</div>
									      			</div>
									      		</div>
									    	</div>
									  	</div>
									</div>
								</form>
							</div>
							<div class="col-sm-2 col-lg-2 col-md-2" style="height: 100%">
								<a class="btn" href="#">Historial</a>
							</div>
						@endif
					@endif
				</div>
				<div class="col-sm-12 col-lg-12 col-md-12 margen" style="height: 40%">
					<!-- Aquí se debe poner nombres de los desarrolladores, o vínculos a redes sociales -->
					Redes
				</div>
			</div>
		</div>
	</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>