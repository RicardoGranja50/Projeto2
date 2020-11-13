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

Route::get('/clientes', 'App\Http\Controllers\ClientesController@index')->name('clientes.index');

Route::get('/clientes/{id}/show', 'App\Http\Controllers\ClientesController@show')->name('clientes.show');

Route::get('/produtos', 'App\Http\Controllers\ProdutosController@index')->name('produtos.index');

Route::get('/produtos/{id}/show', 'App\Http\Controllers\ProdutosController@show')->name('produtos.show');

Route::get('/vendedores', 'App\Http\Controllers\VendedoresController@index')->name('vendedores.index');

Route::get('/vendedores/{id}/show', 'App\Http\Controllers\VendedoresController@show')->name('vendedores.show');

Route::get('/encomendas', 'App\Http\Controllers\EncomendasController@index')->name('encomendas.index');

Route::get('/encomendas/{id}/show', 'App\Http\Controllers\EncomendasController@show')->name('encomendas.show');