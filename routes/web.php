<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');});

Route::post('/libro', [LibroController::class,'store'])->name('libro.store');
Route::get('/libro',[LibroController::class,'create']);

Route::get('libro/listar',[LibroController::class,'index'])->name('libro.index');
Route::get('libro/{libro}',[LibroController::class,'show'])->name('libro.show');
Route::delete('libros/{libro}',[LibroController::class,'destroy'])->name('libro.destroy');
Route::put('libro/{libro}',[LibroController::class,'update'])->name('libro.update');
Route::get('libro/{libro}/editar',[LibroController::class,'edit'])->name('libro.edit');
Route::resource('proyectos', ProyectoController::class);
Route::resource('clientes', ClienteController::class);
Route::resource('jugadores', JugadorController::class);
Route::resource('goles', GolController::class);
Route::resource('equipos', EquipoController::class);
Route::resource('partidos', PartidoController::class);
Route::resource('viajeros', ViajeroController::class);
Route::resource('viajes', ViajeController::class);
