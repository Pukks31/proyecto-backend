@extends('layouts.app')

@section('content')
    <h1>Editar Venta</h1>
    <form method="POST" action="{{ route('venta.update', $venta->id_venta) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id_juego">ID de Juego</label>
            <input type="text" name="id_juego" class="form-control" value="{{ $venta->id_juego }}">
        </div>
        <div class="form-group">
            <label for="total_consumo_pro">Total de Consumo de Productos</label>
            <input type="text" name="total_consumo_pro" class="form-control" value="{{ $venta->total_consumo_pro }}">
        </div>
        <div class="form-group">
            <label for="total_venta">Total de Venta</label>
            <input type="text" name="total_venta" class="form-control" value="{{ $venta->total_venta }}">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</section>
