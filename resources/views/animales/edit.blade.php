@extends('layouts.app')

@section('content')
    <h2>Editar Animal</h2>
    <!-- El formulario de Edición debe incluir explícitamente @method('PUT') y protección @csrf[cite: 1]. -->
    <form action="{{ route('animales.update', $animal['id']) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nombre:</label>
        <input type="text" name="nombre" value="{{ $animal['nombre'] }}" required>
        <label>Especie:</label>
        <input type="text" name="especie" value="{{ $animal['especie'] }}" required>
        <button type="submit">Actualizar</button>
    </form>
@endsection