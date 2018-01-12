<?php

Route::get('/', function () {
    return view('layout');
});

Route::get('/usuarios', 'UserController@index')->name('users');


Route::get('/usuarios/{user}', 'UserController@show')
    ->where('user', '[0-9]+')
    ->name('users.show');

Route::get('/usuarios/{id}/edit', 'UserController@edit')->where('id', '[0-9]+');


Route::get('/usuarios/nuevo', 'UserController@create')
    ->where('nuevo', '[a-z]+')
    ->name('users.create');

Route::post('/usuarios/crear', 'UserController@store');

Route::get('/saludo/{name}/{nickname}', 'WelcomeUserController@nickname');

