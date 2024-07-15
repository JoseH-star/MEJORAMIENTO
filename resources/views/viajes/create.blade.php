@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Agregar Viaje</h1>
        <form action="{{ route('viajes.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="codigo">Código:</label>
                <input type="text" class="form-control" id="codigo" name="codigo" required>
            </div>
            <div class="form-group">
                <label for="num_plazas">Número de Plazas:</label>
                <input type="number" class="form-control" id="num_plazas" name="num_plazas" required>
            </div>
            <div class="form-group">
                <label for="fecha">Fecha:</label>
                <input type="date" class="form-control" id="fecha" name="fecha" required>
            </div>
            <div class="form-group">
                <label for="otros_datos">Otros Datos:</label>
                <textarea class="form-control" id="otros_datos" name="otros_datos"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
