@extends('layouts.app')

@section('content')
    <h1>Editar Modalidad de Juego</h1>
    <form method="POST" action="{{ route('modalidad_juego.update', $modalidad->id_modalidad) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre_mod">Nombre</label>
            <input type="text" name="nombre_mod" class="form-control" value="{{ $modalidad->nombre_mod }}">
        </div>
        <div class="form-group">
            <label for="precio_mod">Precio</label>
            <input type="text" name="precio_mod" class="form-control" value="{{ $modalidad->precio_mod }}">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection
