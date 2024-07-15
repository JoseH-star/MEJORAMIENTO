<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Viajero;



class ViajeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $viajeros = Viajero::all();
        return view('viajeros.index', compact('viajeros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('viajeros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Viajero::create($request->all());
        return redirect()->route('viajeros.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('viajeros.show', compact('viajero'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('viajeros.edit', compact('viajero'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Viajero $viajero)
    {
        $viajero->update($request->all());
        return redirect()->route('viajeros.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Viajero $viajero)
    {
        $viajero->delete();
        return redirect()->route('viajeros.index');
    }
}
