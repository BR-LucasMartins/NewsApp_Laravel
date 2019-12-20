<?php

use App\Http\Controllers\noticiasController;

Route::get('/', 'noticiasController@index');

Route::get('/nova_noticia', 'noticiasController@create');
Route::post('/salvar_noticia', 'noticiasController@store');
Route::get('/gerir_noticias', 'noticiasController@apresentarTabelaGestao');

//visibilidade
Route::get('colocar_visivel/{id}', 'noticiasController@colocarVisivel');
Route::get('colocar_invisivel/{id}', 'noticiasController@colocarInvisivel');

//delete
Route::get('remover_noticia/{id}', 'noticiasController@destroy');

//editar
Route::get('editar_noticia/{id}','noticiasController@edit');
Route::post('atualizar_noticia/{id}', 'noticiasController@update');