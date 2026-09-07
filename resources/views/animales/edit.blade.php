@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto bg-white rounded-lg shadow p-8 border-t-4 border-amber-700">
    <h2 class="text-2xl font-semibold text-amber-900 mb-6">Actualizar Registro</h2>
    
    <form action="{{ route('animales.update', $animal['id']) }}" method="POST" class="space-y-5">
        @csrf
        @method('PUT')
        <div>
            <label class="block text-emerald-800 font-medium mb-1">Nombre:</label>
            <input type="text" name="nombre" value="{{ $animal['nombre'] }}" required class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-2 focus:ring-amber-600 focus:border-amber-600">
        </div>
        <div>
            <label class="block text-emerald-800 font-medium mb-1">Especie:</label>
            <input type="text" name="especie" value="{{ $animal['especie'] }}" required class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-2 focus:ring-amber-600 focus:border-amber-600">
        </div>
        
        <div class="flex justify-end pt-4 items-center">
            <a href="{{ route('animales.index') }}" class="mr-4 text-gray-500 hover:text-gray-700 font-medium">Cancelar</a>
            <button type="submit" class="bg-amber-700 hover:bg-amber-800 text-white font-bold py-2 px-6 rounded shadow transition duration-200">Actualizar</button>
        </div>
    </form>
</div>
@endsection