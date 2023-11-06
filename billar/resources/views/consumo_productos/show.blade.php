@extends('layouts.app')

@section('content')
    <h1>Detalles del Consumo de Productos</h1>
    <p>ID: {{ $consumo_producto->id_consumo }}</p>
    <p>ID de Juego: {{ $consumo_producto->id_juego }}</p>
    <p>ID de Producto: {{ $consumo_producto->id_pro }}</p>
    <p>Cantidad Consumida: {{ $consumo_producto->cant_consumo }}</p>
    <p>Precio del Producto: {{ $consumo_producto->precio_pro }}</p>
    <a href="{{ route('consumo_productos.index') }}" class="btn btn-primary">Volver</a>
@endsection
