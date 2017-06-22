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

Route::group(['prefix'=>'convenios', 'where'=>['id'=>'[0-9]+']], function (){
    Route::get('', ['as'=>'convenios', 'uses'=>'ConveniosController@index']);
    Route::get('create', ['as'=>'convenios.create', 'uses'=>'ConveniosController@create']);
    Route::post('store', ['as'=>'convenios.store', 'uses'=>'ConveniosController@store']);
    Route::get('{id}/destroy', ['as'=>'convenios.destroy', 'uses'=>'ConveniosController@destroy']);
    Route::get('{id}/edit', ['as'=>'convenios.edit', 'uses'=>'ConveniosController@edit']);
    Route::put('{id}/update', ['as'=>'convenios.update', 'uses'=>'ConveniosController@update']);
});

Route::group(['prefix'=>'procedimentos', 'where'=>['id'=>'[0-9]+']], function (){
    Route::get('', ['as'=>'procedimentos', 'uses'=>'ProcedimentosController@index']);
    Route::get('create', ['as'=>'procedimentos.create', 'uses'=>'ProcedimentosController@create']);
    Route::post('store', ['as'=>'procedimentos.store', 'uses'=>'ProcedimentosController@store']);
    Route::get('{id}/destroy', ['as'=>'procedimentos.destroy', 'uses'=>'ProcedimentosController@destroy']);
    Route::get('{id}/edit', ['as'=>'procedimentos.edit', 'uses'=>'ProcedimentosController@edit']);
    Route::put('{id}/update', ['as'=>'procedimentos.update', 'uses'=>'ProcedimentosController@update']);
});

Route::group(['prefix'=>'pacientes', 'where'=>['id'=>'[0-9]+']], function (){
    Route::get('', ['as'=>'pacientes', 'uses'=>'PacientesController@index']);
    Route::get('create', ['as'=>'pacientes.create', 'uses'=>'PacientesController@create']);
    Route::post('store', ['as'=>'pacientes.store', 'uses'=>'PacientesController@store']);
    Route::get('{id}/destroy', ['as'=>'pacientes.destroy', 'uses'=>'PacientesController@destroy']);
    Route::get('{id}/edit', ['as'=>'pacientes.edit', 'uses'=>'PacientesController@edit']);
    Route::put('{id}/update', ['as'=>'pacientes.update', 'uses'=>'PacientesController@update']);
});

Route::group(['prefix'=>'users', 'where'=>['id'=>'[0-9]+']], function (){
    Route::get('', ['as'=>'users', 'uses'=>'UsersController@index']);
    Route::get('create', ['as'=>'users.create', 'uses'=>'UsersController@create']);
    Route::post('store', ['as'=>'users.store', 'uses'=>'UsersController@store']);
    Route::get('{id}/destroy', ['as'=>'users.destroy', 'uses'=>'UsersController@destroy']);
    Route::get('{id}/edit', ['as'=>'users.edit', 'uses'=>'UsersController@edit']);
    Route::put('{id}/update', ['as'=>'users.update', 'uses'=>'UsersController@update']);
});

Route::group(['prefix'=>'agendamentos', 'where'=>['id'=>'[0-9]+']], function (){
    Route::get('', ['as'=>'agendamentos', 'uses'=>'AgendamentosController@index']);
    Route::get('create', ['as'=>'agendamentos.create', 'uses'=>'AgendamentosController@create']);
    Route::post('store', ['as'=>'agendamentos.store', 'uses'=>'AgendamentosController@store']);
    Route::get('{id}/destroy', ['as'=>'agendamentos.destroy', 'uses'=>'AgendamentosController@destroy']);
    Route::get('{id}/edit', ['as'=>'agendamentos.edit', 'uses'=>'AgendamentosController@edit']);
    Route::put('{id}/update', ['as'=>'agendamentos.update', 'uses'=>'AgendamentosController@update']);
});
