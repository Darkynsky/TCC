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
Route::get('login', function () {
    return view('login');
});
Route::get('vender', function () {
    return view('vender');
});
Route::get('precificador', function () {
    return view('precificador');
});
Route::get('precificador', 'IngredientesController@index'); //Rota de consulta
Route::get('vender', 'ProdutoController@index'); //Rota de consulta
Route::post('ingrediente', 'IngredientesController@store'); //Rota de inserção
Route::post('Produto', 'ProdutoController@store'); //Rota de inserção

