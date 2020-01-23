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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/ingresos', 'IngresoController@index');
Route::get('/ingresos/alta','IngresoController@create');
Route::post('/ingresos','IngresoController@store');

Route::get('/perfiles', 'PerfilController@index');
Route::get('/perfiles/alta','PerfilController@create');
Route::post('/perfiles','PerfilController@store');

Route::get('/dolares', 'DolarController@index');
Route::get('/dolares/alta','DolarController@create');
Route::post('/dolares','DolarController@store');

Route::get('/categoriaGastos', 'CategoriaGastoController@index');
Route::get('/categoriaGastos/alta','CategoriaGastoController@create');
Route::post('/categoriaGastos','CategoriaGastoController@store');

Route::get('/categoriaIngresos', 'CategoriaIngresoController@index');
Route::get('/categoriaIngresos/alta','CategoriaIngresoController@create');
Route::post('/categoriaIngresos','CategoriaIngresoController@store');