@extends('layouts.app')

@section('content')
    <h1>Productos</h1>
    <a href="{{ route('producto.create') }}" class="btn btn-success">Registrar Producto</a>
    @if (count($productos) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>ID de Producto</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Categoría</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                    <tr>
                        <td>{{ $producto->id_pro }}</td>
                        <td>{{ $producto->nombre_pro }}</td>
                        <td>{{ $producto->precio_pro }}</td>
                        <td>{{ $producto->cant_pro }}</td>
                        <td>{{ $producto->categoria->nombre_cat }}</td>
                        <td>
                            <a href="{{ route('producto.show', $producto->id_pro) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('producto.edit', $producto->id_pro) }}" class="btn btn-primary">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay registros de productos disponibles.</p>
    @endif
@endsection
