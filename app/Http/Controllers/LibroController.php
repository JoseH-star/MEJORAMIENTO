<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function create(){

        return view('li.create');
    }

    public function store(Request $request){

        $libros = new Libro();
        $libros->titulo = $request->titulo;
        $libros->isbn = $request->isbn;
        $libros->editorial = $request->editorial;
        $libros->paginas = $request->paginas;
        $libros->save();
    }

    public function index(){

        $libros = Libro::orderBy('id', 'desc')->get();
        return view('li.index', compact('libros'));
    }

    public function show(Libro $libro){

        return view('li.show',compact('libro'));
    }

    public function destroy (Libro $libro){
           
        $libro->delete();
        return redirect()->route('libro.index');
    }

    public function edit(Libro $libro){   
        return view('li.edit',compact('libro'));
 
    }

    public function update(Request $request, Libro $libro){
           
        $libro->titulo = $request->titulo;
        $libro->isbn = $request->isbn;
        $libro->editorial = $request->editorial;
        $libro->paginas = $request->paginas;
        $libro->save();
        return redirect()->route('libro.index');
      }




}
