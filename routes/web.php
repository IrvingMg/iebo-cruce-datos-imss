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

Route::get('/', 'ImportarDatosController@index');
Route::post('/importar', 'ImportarDatosController@importarArchivos');

Route::get('/cruzar', 'CruzarDatosController@index');
Route::get('/cruzar/{tipo}', 'CruzarDatosController@cruzar');