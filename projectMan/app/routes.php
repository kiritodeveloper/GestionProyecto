<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

/*Cargos*/
Route::resource('cargos', 'CargoController');
Route::post('cargos/{id}/update', 'CargoController@update');
Route::get('cargos/{id}/delete', 'CargoController@destroy');
Route::get('cargos/{id}/show', 'CargoController@show');

/*Departamentos*/
Route::resource('departamentos', 'DepartamentoController');
Route::post('departamentos/{id}/update', 'DepartamentoController@update');
Route::get('departamentos/{id}/delete', 'DepartamentoController@destroy');
Route::get('departamentos/{id}/show', 'DepartamentoController@show');

/*Ramas Ejecutivas*/
Route::resource('ramas', 'RamaEjecutivaController');
Route::post('ramas/{id}/update', 'RamaEjecutivaController@update');
Route::get('ramas/{id}/delete', 'RamaEjecutivaController@destroy');
Route::get('ramas/{id}/show', 'RamaEjecutivaController@show');

/*Clientes*/
Route::resource('clientes', 'ClienteController');
Route::post('clientes/{id}/update', 'ClienteController@update');
Route::get('clientes/{id}/delete', 'ClienteController@destroy');
Route::get('clientes/{id}/show', 'ClienteController@show');

/*Gerentes*/
Route::resource('gerentes', 'GerenteController');
Route::post('gerentes/{id}/update', 'GerenteController@update');
Route::get('gerentes/{id}/delete', 'GerenteController@destroy');
Route::get('gerentes/{id}/show', 'GerenteController@show');
