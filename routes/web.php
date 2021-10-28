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


Route::get('/tareas', 'VueCDController@lista');
Route::put('/tareas/actualizar', 'VueCDController@update');
Route::post('/tareas/guardar', 'VueCDController@store');
Route::delete('/tareas/borrar/{idcita_detalle}', 'VueCDController@destroy');
Route::get('/tareas/buscar', 'VueCDController@show');
Route::resource('vuecita_detalle', 'VueCDController');
Route::resource('citaDetalles', 'Cita_detalleController');



Route::get('/tareas', 'VueDController@lista');
Route::put('/tareas/actualizar', 'VueDController@update');
Route::post('/tareas/guardar', 'VueDController@store');
Route::delete('/tareas/borrar/{iddoctor}', 'VueDController@destroy');
Route::get('/tareas/buscar', 'VueDController@show');
Route::resource('doctors', 'DoctorController');
