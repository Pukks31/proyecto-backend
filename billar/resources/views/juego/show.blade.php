@extends('layouts.app')

@section('content')
    <h1>Detalles del Juego</h1>
    <p>ID: {{ $juego->id_juego }}</p>
    <p>ID de Usuario: {{ $juego->id_usuario }}</p>
    <p>Hora de Inicio: {{ $juego->hora_inicio_juego }}</p>
    <p>Hora de Finalización: {{ $juego->hora_fin_juego }}</p>
    <p>ID de Modalidad: {{ $juego->id_modalidad }}</p>
    <p>Precio del Juego: {{ $juego->precio_juego }}</p>
    <a href="{{ route('juego.index') }}" class="btn btn-primary">Volver</a>
@endsection
