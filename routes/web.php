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

Route::get('convenios', 'ConveniosController@index');
Route::get('convenios/create', 'ConveniosController@create');
Route::post('convenios/store', 'ConveniosController@store');
Route::get('convenios/{id}/destroy', 'ConveniosController@destroy');
Route::get('convenios/{id}/edit', 'ConveniosController@edit');
Route::put('convenios/{id}/update', 'ConveniosController@update');

Route::get('procedimentos', 'ProcedimentosController@index');
Route::get('procedimentos/create', 'ProcedimentosController@create');
Route::post('procedimentos/store', 'ProcedimentosController@store');
Route::get('procedimentos/{id}/destroy', 'ProcedimentosController@destroy');
Route::get('procedimentos/{id}/edit', 'ProcedimentosController@edit');
Route::put('procedimentos/{id}/update', 'ProcedimentosController@update');

Route::get('pacientes', 'PacientesController@index');
Route::get('pacientes/create', 'PacientesController@create');
Route::post('pacientes/store', 'PacientesController@store');
Route::get('pacientes/{id}/destroy', 'PacientesController@destroy');
Route::get('pacientes/{id}/edit', 'PacientesController@edit');
Route::put('pacientes/{id}/update', 'PacientesController@update');