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

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required'
        ],[
            'name.required' => 'El campo nombre es obligatorio.'
        ]);

        /*if (empty($data['name'])) {
            return redirect('usuarios/nuevo')->withErrors([
                'name' => 'El campo nombre es obligatorio.'
            ]);
        }*/

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' =>bcrypt($data['password'])
        ]);

        return redirect()->route('users.index');
    }

    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }

}
