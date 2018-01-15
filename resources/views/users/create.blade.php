@extends('layout')

@section('title', 'Crear usuario')

@section('content')
    <h1>Crear usuario</h1>
    <form action="{{ url('usuarios/crear') }}" method="POST">
        {!! csrf_field() !!}

        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name">

        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" id="email">

        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password">

        <button type="submit" class="btn btn-primary">Crear usuario</button>

    </form>
    <p>
        <a href="{{ route('users') }}">Regresar al listado de usuarios</a>
    </p>
@endsection