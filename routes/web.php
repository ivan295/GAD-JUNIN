<?php
 Route::get('/', function () {
    return view('/vendor/adminlte/index');
 });

//  Route::get('/', function () {
//      return view('/vendor/adminlte/construccion');
//  });

Route::group(['middleware' => 'auth'], function () {
});
Route::get('/index', function () {
    return view('/vendor/adminlte/index');
});

Route::get('/noticia/nuevanoticia', function () {
    return view('/vendor/adminlte/noticia');
});
Route::get('/lotaip/nuevalotaip', function () {
    return view('/vendor/adminlte/nuevalotaip');
});
Route::get('/lotaipanio/nuevalotaipanio', function () {
    return view('/vendor/adminlte/nuevalotaipanio');
});
Route::get('/lotaipmes/nuevalotaipmes', function () {
    return view('/vendor/adminlte/nuevalotaimes');
});
Route::get('/misionyvision/misionyvision', function () {
    return view('/vendor/adminlte/misionyvision');
});
Route::get('/contacto/contacto', function () {
    return view('/vendor/adminlte/contacto');
});





//rutas index
Route::get('/lotaip', 'LotaipController@index');
Route::get('/home','HomeController@index');
Route::get('/publicar', 'PublicarController@index');
Route::get('/lotaipanio', 'LotaipAnioController@index');
Route::get('/lotaipmes', 'LotaipMesController@index');
Route::get('/transparecia', 'TransparenciaController@index');
Route::get('/misionyvision', 'MyVController@index');
Route::get('/contacto', 'ContactoController@index');



Route::post('transparecia/mostrar', ['as' => 'transparecia.index', 'uses'=>'TranspareciaController@index']);

Route::delete('transparecia/{id}/eliminar', ['as'=> 'transparecia.delete', 'uses' =>'TranspareciaController@destroy']);

Route::post('transparecia/{id}/edit', ['as' => 'transparecia.editar', 'uses' => 'TranspareciaController@edit']);

Route::put('transparecia/{id}', ['as' => 'transparecia.update', 'uses'=>'TransparenciaController@update']);

Route::post('transparecia/crear', ['as' => 'transparecia.create', 'uses'=>'TransparenciaController@store']);


//crear noticia
Route::get('/noticia', 'NoticiaController@index');

Route::post('noticia/mostrar', ['as' => 'noticia.index', 'uses'=>'NoticiaController@index']);

Route::delete('noticia/{id}/eliminar', ['as'=> 'noticia.delete', 'uses' =>'NoticiaController@destroy']);

Route::post('noticia/{id}/edit', ['as' => 'noticia.editar', 'uses' => 'NoticiaController@edit']);

Route::put('noticia/{id}', ['as' => 'noticia.update', 'uses'=>'NoticiaController@update']);
Route::post('noticia/crear', ['as' => 'noticia.create', 'uses'=>'NoticiaController@store']);

//publicar noticia


Route::post('publicar/mostrar', ['as' => 'publicar.index', 'uses'=>'PublicarController@index']);

Route::delete('publicar/{id}/eliminar', ['as'=> 'publicar.delete', 'uses' =>'PublicarController@destroy']);

Route::post('publicar/{id}/edit', ['as' => 'publicar.editar', 'uses' => 'PublicarController@edit']);

Route::post('publicar/{id}/public', ['as' => 'publicar.public', 'uses' => 'PublicarController@public']);

Route::put('publicar/{id}', ['as' => 'publicar.update', 'uses'=>'PublicarController@update']);

Route::post('publicar/crear', ['as' => 'publicar.create', 'uses'=>'PublicarController@store']);

Route::post('index/mostrar', ['as' => 'index.index', 'uses'=>'IndexController@index']);


//lotaip
Route::post('lotaip/mostrar', ['as' => 'lotaip.index', 'uses'=>'LotaipController@index']);

Route::delete('lotaip/{id}/eliminar', ['as'=> 'lotaip.delete', 'uses' =>'LotaipController@destroy']);

Route::post('lotaip/{id}/edit', ['as' => 'lotaip.editar', 'uses' => 'LotaipController@edit']);

Route::put('lotaip/{id}', ['as' => 'lotaip.update', 'uses'=>'LotaipController@update']);

Route::post('lotaip/crear', ['as' => 'lotaip.create', 'uses'=>'LotaipController@store']);

//lotaipAnio
Route::post('lotaipanio/mostrar', ['as' => 'lotaipanio.index', 'uses'=>'LotaipAnioController@index']);

Route::delete('lotaipanio/{id}/eliminar', ['as'=> 'lotaipanio.delete', 'uses' =>'LotaipAnioController@destroy']);

Route::post('lotaipanio/{id}/edit', ['as' => 'lotaipanio.editar', 'uses' => 'LotaipAnioController@edit']);

Route::put('lotaipanio/{id}', ['as' => 'lotaipanio.update', 'uses'=>'LotaipAnioController@update']);

Route::post('lotaipanio/crear', ['as' => 'lotaipanio.create', 'uses'=>'LotaipAnioController@store']);


//lotaipMes
Route::post('lotaipmes/mostrar', ['as' => 'lotaipmes.index', 'uses'=>'LotaipMesController@index']);

Route::delete('lotaipmes/{id}/eliminar', ['as'=> 'lotaipmes.delete', 'uses' =>'LotaipMesController@destroy']);

Route::post('lotaipmes/{id}/edit', ['as' => 'lotaipmes.editar', 'uses' => 'LotaipMesController@edit']);

Route::put('lotaipmes/{id}', ['as' => 'lotaipmes.update', 'uses'=>'LotaipMesController@update']);

Route::post('lotaipmes/crear', ['as' => 'lotaipmes.create', 'uses'=>'LotaipMesController@store']);

