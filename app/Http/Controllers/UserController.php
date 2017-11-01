<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            'Ana',
            'Jose',
            'Juan',
            'luis',
            'Maria',
        ];

        $title = 'Listado de usuarios.';

        // dd(compact('users', 'title'));

        return view('users', compact('users', 'title'));
    }

    public function show($id)
    {
        return "Mostrando detalle del usuario: {$id}";
    }

    public function create()
    {
        return 'Creando nuevo usuario';
    }

    public function edit($id)
    {
        return "Usuario con id: {$id}, ha sido editado correctamente.";
    }

}
