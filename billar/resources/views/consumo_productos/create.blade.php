@extends('layouts.app')

@section('content')
    <h1>Registrar Consumo de Productos</h1>
    <form method="POST" action="{{ route('consumo_productos.store') }}">
        @csrf
        <div class="form-group">
            <label for="id_juego">ID de Juego</label>
            <input type="text" name="id_juego" class="form-control" placeholder="ID de Juego">
        </div>
        <div class="form-group">
            <label for="id_pro">ID de Producto</label>
            <input type="text" name="id_pro" class="form-control" placeholder="ID de Producto">
        </div>
        <div class="form-group">
            <label for="cant_consumo">Cantidad Consumida</label>
            <input type="text" name="cant_consumo" class="form-control" placeholder="Cantidad Consumida">
        </div>
        <div class="form-group">
            <label for="precio_pro">Precio del Producto</label>
            <input type="text" name="precio_pro" class="form-control" placeholder="Precio del Producto">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
