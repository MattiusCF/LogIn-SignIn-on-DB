<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dragones</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=MedievalSharp" rel="stylesheet">
        <link href="{{asset('css/style.css')}}" rel="stylesheet">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md" style="font-family: 'MedievalSharp', cursive;">
                    ¡Dragones!
                </div>
                @if (Route::has('login'))
                <div class="links ">
                    @if (Auth::check())
                        <a class="btn" href="{{ url('/home') }}">Inicio</a>
                    @else
                        <a class="btn" href="{{ url('/login') }}">Entrar</a>
                        <a class="btn" href="{{ url('/register') }}">Registrarte</a>
                        <a class="btn" href="{{ url('/planilla') }}">tabla</a>
                        <a class="btn" href="{{ url('/admin') }}">Administrador</a>
                        <a class="btn" href="{{ url('/planillero') }}">Planillero</a>
                        <a class="btn" href="{{ url('/coordinador') }}">Coordinador Club</a>
                        <a class="btn" href="{{ url('/jugador') }}">Jugador</a>
                    @endif
                </div>
                @endif
            </div>
        </div>
    </body>
</html>
