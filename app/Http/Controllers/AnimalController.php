<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    // Mostrar la lista (GET)
    public function index()
    {
        $animales = session('animales', []);
        return view('animales.index', compact('animales'));
    }

    // Mostrar formulario de creación (GET)
    public function create()
    {
        return view('animales.create');
    }

    // Procesar almacenamiento (POST)
    public function store(Request $request)
    {
        $animales = session('animales', []);
        $nuevoId = count($animales) > 0 ? max(array_column($animales, 'id')) + 1 : 1;
        
        $animales[] = [
            'id' => $nuevoId,
            'nombre' => $request->input('nombre'),
            'especie' => $request->input('especie')
        ];
        
        session(['animales' => $animales]);
        return redirect()->route('animales.index');
    }

    // Mostrar formulario de edición (GET)
    public function edit($id)
    {
        $animales = session('animales', []);
        $animal = collect($animales)->firstWhere('id', (int)$id);
        return view('animales.edit', compact('animal'));
    }

    // Procesar actualización (PUT)
    public function update(Request $request, $id)
    {
        $animales = session('animales', []);
        foreach ($animales as &$animal) {
            if ($animal['id'] == $id) {
                $animal['nombre'] = $request->input('nombre');
                $animal['especie'] = $request->input('especie');
                break;
            }
        }
        session(['animales' => $animales]);
        return redirect()->route('animales.index');
    }

    // Procesar eliminación (DELETE)
    public function destroy($id)
    {
        $animales = session('animales', []);
        $animales = array_filter($animales, function($animal) use ($id) {
            return $animal['id'] != $id;
        });
        
        session(['animales' => $animales]);
        return redirect()->route('animales.index');
    }
}
