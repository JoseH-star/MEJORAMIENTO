@extends('layouts.app')

@section('content')
    <h1>Jugadores</h1>
    <a href="{{ route('jugadores.create') }}">Crear Jugador</a>
    <ul>
        @foreach($jugadores as $jugador)
            <li>{{ $jugador->nombre }} - <a href="{{ route('jugadores.show', $jugador->id) }}">Ver</a> - <a href="{{ route('jugadores.edit', $jugador->id) }}">Editar</a></li>
        @endforeach
    </ul>
@endsection