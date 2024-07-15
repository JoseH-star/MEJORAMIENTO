@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles del Viajero</h1>
        <div class="card">
            <div class="card-header">
                Viajero: {{ $viajero->nombre }}
            </div>
            <div class="card-body">
                <p><strong>DNI:</strong> {{ $viajero->dni }}</p>
                <p><strong>Nombre:</strong> {{ $viajero->nombre }}</p>
                <p><strong>Dirección:</strong> {{ $viajero->direccion }}</p>
                <p><strong>Teléfono:</strong> {{ $viajero->tfno }}</p>
            </div>
        </div>
        <a href="{{ route('viajeros.index') }}" class="btn btn-primary mt-3">Volver a la lista</a>
    </div>
@endsection
