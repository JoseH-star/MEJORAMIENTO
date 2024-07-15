@extends('layouts.app')

@section('content')
    <h1>Editar Gol</h1>
    <form action="{{ route('goles.update', $gol->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="desc">Descripcion:</label>
        <input type="text" id="desc" name="desc" value="{{ $gol->desc }}">

        <label for="minuto">Minuto:</label>
        <input type="text" id="minuto" name="minuto" value="{{ $gol->minuto }}">

        <button type="submit">Guardar</button>
    </form>
@endsection
