@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto bg-white rounded-lg shadow p-6 border-t-4 border-amber-700">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-semibold text-emerald-800">Directorio</h2>
        <a href="{{ route('animales.create') }}" class="bg-amber-700 hover:bg-amber-800 text-white font-semibold py-2 px-4 rounded shadow transition duration-200">
            + Añadir Nuevo
        </a>
    </div>
    
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-emerald-50 text-emerald-900 border-b-2 border-emerald-200">
                    <th class="py-3 px-4 font-semibold">Nombre</th>
                    <th class="py-3 px-4 font-semibold">Especie</th>
                    <th class="py-3 px-4 font-semibold text-right">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($animales as $animal)
                <tr class="border-b hover:bg-gray-50 transition duration-150">
                    <td class="py-3 px-4 font-medium">{{ $animal['nombre'] }}</td>
                    <td class="py-3 px-4 text-gray-600">{{ $animal['especie'] }}</td>
                    <td class="py-3 px-4 text-right space-x-2">
                        <a href="{{ route('animales.edit', $animal['id']) }}" class="inline-block bg-emerald-600 hover:bg-emerald-700 text-white text-sm py-1 px-3 rounded transition duration-200">Editar</a>
                        
                        <form action="{{ route('animales.destroy', $animal['id']) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-amber-900 hover:bg-amber-950 text-white text-sm py-1 px-3 rounded transition duration-200" onclick="return confirm('¿Seguro que deseas eliminar este registro?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="py-6 text-center text-gray-500 italic">No hay animales registrados.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection