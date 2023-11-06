@extends('layouts.app')

@section('content')
    <h1>Registrar Producto</h1>
    <form method="POST" action="{{ route('producto.store') }}">
        @csrf
        <div class="form-group">
            <label for="nombre_pro">Nombre</label>
            <input type="text" name="nombre_pro" class="form-control" placeholder="Nombre del Producto">
        </div>
        <div class="form-group">
            <label for="precio_pro">Precio</label>
            <input type="text" name="precio_pro" class="form-control" placeholder="Precio del Producto">
        </div>
        <div class="form-group">
            <label for="cant_pro">Cantidad</label>
            <input type="text" name="cant_pro" class="form-control" placeholder="Cantidad del Producto">
        </div>
        <div class="form-group">
            <label for="id_cat_pro">Categoría</label>
            <select name="id_cat_pro" class="form-control">
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id_cat_pro }}">{{ $categoria->nombre_cat }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</section>
