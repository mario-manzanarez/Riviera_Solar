<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/usuario/crear', 'UsuariosController@crearUsuario' );

Auth::routes();
//rutas para los administradores
Route::get('/admin/list','UsuariosController@listar');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/panel','PanelController@panel');

//Rutas para las visitas
Route::get('/visitas','VisitaController@index')->name('visita.index');
Route::get('/visitas/create','VisitaController@create')->name('visita.create');
Route::post('/visitas','VisitaController@store')->name('visita.store');
Route::get('/visitas/{visita}','VisitaController@show')->name('visita.show');

//rutas para las medidas

Route::get('/medidas','MedidaSeguridadController@index');
Route::get('/medidas/create/','MedidaseguridadController@create')->name('medida.create');
Route::post('/medidas','MedidaseguridadController@store')->name('medida.store');
Route::get('/medidas/{medidaSeguridad}','MedidaSeguridadController@show')->name('medida.show');

//Rutas para el levantamiento técnico
Route::get('/levantamiento','LevantamientoController@index');
Route::get('/levantamiento/create','LevantamientoController@create')->name('levantamiento.create');
Route::post('/levantamiento','LevantamientoController@store')->name('levantamiento.store');
Route::get('/levantamiento/{levantamiento}','LevantamientoController@show')->name('levantamiento.show');

//rutas para el ambiente electrico
Route::get('/ambiente','AmbienteElectricoController@index');
Route::get('/ambiente/create','AmbienteElectricoController@create')->name('ambiente.create');
Route::post('/ambiente','AmbienteElectricoController@store')->name('ambiente.store');
Route::get('/ambiente/{ambienteElectrico}','AmbienteElectricoController@show')->name('ambiente.show');

//rutas para los detales
Route::get('/detalle','DetallesController@index');
Route::get('/detalle/create','DetallesController@create')->name('detalle.create');
Route::post('/detalle','DetallesController@store')->name('detalle.store');
Route::get('/detalle/{detalles}','DetallesController@show')->name('detalle.show');
