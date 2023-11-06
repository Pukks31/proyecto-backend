@extends('layouts.app')

@section('content')
    <h1>Categorías de Productos</h1>
    <a href="{{ route('categorias_pro.create') }}" class="btn btn-success">Crear Nueva Categoría</a>
    @if (count($categorias_pro) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorias_pro as $categoria_pro)
                    <tr>
                        <td>{{ $categoria_pro->id_cat_pro }}</td>
                        <td>{{ $categoria_pro->nombre_cat }}</td>
                        <td>
                            <a href="{{ route('categorias_pro.show', $categoria_pro->id_cat_pro) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('categorias_pro.edit', $categoria_pro->id_cat_pro) }}" class="btn btn-primary">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay categorías de productos disponibles.</p>
    @endif
@endsection
