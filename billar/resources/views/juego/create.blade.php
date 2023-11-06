@extends('layouts.app')

@section('content')
    <h1>Registrar Juego</h1>
    <form method="POST" action="{{ route('juego.store') }}">
        @csrf
        <div class="form-group">
            <label for="id_usuario">ID de Usuario</label>
            <input type="text" name="id_usuario" class="form-control" placeholder="ID de Usuario">
        </div>
        <div class="form-group">
            <label for="hora_inicio_juego">Hora de Inicio</label>
            <input type="text" name="hora_inicio_juego" class="form-control" placeholder="Hora de Inicio">
        </div>
        <div class="form-group">
            <label for="hora_fin_juego">Hora de Finalización</label>
            <input type="text" name="hora_fin_juego" class="form-control" placeholder="Hora de Finalización">
        </div>
        <div class="form-group">
            <label for="id_modalidad">ID de Modalidad</label>
            <input type="text" name="id_modalidad" class="form-control" placeholder="ID de Modalidad">
        </div>
        <div class="form-group">
            <label for="precio_juego">Precio del Juego</label>
            <input type="text" name="precio_juego" class="form-control" placeholder="Precio del Juego">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
