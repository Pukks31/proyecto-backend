@extends('layouts.app')

@section('content')
    <h1>Editar Categoría de Productos</h1>
    <form method="POST" action="{{ route('categorias_pro.update', $categoria_pro->id_cat_pro) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre_cat">Nombre de la Categoría</label>
            <input type="text" name="nombre_cat" class="form-control" value="{{ $categoria_pro->nombre_cat }}">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection
