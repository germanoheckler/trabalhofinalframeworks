<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('clientes', 'App\Http\Controllers\ClienteController@index')->name('cliente.listar');

Route::get('clientes/novo', 'App\Http\Controllers\ClienteController@criar')->name('cliente.criar');

Route::get('clientes/{id}', 'App\Http\Controllers\ClienteController@mostrar');

Route::get('clientes/{id}/editar', 'App\Http\Controllers\ClienteController@editar')->name('cliente.editar');

Route::post('clientes', 'App\Http\Controllers\ClienteController@salvar')->name('novo-cliente');

Route::put('clientes/{id}', 'App\Http\Controllers\ClienteController@atualizar')->name('cliente.atualizar');

Route::delete('clientes/{id}', 'App\Http\Controllers\ClienteController@deletar')->name('cliente.deletar');


Route::get('produtos', 'App\Http\Controllers\ProdutoController@index')->name('produto.listar');

Route::get('produtos/novo', 'App\Http\Controllers\ProdutoController@criar')->name('produto.criar');

Route::get('produtos/{id}', 'App\Http\Controllers\ProdutoController@mostrar');

Route::get('produtos/{id}/editar', 'App\Http\Controllers\ProdutoController@editar')->name('produto.editar');

Route::post('produtos', 'App\Http\Controllers\ProdutoController@salvar')->name('novo-produto');

Route::put('produtos/{id}', 'App\Http\Controllers\ProdutoController@atualizar')->name('produto.atualizar');

Route::delete('produtos/{id}', 'App\Http\Controllers\ProdutoController@deletar')->name('produto.deletar');


Route::get('vendas', 'App\Http\Controllers\VendaController@index')->name('venda.listar');

Route::get('vendas/novo', 'App\Http\Controllers\VendaController@criar')->name('venda.criar');

Route::get('vendas/{id}', 'App\Http\Controllers\VendaController@mostrar');

Route::get('vendas/{id}/editar', 'App\Http\Controllers\VendaController@editar')->name('venda.editar');

Route::post('vendas', 'App\Http\Controllers\VendaController@salvar')->name('nova-venda');

Route::put('vendas/{id}', 'App\Http\Controllers\VendaController@atualizar')->name('venda.atualizar');

Route::delete('vendas/{id}', 'App\Http\Controllers\VendaController@deletar')->name('venda.deletar');
