<?php

Route::get('/', function () {
    return view('welcome');
});

	 /*
Route::get('cliente/{id}/{nome?}',function($id,$nome = ''){
	return view('cliente-nome',[
			'id' => $id
			,'nome' => $nome
			//,'conteudo' => 'coneudo 123'
	]);  
});
*/



Route::get('/teste', function () {
    return view('hello');
});


Route::get('/if-for', function () {
    return view('if-for');
});


Route::get('/client', function () {
    return view('client');
});


Route::group(['prefix' => 'admin', 'as'=>'admin.'], function(){
	Route::get('client', 'ClienteController@create');
	Route::post('cliente', 'ClienteController@store')->name('client.store');	
});


Route::group(['prefix' => 'site', 'as'=>'site.'], function(){
	Route::get('client', 'SiteClienteController@create');
	Route::post('cliente', 'SiteClienteController@store')->name('client.store');	
});



Route::group(['prefix' => 'eloquent', 'as'=>'eloquent.'], function(){
	Route::get('clients', 'EloquentClienteController@index')->name('client.list');
	Route::get('clients.create', 'EloquentClienteController@create')->name('client.create');
	Route::post('clients.store', 'EloquentClienteController@store')->name('client.store');
});

