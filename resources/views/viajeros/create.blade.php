@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Agregar Viajero</h1>
        <form action="{{ route('viajeros.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="dni">DNI:</label>
                <input type="text" class="form-control" id="dni" name="dni" required>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" class="form-control" id="direccion" name="direccion">
            </div>
            <div class="form-group">
                <label for="tfno">Teléfono:</label>
                <input type="text" class="form-control" id="tfno" name="tfno">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
