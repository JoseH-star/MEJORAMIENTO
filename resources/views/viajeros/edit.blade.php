@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Viajero</h1>
        <form action="{{ route('viajeros.update', $viajero) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="dni">DNI:</label>
                <input type="text" class="form-control" id="dni" name="dni" value="{{ $viajero->dni }}" required>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $viajero->nombre }}" required>
            </div>
            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $viajero->direccion }}">
            </div>
            <div class="form-group">
                <label for="tfno">Teléfono:</label>
                <input type="text" class="form-control" id="tfno" name="tfno" value="{{ $viajero->tfno }}">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
@endsection
