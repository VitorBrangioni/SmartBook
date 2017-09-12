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

Route::get('/', 'TitulosController@index');
Route::get('gestao-titulos', 'TitulosController@titles');
Route::post('gestao-titulos/store', 'TitulosController@store');
Route::post('gestao-titulos/update', 'TitulosController@update');