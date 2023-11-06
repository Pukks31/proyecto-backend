@extends('layouts.app')

@section('content')
    <h1>Crear Nueva Categoría de Productos</h1>
    <form method="POST" action="{{ route('categorias_pro.store') }}">
        @csrf
        <div class="form-group">
            <label for="nombre_cat">Nombre de la Categoría</label>
            <input type="text" name="nombre_cat" class="form-control" placeholder="Nombre de la Categoría">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
