@extends('layouts.app')

@section('content')
    <h1>Detalles de Categoría de Productos</h1>
    <p>ID: {{ $categoria_pro->id_cat_pro }}</p>
    <p>Nombre: {{ $categoria_pro->nombre_cat }}</p>
    <a href="{{ route('categorias_pro.index') }}" class="btn btn-primary">Volver</a>
@endsection
