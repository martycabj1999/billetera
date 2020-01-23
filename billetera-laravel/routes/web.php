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
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/categorias_gastos', 'CategoriaGastoController@index');
Route::get('/categorias_gastos/alta','CategoriaGastoController@create');
Route::post('/categorias_gastos','CategoriaGastoController@store');

Route::get('/categorias_ingresos', 'CategoriaIngresoController@index');
Route::get('/categorias_ingresos/alta','CategoriaIngresoController@create');
Route::post('/categorias_ingresos','CategoriaIngresoController@store');