<?php

namespace LogIn\Http\Controllers;

use LogIn\jugador;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    public function guardar(Request $request){
    	$jugador = new jugador;
    	$jugador->club_id = $request->input('club');
    	$jugador->name = $request->input('name');
    	$jugador->td = $request->input('tipodoc');
    	$jugador->documento = $request->input('doc');
    	$jugador->fecha = $request->input('fecha');
    	$jugador->rh = $request->input('rh');
    	$jugador->eps = $request->input('eps');
    	$jugador->contacto = $request->input('tel');

    	$jugador->save();

    	return view('/roles/loged');;

    }
}
