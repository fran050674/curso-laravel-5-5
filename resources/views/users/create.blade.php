@extends('layout')

@section('title', 'Crear usuario')

@section('content')
    <h1>Crear usuario</h1>
    <form action="{{ url('usuarios/crear') }}" method="POST" accept-charset="utf-8">
        {!! csrf_field() !!}
        <button type="submit" class="btn btn-primary">Crear</button>

    </form>
    <p>
        <a href="{{ route('users') }}">Regresar al listado de usuarios</a>
    </p>
@endsection