@extends('layouts.app')

@section('content')
    <h1>Detalles del Producto</h1>
    <p>ID de Producto: {{ $producto->id_pro }}</p>
    <p>Nombre: {{ $producto->nombre_pro }}</p>
    <p>Precio: {{ $producto->precio_pro }}</p>
    <p>Cantidad: {{ $producto->cant_pro }}</p>
    <p>Categoría: {{ $producto->categoria->nombre_cat }}</p>
    <a href="{{ route('producto.index') }}" class="btn btn-primary">Volver</a>
</section>
