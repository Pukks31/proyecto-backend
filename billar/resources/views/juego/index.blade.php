@extends('layouts.app')

@section('content')
    <h1>Juegos</h1>
    <a href="{{ route('juego.create') }}" class="btn btn-success">Registrar Juego</a>
    @if (count($juegos) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ID de Usuario</th>
                    <th>Hora de Inicio</th>
                    <th>Hora de Finalización</th>
                    <th>ID de Modalidad</th>
                    <th>Precio del Juego</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($juegos as $juego)
                    <tr>
                        <td>{{ $juego->id_juego }}</td>
                        <td>{{ $juego->id_usuario }}</td>
                        <td>{{ $juego->hora_inicio_juego }}</td>
                        <td>{{ $juego->hora_fin_juego }}</td>
                        <td>{{ $juego->id_modalidad }}</td>
                        <td>{{ $juego->precio_juego }}</td>
                        <td>
                            <a href="{{ route('juego.show', $juego->id_juego) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('juego.edit', $juego->id_juego) }}" class="btn btn-primary">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay registros de juegos disponibles.</p>
    @endif
@endsection
