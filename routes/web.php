<?php

Route::get('/', function () {
    return view('layout');
});

Route::get('/usuarios', 'UserController@index');


Route::get('/usuarios/{id}', 'UserController@show')
    ->where('id', '[0-9]+');

Route::get('/usuarios/{id}/edit', 'UserController@edit')->where('id', '[0-9]+');


Route::get('/usuarios/nuevo', 'UserController@create')
    ->where('nuevo', '[a-z]+');

Route::get('/saludo/{name}/', 'WelcomeUserController@name');

Route::get('/saludo/{name}/{nickname}', 'WelcomeUserController@nickname');

