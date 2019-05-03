<?php

namespace LogIn\Http\Controllers;

use LogIn\club;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function guardar(Request $request){
    	$club = new club;
    	$club->name = $request->input('name');
    	$club->coord_id = $request->input('idCoo');
    	$club->save();

    	return view('/roles/loged');;

    }
}
