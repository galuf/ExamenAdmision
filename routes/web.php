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

// Route::get('/', function () {
//     //return view('examen.prueba');
//     return view('index');
// });

Route::get('/', 'ExamenController@index')->name('examen.index');

Route::group(['middleware' => ['auth']],function(){
  //Admin
  Route::get('/examen/create', 'ExamenController@create')->name('examen.create')->middleware('admin');
  Route::post('/examen', 'ExamenController@store')->name('examen.store');
  Route::get('/examen/{examen}','ExamenController@show')->name('examen.show');
  Route::get('/seleccion','ExamenController@seleccion')->name('examen.seleccion');

  Route::get('/resultado','ExamenController@resultado')->name('examen.resultado');

  Route::post('/calificar','ExamenController@calificar')->name('examen.calificar');
  Route::get('/respuestas/create/{id}','RespuestaController@create')->name('respuestas.create');
  Route::post('/respuestas','RespuestaController@store')->name('respuestas.store');
});
//Route::get('/examen/resultado','ExamenController@resultado')->name('examen.resultado');
// Route::get('/resultado',function(){
//   return view('examen.resultado');
// });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/asignaturas','AsignaturaController@index')->name('asignaturas.index');
Route::get('/preguntas/{id}','ExamenController@index')->name('examen.index');

Route::view('fail','fail');