<?php

namespace LogIn\Http\Controllers;

use LogIn\admin;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function guardarAdm(Request $request){
    	$admin = new admin;
    	$admin->name = $request->input('name');
    	$admin->doc = $request->input('doc');
    	$admin->email = $request->input('email');
    	$admin->password = bcrypt($request->input('password'));
    	$admin->rol = 1;
    	$admin->save();

    	return view('/roles/loged');;

    }
    
    public function guardarCoo(Request $request){
    	$admin = new admin;
    	$admin->name = $request->input('name');
    	$admin->doc = $request->input('doc');
    	$admin->email = $request->input('email');
    	$admin->password = bcrypt($request->input('password'));
    	$admin->rol = 0;
    	$admin->save();

    	return view('/roles/loged');;

    }

    public function guardarPla(Request $request){
    	$admin = new admin;
    	$admin->name = $request->input('name');
    	$admin->doc = $request->input('doc');
    	$admin->email = $request->input('email');
    	$admin->password = bcrypt($request->input('password'));
    	$admin->rol = 2;
    	$admin->save();

    	return view('/roles/loged');;

    }
    
}
