@extends('layouts.app')

@section('content')
    <h1>Editar Jugador</h1>
    <form action="{{ route('jugadores.update', $jugador->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="{{ $jugador->nombre }}">

        <label for="posicion">Posición:</label>
        <input type="text" id="posicion" name="posicion" value="{{ $jugador->posicion }}">

        <label for="fecha_nac">Fecha de Nacimiento:</label>
        <input type="date" id="fecha_nac" name="fecha_nac" value="{{ $jugador->fecha_nac }}">

        <button type="submit">Guardar</button>
    </form>
@endsection
