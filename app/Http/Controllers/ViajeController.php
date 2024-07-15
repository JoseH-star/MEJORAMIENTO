<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Viaje;
use Illuminate\Http\Request;

class ViajeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $viajes = Viaje::all();
        return view('viajes.index', compact('viajes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('viajes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Viaje::create($request->all());
        return redirect()->route('viajes.index');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('viajes.show', compact('viaje'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('viajes.edit', compact('viaje'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Viaje $viaje)
    {
        $viaje->update($request->all());
        return redirect()->route('viajes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Viaje $viaje)
    {
        $viaje->delete();
        return redirect()->route('viajes.index');
    }
}
