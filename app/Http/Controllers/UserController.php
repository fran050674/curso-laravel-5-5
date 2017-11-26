<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        if (request()->has('empty')) {
            $users = [];
        } else {
            $users = [
                'Ana',
                'Jose',
                'Juan',
                'luis',
                'Maria',
            ];
        }

        $title = 'Listado de usuarios.';

        // dd(compact('users', 'title'));

        return view('users.index', compact('users', 'title'));
    }

    public function show($id)
    {
        return view('users.show', compact('id'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function edit($id)
    {
        return view('users.edit', compact('id'));
    }

}
