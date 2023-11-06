@extends('layouts.app')

@section('content')
    <h1>Editar Consumo de Productos</h1>
    <form method="POST" action="{{ route('consumo_productos.update', $consumo_producto->id_consumo) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id_juego">ID de Juego</label>
            <input type="text" name="id_juego" class="form-control" value="{{ $consumo_producto->id_juego }}">
        </div>
        <div class="form-group">
            <label for="id_pro">ID de Producto</label>
            <input type="text" name="id_pro" class="form-control" value="{{ $consumo_producto->id_pro }}">
        </div>
        <div class="form-group">
            <label for="cant_consumo">Cantidad Consumida</label>
            <input type="text" name="cant_consumo" class="form-control" value="{{ $consumo_producto->cant_consumo }}">
        </div>
        <div class="form-group">
            <label for="precio_pro">Precio del Producto</label>
            <input type="text" name="precio_pro" class="form-control" value="{{ $consumo_producto->precio_pro }}">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection
