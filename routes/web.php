<?php

Route::get('/', function(){
	return '<h1>Lógica com Laravel</h1>';
});

Route::get('/outra',function(){
	return'<h1>Outra Lógica</h1>';
});

Route::get('/p',function(){
	return'<h1>aaaaa</h1>';
});

Route::get('/produtos','ProdutoController@lista');

Route::get('/produtos/mostra/{id}','ProdutoController@mostra')->where('id','[0-9]+');