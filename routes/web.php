<?php

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
Route::get('/index', function () {
    return view('/vendor/adminlte/index');
});

Route::get('/noticia/nuevanoticia', function () {
    return view('/vendor/adminlte/noticia');
});
Route::get('/home','HomeController@index');

//crear noticia
Route::get('/noticia', 'NoticiaController@index');

Route::post('noticia/mostrar', ['as' => 'noticia.index', 'uses'=>'NoticiaController@index']);

Route::delete('noticia/{id}/eliminar', ['as'=> 'noticia.delete', 'uses' =>'NoticiaController@destroy']);

Route::post('noticia/{id}/edit', ['as' => 'noticia.editar', 'uses' => 'NoticiaController@edit']);

Route::put('noticia/{id}', ['as' => 'noticia.update', 'uses'=>'NoticiaController@update']);
Route::post('noticia/crear', ['as' => 'noticia.create', 'uses'=>'NoticiaController@store']);

//publicar noticia
Route::get('/publicar', 'PublicarController@index');

Route::post('publicar/mostrar', ['as' => 'publicar.index', 'uses'=>'PublicarController@index']);

Route::delete('publicar/{id}/eliminar', ['as'=> 'publicar.delete', 'uses' =>'PublicarController@destroy']);

Route::post('publicar/{id}/edit', ['as' => 'publicar.editar', 'uses' => 'PublicarController@edit']);

Route::post('publicar/{id}/public', ['as' => 'publicar.public', 'uses' => 'PublicarController@public']);

Route::put('publicar/{id}', ['as' => 'publicar.update', 'uses'=>'PublicarController@update']);
Route::post('publicar/crear', ['as' => 'publicar.create', 'uses'=>'PublicarController@store']);



Route::get('/index', 'IndexController@index');

Route::post('index/mostrar', ['as' => 'index.index', 'uses'=>'IndexController@index']);

//Route::delete('index/{id}/eliminar', ['as'=> 'index.delete', 'uses' =>'IndexController@destroy']);

//Route::post('index/{id}/edit', ['as' => 'index.editar', 'uses' => 'IndexController@edit']);

//Route::put('index/{id}', ['as' => 'index.update', 'uses'=>'IndexController@update']);

//Route::post('index/crear', ['as' => 'index.create', 'uses'=>'IndexController@store']);

