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

Route::get('/', "homeController@index");

//desenvolvedora
Route::get('/desenvolvedoras', "desenvolvedorasController@lista")->middleware('auth');
Route::post('/desenvolvedoras/adiciona', "desenvolvedorasController@adiciona")->middleware('auth');
Route::get('/desenvolvedoras/remove/{id}', "desenvolvedorasController@remove")->middleware('auth');

//jogos
Route::get('/jogos', "jogosController@lista")->middleware('auth');
Route::post('/jogos/adiciona', "jogosController@adiciona")->middleware('auth');
Route::get('/jogos/remove/{id}', "jogosController@remove")->middleware('auth');

//comentarios
Route::get('/comentarios', "comentariosController@lista")->middleware('auth');
Route::post('/comentarios/adiciona', "comentariosController@adiciona")->middleware('auth');
Route::get('/comentarios/remove/{id}', "comentariosController@remove")->middleware('auth');

Auth::routes();
