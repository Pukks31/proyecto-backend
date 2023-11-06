@extends('layouts.app')

@section('content')
    <h1>Detalles de la Modalidad de Juego</h1>
    <p>ID de Modalidad: {{ $modalidad->id_modalidad }}</p>
    <p>Nombre: {{ $modalidad->nombre_mod }}</p>
    <p>Precio: {{ $modalidad->precio_mod }}</p>
    <a href="{{ route('modalidad_juego.index') }}" class="btn btn-primary">Volver</a>
@endsection
