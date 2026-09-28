<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;

Route::get('/', function () {
    return redirect()->route('animales.index');
});
// GET: Para listar animales y mostrar formularios de creación/edición.
Route::get('/animales', [AnimalController::class, 'index'])->name('animales.index');
Route::get('/animales/crear', [AnimalController::class, 'create'])->name('animales.create');
Route::get('/animales/{id}/editar', [AnimalController::class, 'edit'])->name('animales.edit');

// POST: Para procesar el almacenamiento de nuevos registros.
Route::post('/animales', [AnimalController::class, 'store'])->name('animales.store');

// PUT: Para procesar la actualización de registros.
Route::put('/animales/{id}', [AnimalController::class, 'update'])->name('animales.update');

// DELETE: Para eliminar registros.
Route::delete('/animales/{id}', [AnimalController::class, 'destroy'])->name('animales.destroy');