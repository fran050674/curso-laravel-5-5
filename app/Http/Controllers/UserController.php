<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        //Listado dinámico de datos de la base de datos.
        // $users = DB::table('users')->get();
        $users = User::all();


        //listado estático de datos
        /*f (request()->has('empty')) {
            $users = [];
        } else {
            $users = [
                'Ana',
                'Jose',
                'Juan',
                'luis',
                'Maria',
            ];
        }*/

        $title = 'Listado de usuarios.';

        // dd(compact('users', 'title'));

        return view('users.index', compact('users', 'title'));
    }

    public function show($id)
    {
        $user = User::findOrFail($id);

        // if ($user == null) {
        //     return response()->view('errors.404', [], 404);
        // }

        return view('users.show', compact('user'));
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
