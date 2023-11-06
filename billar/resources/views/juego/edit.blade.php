@extends('layouts.app')

@section('content')
    <h1>Editar Juego</h1>
    <form method="POST" action="{{ route('juego.update', $juego->id_juego) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id_usuario">ID de Usuario</label>
            <input type="text" name="id_usuario" class="form-control" value="{{ $juego->id_usuario }}">
        </div>
        <div class="form-group">
            <label for="hora_inicio_juego">Hora de Inicio</label>
            <input type="text" name="hora_inicio_juego" class="form-control" value="{{ $juego->hora_inicio_juego }}">
        </div>
        <div class="form-group">
            <label for="hora_fin_juego">Hora de Finalización</label>
            <input type="text" name="hora_fin_juego" class="form-control" value="{{ $juego->hora_fin_juego }}">
        </div>
        <div class="form-group">
            <label for="id_modalidad">ID de Modalidad</label>
            <input type="text" name="id_modalidad" class="form-control" value="{{ $juego->id_modalidad }}">
        </div>
        <div class="form-group">
            <label for="precio_juego">Precio del Juego</label>
            <input type="text" name="precio_juego" class="form-control" value="{{ $juego->precio_juego }}">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection
