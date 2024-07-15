<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

use App\Models\Jugador;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    
    public function index()
    {
        $jugadores = Jugador::all();
        return view('jugadores.index', compact('jugadores'));
    }

    
    public function create()
    {
        return view('jugadores.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'posicion' => 'required',
            'fecha_nac' => 'required|date',
        ]);

        Jugador::create($request->all());

        return redirect()->route('jugadores.index')
                         ->with('success', 'Jugador creado exitosamente.');
    }

    
    public function show(string $id)
    {
        return view('jugadores.show', compact('jugador'));
    }

    
    public function edit(string $id)
    {
        return view('jugadores.edit', compact('jugador'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jugador $jugador)
    {
        $request->validate([
            'nombre' => 'required',
            'posicion' => 'required',
            'fecha_nac' => 'required|date',
        ]);

        $jugador->update($request->all());

        return redirect()->route('jugadores.index')
                         ->with('success', 'Jugador actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jugador $jugador)
    {
        $jugador->delete();

        return redirect()->route('jugadores.index')
                         ->with('success', 'Jugador eliminado exitosamente.');
    }
}
