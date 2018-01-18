@extends('layout')

@section('title', "Página no encontrada")

@section('content')
    <div class="card" style="width: 26rem;">
                    <img class="card-img-top" src="{{ asset('img/oops.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h1 class="card-title" style="color: red; text-align: center;">¡ERROR 404!</h1>
                        <h3 class="card-title">Página no encontrada</h3>
                        <p class="card-text">Por favor, vuelva por donde ha venido, gracias.</p>
                        <a href="{{ route('users.index') }}" class="btn btn-primary">Volver</a>
                    </div>
                </div>
@endsection