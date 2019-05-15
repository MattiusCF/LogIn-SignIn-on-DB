<?php

namespace LogIn\Http\Controllers;

use LogIn\Torneo;
use Illuminate\Http\Request;

class TorneoController extends Controller
{
    public function guardar(Request $request){
    	$Torneo = new Torneo;
    	$Torneo->name = $request->input('name');
    	
    	$Torneo->save();

    	return view('/roles/loged');;

    }
}
