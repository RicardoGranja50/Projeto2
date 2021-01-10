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


Route::get('/clientes', 'App\Http\Controllers\ClientesController@index')->name('clientes.index');

Route::get('/clientes/{id}/show', 'App\Http\Controllers\ClientesController@show')->name('clientes.show');

Route::get('/produtos', 'App\Http\Controllers\ProdutosController@index')->name('produtos.index');

Route::get('/produtos/{id}/show', 'App\Http\Controllers\ProdutosController@show')->name('produtos.show');

Route::get('/vendedores', 'App\Http\Controllers\VendedoresController@index')->name('vendedores.index');

Route::get('/vendedores/{id}/show', 'App\Http\Controllers\VendedoresController@show')->name('vendedores.show');

Route::get('/encomendas', 'App\Http\Controllers\EncomendasController@index')->name('encomendas.index');

Route::get('/encomendas/{id}/show', 'App\Http\Controllers\EncomendasController@show')->name('encomendas.show');

Route::get('/formulario', 'App\Http\Controllers\FormularioController@formulario')->name('formulario');

Route::post('/mostrar', 'App\Http\Controllers\MostrarController@mostrar')->name('mostrar');



Route::get('clientes/create','App\Http\Controllers\ClientesController@create')->name('clientes.create');

Route::post('clientes/store','App\Http\Controllers\ClientesController@store')->name('clientes.store');

Route::get('clientes/edit','App\Http\Controllers\ClientesController@edit')->name('clientes.edit');

Route::patch('clientes/update','App\Http\Controllers\ClientesController@update')->name('clientes.update');

Route::get('clientes/destroy/{id}','App\Http\Controllers\ClientesController@destroy')->name('clientes.destroy');



Route::get('encomendas/create','App\Http\Controllers\EncomendasController@create')->name('encomendas.create');

Route::post('encomendas/store','App\Http\Controllers\EncomendasController@store')->name('encomendas.store');




Route::get('/','App\Http\Controllers\ClientesController@principal')->name('clientes.principal');