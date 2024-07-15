@extends('layouts.app')

@section('content')
    <h1>{{ $jugador->nombre }}</h1>
    <p>Posición: {{ $jugador->posicion }}</p>
    <p>Fecha de Nacimiento: {{ $jugador->fecha_nac }}</p>
    <a href="{{ route('jugadores.edit', $jugador->id) }}">Editar</a>
    <form action="{{ route('jugadores.destroy', $jugador->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
@endsection
