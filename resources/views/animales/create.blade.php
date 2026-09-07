@extends('layouts.app')

@section('content')
    <h2>Añadir Animal</h2>
    <!-- Incluir protección @csrf en envíos de datos[cite: 1]. -->
    <form action="{{ route('animales.store') }}" method="POST">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="nombre" required>
        <label>Especie:</label>
        <input type="text" name="especie" required>
        <button type="submit">Guardar</button>
    </form>
@endsection