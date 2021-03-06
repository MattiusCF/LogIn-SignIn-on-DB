<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {return view('/roles/loged');});

Route::get('/welcome', function () {return view('welcome');});

Route::get('planilla', function () {return view('/layouts/app');});

Route::get('home', function(){return view('/roles/loged');});

Route::get('admin', function () {return view('/auth/admin');});

Route::get('planillero', function () {return view('/auth/planillero');});

Route::get('coordinador', function () {return view('/auth/coordinador');});

Route::get('jugador', function () {return view('/auth/jugador');});

Route::post('/authAdm', 'adminController@guardarAdm');

Route::post('/authCoo', 'adminController@guardarCoo');

Route::post('/authPla', 'adminController@guardarPla');

Route::post('/authClub','ClubController@guardar');

Route::post('/authTorn','TorneoController@guardar');

Route::post('/authJug', 'jugadorController@guardar');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
