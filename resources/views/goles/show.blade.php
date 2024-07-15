@extends('layouts.app')

@section('content')
    <h1>{{ $gol->desc }}</h1>
    <p>Minuto: {{ $gol->minuto }}</p>
    <a href="{{ route('goles.edit', $gol->id) }}">Editar</a>
    <form action="{{ route('goles.destroy', $gol->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
@endsection
