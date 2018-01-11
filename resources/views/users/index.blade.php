@extends('layout')

@section('title', 'Usuarios')

@section('content')

    <div class="container">
        <h1>{{ $title }}</h1>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($users as $user)
    <tr>
      <th scope="row">{{ $user->id }}</th>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
      <td><a href="{{ route('users.show', ['id' => $user->id]) }}">Ver detalles</a></td>
    </tr>
    @empty
        <p>No hay usuarios registrados.<p>
    @endforelse
  </tbody>
</table>

    <ul>
        @forelse ($users as $user)
            <li>{{ $user->name }} ({{ $user->email }})</li>
        @empty
            <li>No hay usuarios registrados.</li>
        @endforelse
@endsection
    </div>


{{-- @section('sidebar')
    @parent
    <h2>Barra lateral desde users</h2>
@endsection --}}

