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

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});

Route::get('/noticia', 'NoticiaController@index');

Route::post('noticia/mostrar', ['as' => 'noticia.index', 'uses'=>'NoticiaController@index']);

Route::delete('noticia/{id}/eliminar', ['as'=> 'noticia.delete', 'uses' =>'NoticiaController@destroy']);

Route::post('noticia/{id}/edit', ['as' => 'noticia.editar', 'uses' => 'NoticiaController@edit']);

Route::put('noticia/{id}', ['as' => 'noticia.update', 'uses'=>'NoticiaController@update']);

Route::post('noticia/crear', ['as' => 'noticia.create', 'uses'=>'NoticiaController@store']);

