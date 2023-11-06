@extends('layouts.app')

@section('content')
    <h1>Editar Producto</h1>
    <form method="POST" action="{{ route('producto.update', $producto->id_pro) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre_pro">Nombre</label>
            <input type="text" name="nombre_pro" class="form-control" value="{{ $producto->nombre_pro }}">
        </div>
        <div class="form-group">
            <label for="precio_pro">Precio</label>
            <input type="text" name="precio_pro" class="form-control" value="{{ $producto->precio_pro }}">
        </div>
        <div class="form-group">
            <label for="cant_pro">Cantidad</label>
            <input type="text" name="cant_pro" class="form-control" value="{{ $producto->cant_pro }}">
        </div>
        <div class="form-group">
            <label for="id_cat_pro">Categoría</label>
            <select name="id_cat_pro" class="form-control">
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id_cat_pro }}" {{ $categoria->id_cat_pro == $producto->id_cat_pro ? 'selected' : '' }}>
                        {{ $categoria->nombre_cat }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</section>
