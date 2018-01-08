@extends('layout')

@section('title', 'Usuarios')

@section('content')

    <h1>{{ $title }}</h1>

    <ul>
        @forelse ($users as $user)
            <li>{{ $user->name }}</li>
        @empty
            <li>No hay usuarios registrados.</li>
        @endforelse
@endsection

{{-- @section('sidebar')
    @parent
    <h2>Barra lateral desde users</h2>
@endsection --}}

