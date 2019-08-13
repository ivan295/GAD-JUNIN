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
//noticia
Route::get('/noticia', 'NoticiaController@index');

Route::post('noticia/mostrar', ['as' => 'noticia.index', 'uses'=>'NoticiaController@index']);

Route::delete('noticia/{id}/eliminar', ['as'=> 'noticia.delete', 'uses' =>'NoticiaController@destroy']);

Route::post('noticia/{id}/edit', ['as' => 'noticia.editar', 'uses' => 'NoticiaController@edit']);

Route::put('noticia/{id}', ['as' => 'noticia.update', 'uses'=>'NoticiaController@update']);
Route::post('noticia/crear', ['as' => 'noticia.create', 'uses'=>'NoticiaController@store']);



Route::get('/index', 'IndexController@index');

Route::post('index/mostrar', ['as' => 'index.index', 'uses'=>'IndexController@index']);

//Route::delete('index/{id}/eliminar', ['as'=> 'index.delete', 'uses' =>'IndexController@destroy']);

//Route::post('index/{id}/edit', ['as' => 'index.editar', 'uses' => 'IndexController@edit']);

//Route::put('index/{id}', ['as' => 'index.update', 'uses'=>'IndexController@update']);

//Route::post('index/crear', ['as' => 'index.create', 'uses'=>'IndexController@store']);

