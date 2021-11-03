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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('citas', 'CitaController');

Route::get('/tareas', 'VueCController@lista');
Route::put('/tareas/actualizar', 'VueCController@update');
Route::post('/tareas/guardar', 'VueCController@store');
Route::delete('/tareas/borrar/{idcliente}', 'VueCController@destroy');
Route::get('/tareas/buscar', 'VueCController@show');
Route::resource('vuecita', 'VueCController');


Route::get('/citadet', 'VueCDController@lista');
Route::put('/citadet/actualizar', 'VueCDController@update');
Route::post('/citadet/guardar', 'VueCDController@store');
Route::delete('/citadet/borrar/{idcita_detalle}', 'VueCDController@destroy');
Route::get('/citadet/buscar', 'VueCDController@show');
Route::resource('vuecita_detalle', 'VueCDController');
Route::resource('citaDetalles', 'Cita_detalleController');



Route::get('/tareasd', 'VueDController@lista');
Route::put('/tareasd/actualizar', 'VueDController@update');
Route::post('/tareasd/guardar', 'VueDController@store');
Route::delete('/tareasd/borrar/{iddoctor}', 'VueDController@destroy');
Route::get('/tareasd/buscar', 'VueDController@show');
Route::resource('vuedoctor', 'VueDController');
Route::resource('doctors', 'DoctorController');



Route::get('/tareasp', 'VuePController@lista');
Route::put('/tareasp/actualizar', 'VuePController@update');
Route::post('/tareasp/guardar', 'VuePController@store');
Route::delete('/tareasp/borrar/{idpaciente}', 'VuePController@destroy');
Route::get('/tareasp/buscar', 'VuePController@show');
Route::resource('vuepaciente', 'VuePController');
Route::resource('pacientes', 'PacienteController');


Route::get('/usario', 'VueUController@lista');
Route::put('/usario/actualizar', 'VueUController@update');
Route::post('/usario/guardar', 'VueUController@store');
Route::delete('/usario/borrar/{idusuario}', 'VueUController@destroy');
Route::get('/usario/buscar', 'VueUController@show');
Route::resource('vueusuario', 'VueUController');
Route::resource('usuarios', 'UsuarioController');
