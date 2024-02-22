@extends('layouts.app')

@section('content')
    <h1>Detalles del Producto</h1>
    <p>Nombre: {{ $producto->nombre }}</p>
    <p>Precio: {{ $producto->precio }}</p>
    <!-- Otros detalles del producto -->
@endsection
