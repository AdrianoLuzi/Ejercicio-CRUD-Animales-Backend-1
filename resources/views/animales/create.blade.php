@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto bg-white rounded-lg shadow p-8 border-t-4 border-emerald-600">
    <h2 class="text-2xl font-semibold text-emerald-800 mb-6">Registrar Animal</h2>
    
    <form action="{{ route('animales.store') }}" method="POST" class="space-y-5">
        @csrf
        <div>
            <label class="block text-amber-900 font-medium mb-1">Nombre:</label>
            <input type="text" name="nombre" required class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500">
        </div>
        <div>
            <label class="block text-amber-900 font-medium mb-1">Especie:</label>
            <input type="text" name="especie" required class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500">
        </div>
        
        <div class="flex justify-end pt-4 items-center">
            <a href="{{ route('animales.index') }}" class="mr-4 text-gray-500 hover:text-gray-700 font-medium">Cancelar</a>
            <button type="submit" class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-2 px-6 rounded shadow transition duration-200">Guardar</button>
        </div>
    </form>
</div>
@endsection