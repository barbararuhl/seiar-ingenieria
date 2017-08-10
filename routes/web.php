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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function() {
	return view('home');
});

Route::get('/empresa', function() {
	return view('empresa');
});

Route::get('/servicios', function() {
	return view('servicios');
});

Route::get('/obras', function() {
	return view('obras');
});

Route::get('/contacto', function() {
	return view('contacto');
});


Route::post('/contacto', 'ContactoController@validar');

Route::post('/contactoEnviado', function() {
	return view('contactoEnviado');
});