@extends('layouts.app')

@section('content')
    <h1>Crear Nuevo Producto</h1>
    <form action="{{ route('productos.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">
        <!-- Otros campos del formulario -->
        <button type="submit">Guardar</button>
    </form>
@endsection
