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
/*ROTAS DE AUTENTICAÇÃO*/


Route::get('/', function () {
    return view('vender');
});
Route::get('vender', function () {
    return view('vender');
});



/* OUTRAS ROTAS */


Route::get('precificador', function () {
    return view('precificador');
});
Route::get('lista-produtos', function () {
    return view('lista-produtos');
});
Route::get('lista-clientes', function(){
    return view('lista-clientes');
});

Route::get('gerenciarClientes', function () {
    return view('gerenciarClientes');
});
Route::get('dashboard', function () {
    return view('dashboard');
});



Route::get('precificador', 'IngredientesController@index');

Route::get('/', 'ProdutoController@index');
Route::get('vender', 'ProdutoController@index');


Route::get('lista-clientes', 'ClienteController@index');
Route::get('dashboard', 'VendaController@index');
Route::get('lista-produtos', 'ProdutoController@indexLista')->name('lista-produtos');



Route::post('ingrediente', 'IngredientesController@store');
Route::post('Produto', 'ProdutoController@store');
Route::post('Cliente', 'ClienteController@store');
Route::post('Venda', 'VendaController@store');


Route::get('/precificador/excluir/{id}', 'IngredientesController@destroy');

Route::get('/lista-produtos/excluir/{id}', 'ProdutoController@destroy');
Route::get('/produto/editar/{id}', 'ProdutoController@edit');
Route::put('/produto/{id}', 'ProdutoController@update');

Route::get('/gerenciarClientes/excluir/{id}', 'ClienteController@destroy');
Route::get('/cliente/editar/{id}', 'ClienteController@edit');
Route::put('/cliente/{id}', 'ClienteController@update');


Route::get('/vender/{id}/edit', 'VendaController@edit')->name('venda.edit');
Route::put('/venda/{id}', 'VendaController@updateStatus')->name('venda.update');






