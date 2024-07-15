@extends('layouts.app')

@section('content')
    <h1>Crear Gol</h1>
    <form action="{{ route('goles.store') }}" method="POST">
        @csrf
        <label for="desc">descripcion:</label>
        <input type="text" id="desc" name="desc">
        
        <label for="minuto">Minuto:</label>
        <input type="text" id="minuto" name="minuto">

        <button type="submit">Guardar</button>
    </form>
@endsection