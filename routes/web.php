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
    return view('examen.prueba');
});

Route::get('/examen/create', 'ExamenController@create')->name('examen.create');
Route::post('/examen', 'ExamenController@store')->name('examen.store');
Route::post('/examen/resultado','ExamenController@resultado')->name('examen.resultado');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/respuestas/create/{id}','RespuestaController@create')->name('respuestas.create');
Route::post('/respuestas','RespuestaController@store')->name('respuestas.store');


Route::get('/asignaturas','AsignaturaController@index')->name('asignaturas.index');
Route::get('/preguntas/{id}','ExamenController@index')->name('examen.index');
