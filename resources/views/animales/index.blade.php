@extends('layouts.app')

@section('content')
    <h2>Lista de Animales</h2>
    <a href="{{ route('animales.create') }}">Añadir Nuevo Animal</a>
    
    <ul>
        @foreach($animales as $animal)
            <li>
                {{ $animal['nombre'] }} ({{ $animal['especie'] }})
                <a href="{{ route('animales.edit', $animal['id']) }}">Editar</a>
                
                <!-- El formulario de Eliminación debe incluir @method('DELETE') y protección @csrf[cite: 1]. -->
                <form action="{{ route('animales.destroy', $animal['id']) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection