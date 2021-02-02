@extends('layout.master')

@section('title', 'Muestra Datos')

@section('content')

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $datos['nombre'] }} {{ $datos['apellidos'] }}</h5>
            <p class="card-text">Fecha de Nacimiento: {{ $datos['fechaNacimiento'] }}</p>
            <p class="card-text">Sexo: {{ $datos['sexo'] }}</p>
            <p class="card-text">Email: {{ $datos['email'] }}</p>
            <p class="card-text">Contraseña: {{ $datos['contrasena'] }}</p>
            <a href="{{ url('/home') }}" class="btn btn-primary">Volver a Home</a>
        </div>
    </div>

@endsection
