@extends('layout.master')

@section('title', 'Log-In')


@section('content')

    <h2>Log-In</h2>

    <form name="formulario" method="post" action="/compruebaForm">

            @csrf

            <h2>Formulario:</h2>

            *
            <input type="text" name="nombre" placeholder="Nombre" value="{{ old('nombre') }}"><br>

            @error('nombre')

                <div class="alert alert-warning mt-2">{{ $message }}</div>

            @enderror

            <br>
            *
            <input type="text" name="apellidos" placeholder="Apellidos" value="{{ old('apellidos') }}">

            @error('apellidos')

                <div class="alert alert-warning mt-2">{{ $message }}</div>

            @enderror

            <br>
            * Fecha de nacimiento: <br>
            <input type="date" name="fechaNacimiento" style="margin-left: 1%;" value="{{ old('fechaNacimiento') }}">

            @error('fechaNacimiento')

                <div class="alert alert-warning mt-2">{{ $message }}</div>

            @enderror

            <br>
            * Sexo:
            <input type="radio" name="sexo" value="hombre" {{ old('sexo') == "hombre" ? "checked" : "" }} >Hombre</input>
            <input type="radio" name="sexo" value="mujer" {{ old('sexo') == "mujer" ? "checked" : "" }}>Mujer</input><br>

            @error('sexo')

                <div class="alert alert-warning mt-2">{{ $message }}</div>

            @enderror

            <br>
            *
            <input type="email" name="email" placeholder="Email" ><br>

            @error('email')

                <div class="alert alert-warning mt-2">{{ $message }}</div>

            @enderror


            <br>
            * Contraseña:
            <input type="password" name="contrasena" minlength="8" maxlength="15" placeholder="Contraseña" ><br>

            @error('contrasena')

                <div class="alert alert-warning mt-2">{{ $message }}</div>

            @enderror

            <br>
            * Aceptar las condiciones:
            <input type="checkbox" name="checkbox">

            @error('checkbox')

                <div class="alert alert-warning mt-2">{{ $message }}</div>

            @enderror

            <br>
            <br>
            <input type="submit" name="enviar" value="enviar" style="padding: 1% 2%; background-color:aquamarine; margin-left: 3%;">

            <br>
            <br>
            Los elementos marcados con un asterisco (*) son onligatorios
    </form>

@endsection
