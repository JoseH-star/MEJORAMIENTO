<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use App\Models\Gol;
use App\Models\Jugador;
use Illuminate\Http\Request;

class GolController extends Controller
{
    public function index()
    {
        $goles = Gol::with('jugador')->get();
        return view('gols.index', compact('goles'));
    }

    public function create()
    {
        $jugadores = Jugador::all();
        return view('gols.create', compact('jugadores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'minuto' => 'required',
            'desc' => 'required',
            'jugador_codigo' => 'required|exists:jugadors,codigo',
        ]);

        Gol::create($request->all());

        return redirect()->route('gols.index')
                         ->with('success', 'Gol creado exitosamente.');
    }

    public function show(Gol $gol)
    {
        return view('gols.show', compact('gol'));
    }

    public function edit(Gol $gol)
    {
        $jugadores = Jugador::all();
        return view('gols.edit', compact('gol', 'jugadores'));
    }

    public function update(Request $request, Gol $gol)
    {
        $request->validate([
            'minuto' => 'required',
            'desc' => 'required',
            'jugador_codigo' => 'required|exists:jugadors,codigo',
        ]);

        $gol->update($request->all());

        return redirect()->route('gols.index')
                         ->with('success', 'Gol actualizado exitosamente.');
    }

    public function destroy(Gol $gol)
    {
        $gol->delete();

        return redirect()->route('gols.index')
                         ->with('success', 'Gol eliminado exitosamente.');
    }
}
