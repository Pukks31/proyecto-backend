@extends('layouts.app')

@section('content')
    <h1>Ventas</h1>
    <a href="{{ route('venta.create') }}" class="btn btn-success">Registrar Venta</a>
    @if (count($ventas) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>ID de Venta</th>
                    <th>ID de Juego</th>
                    <th>Total de Consumo de Productos</th>
                    <th>Total de Venta</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ventas as $venta)
                    <tr>
                        <td>{{ $venta->id_venta }}</td>
                        <td>{{ $venta->id_juego }}</td>
                        <td>{{ $venta->total_consumo_pro }}</td>
                        <td>{{ $venta->total_venta }}</td>
                        <td>
                            <a href="{{ route('venta.show', $venta->id_venta) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('venta.edit', $venta->id_venta) }}" class="btn btn-primary">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay registros de ventas disponibles.</p>
    @endif
@endsection
