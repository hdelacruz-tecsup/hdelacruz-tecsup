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

Route::get('/causas','CausasController@index')->name('causas');
Route::get('/sintomas','SintomasController@index')->name('sintomas');
Route::get('/prevencion','PrevencionController@index')->name('revencion');
Route::get('/tipos','TiposController@index')->name('tipos');
Route::get('/diagnostico','DiagnosticoController@index')->name('diagnostico');
Route::get('/tratamiento','TratamientoController@index')->name('tratamiento');