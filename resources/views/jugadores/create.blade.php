@extends('layouts.app')

@section('content')
    <h1>Crear Jugador</h1>
    <form action="{{ route('jugadores.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre">
        
        <label for="posicion">Posición:</label>
        <input type="text" id="posicion" name="posicion">

        <label for="fecha_nac">Fecha de Nacimiento:</label>
        <input type="date" id="fecha_nac" name="fecha_nac">

        <button type="submit">Guardar</button>
    </form>
@endsection
