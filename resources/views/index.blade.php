@extends('layouts.app')

@section('content')

    <h1>Lista de Variables</h1>
    <ul>
        @foreach($__data as $name => $value)
            <li>{{ $name }}</li>
        @endforeach
    </ul>

    <h1>Lista de Productos</h1>
    <ul>
        @foreach($productos as $producto)
            <li>{{ $producto->nombre }} - {{ $producto->precio }}</li>
        @endforeach
    </ul>
@endsection
