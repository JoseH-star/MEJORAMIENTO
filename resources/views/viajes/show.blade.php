@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles del Viaje</h1>
        <div class="card">
            <div class="card-header">
                Viaje: {{ $viaje->codigo }}
            </div>
            <div class="card-body">
                <p><strong>Código:</strong> {{ $viaje->codigo }}</p>
                <p><strong>Número de Plazas:</strong> {{ $viaje->num_plazas }}</p>
                <p><strong>Fecha:</strong> {{ $viaje->fecha }}</p>
                <p><strong>Otros Datos:</strong> {{ $viaje->otros_datos }}</p>
            </div>
        </div>
        <a href="{{ route('viajes.index') }}" class="btn btn-primary mt-3">Volver a la lista</a>
    </div>
@endsection
