@extends('layout')

@section('title', 'Crear usuario')

@section('content')
    <h1>Crear usuario</h1>

    <form action="{{ url('usuarios') }}" method="POST">
        {!! csrf_field() !!}
        <div class="form-group row">
            <label class="col-md-2" for="name">Nombre:</label>
            <input class="col-md-10" type="text" name="name" id="name">
        </div>
        <div class="form-group row">
            <label class="col-md-2" for="email">Correo electrónico:</label>
            <input class="col-md-10" type="email" name="email" id="email">
        </div>
        <div class="form-group row">
            <label class="col-md-2" for="password">Contraseña:</label>
            <input class="col-md-10" type="password" name="password" id="password">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary pull-right">Crear usuario</button>
        </div>
    </form>
    <p>
        <a href="{{ route('users.index') }}">Regresar al listado de usuarios</a>
    </p>
@endsection