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

Route::get('/', ['as' => 'home','uses' => 'TiendaController@index']);

Route::get('productos','TiendaController@productos');

Route::get('empresa','TiendaController@empresa');

Route::get('contacto','TiendaController@contacto');

Route::get('producto/{slug}', [
	'as' => 'producto-detalle',
	'uses' => 'TiendaController@show'
]);
