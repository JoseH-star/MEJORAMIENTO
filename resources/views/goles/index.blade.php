@extends('layouts.app')

@section('content')
    <h1>Goles</h1>
    <a href="{{ route('goles.create') }}">Crear Gol</a>
    <ul>
        @foreach($goles as $gol)
            <li>{{ $gol->desc }} - <a href="{{ route('goles.show', $goles->id) }}">Ver</a> - <a href="{{ route('goles.edit', $gol->id) }}">Editar</a></li>
        @endforeach
    </ul>
@endsection