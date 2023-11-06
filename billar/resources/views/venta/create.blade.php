@extends('layouts.app')

@section('content')
    <h1>Registrar Venta</h1>
    <form method="POST" action="{{ route('venta.store') }}">
        @csrf
        <div class="form-group">
            <label for="id_juego">ID de Juego</label>
            <input type="text" name="id_juego" class="form-control" placeholder="ID de Juego">
        </div>
        <div class="form-group">
            <label for="total_consumo_pro">Total de Consumo de Productos</label>
            <input type="text" name="total_consumo_pro" class="form-control" placeholder="Total de Consumo de Productos">
        </div>
        <div class="form-group">
            <label for="total_venta">Total de Venta</label>
            <input type="text" name="total_venta" class="form-control" placeholder="Total de Venta">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</section>
