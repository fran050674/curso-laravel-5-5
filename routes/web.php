<?php

Route::get('/', function () {
    return 'Home';
});

Route::get('/usuarios', function () {
    return 'Usuarios';
});

Route::get('/usuarios/{id}', function ($id) {
    return "Mostrando detalle del usuario: {$id}";
})->where('id', '[0-9]+');

Route::get('/usuarios/nuevo', function () {
    return 'Creando nuevo usuario';
})->where('nuevo', '[a-z]+');

Route::get('/saludo/{name}/{nickname?}', function($name, $nickname = null) {
    if ($nickname) {
        return "Bienvenido {$name}, tu apodo es {$nickname}";
    } else {
        return "Bienvenido {$name}, tu no tienes apodo";
    }

});