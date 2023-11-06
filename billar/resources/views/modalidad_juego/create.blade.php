@extends('layouts.app')

@section('content')
    <h1>Registrar Modalidad de Juego</h1>
    <form method="POST" action="{{ route('modalidad_juego.store') }}">
        @csrf
        <div class="form-group">
            <label for="nombre_mod">Nombre</label>
            <input type="text" name="nombre_mod" class="form-control" placeholder="Nombre de la Modalidad">
        </div>
        <div class="form-group">
            <label for="precio_mod">Precio</label>
            <input type="text" name="precio_mod" class="form-control" placeholder="Precio de la Modalidad">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
