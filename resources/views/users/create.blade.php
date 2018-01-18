@extends('layout')

@section('title', 'Crear usuario')

@section('content')
    <h1>Crear usuario</h1>
    @if ($errors->any())
    {{-- <p>Hay errores!</p> --}}
    <div class="alert alert-danger">
        <h5>Por favor corrija los errores indicados en cada campo.</h5>
       {{--  <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul> --}}
    </div>
@endif
    <form action="{{ url('usuarios') }}" method="POST">
        {!! csrf_field() !!}
        <div class="form-group row">
            <label class="col-md-2" for="name">Nombre:</label>
            <input class="col-md-10" type="text" name="name" id="name" placeholder="Escriba nombre y apellidos" value="{{ old('name') }}">
            @if ($errors->has('name'))
                <div class="alert alert-danger">
                    <p>{{ $errors->first('name') }}</p>
                </div>
            @endif
        </div>
        <div class="form-group row">
            <label class="col-md-2" for="email">Correo electrónico:</label>
            <input class="col-md-10" type="email" name="email" id="email" placeholder="example@correo.com" value="{{ old('email') }}">
            @if ($errors->has('email'))
                <p>{{ $errors->first('email') }}</p>
            @endif
        </div>
        <div class="form-group row">
            <label class="col-md-2" for="password">Contraseña:</label>
            <input class="col-md-10" type="password" name="password" id="password" placeholder="Mayor a 6 caracteres">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary pull-right">Crear usuario</button>
        </div>
    </form>
    <p>
        <a href="{{ route('users.index') }}">Regresar al listado de usuarios</a>
    </p>
@endsection