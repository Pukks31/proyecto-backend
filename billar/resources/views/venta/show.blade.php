@extends('layouts.app')

@section('content')
    <h1>Detalles de la Venta</h1>
    <p>ID de Venta: {{ $venta->id_venta }}</p>
    <p>ID de Juego: {{ $venta->id_juego }}</p>
    <p>Total de Consumo de Productos: {{ $venta->total_consumo_pro }}</p>
    <p>Total de Venta: {{ $venta->total_venta }}</p>
    <a href="{{ route('venta.index') }}" class="btn btn-primary">Volver</a>
</section>
