@extends('layouts.app')

@section('content')
    <h1>Consumo de Productos</h1>
    <a href="{{ route('consumo_productos.create') }}" class="btn btn-success">Registrar Consumo</a>
    @if (count($consumo_productos) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ID de Juego</th>
                    <th>ID de Producto</th>
                    <th>Cantidad Consumida</th>
                    <th>Precio del Producto</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($consumo_productos as $consumo)
                    <tr>
                        <td>{{ $consumo->id_consumo }}</td>
                        <td>{{ $consumo->id_juego }}</td>
                        <td>{{ $consumo->id_pro }}</td>
                        <td>{{ $consumo->cant_consumo }}</td>
                        <td>{{ $consumo->precio_pro }}</td>
                        <td>
                            <a href="{{ route('consumo_productos.show', $consumo->id_consumo) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('consumo_productos.edit', $consumo->id_consumo) }}" class="btn btn-primary">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay registros de consumo disponibles.</p>
    @endif
@endsection
