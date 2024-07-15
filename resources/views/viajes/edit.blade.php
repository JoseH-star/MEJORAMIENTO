@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Viaje</h1>
        <form action="{{ route('viajes.update', $viaje) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="codigo">Código:</label>
                <input type="text" class="form-control" id="codigo" name="codigo" value="{{ $viaje->codigo }}" required>
            </div>
            <div class="form-group">
                <label for="num_plazas">Número de Plazas:</label>
                <input type="number" class="form-control" id="num_plazas" name="num_plazas" value="{{ $viaje->
