@extends('layouts.app')

@section('content')
    <h1>Modalidades de Juego</h1>
    <a href="{{ route('modalidad_juego.create') }}" class="btn btn-success">Registrar Modalidad de Juego</a>
    @if (count($modalidades) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>ID de Modalidad</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($modalidades as $modalidad)
                    <tr>
                        <td>{{ $modalidad->id_modalidad }}</td>
                        <td>{{ $modalidad->nombre_mod }}</td>
                        <td>{{ $modalidad->precio_mod }}</td>
                        <td>
                            <a href="{{ route('modalidad_juego.show', $modalidad->id_modalidad) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('modalidad_juego.edit', $modalidad->id_modalidad) }}" class="btn btn-primary">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay registros de modalidades de juego disponibles.</p>
    @endif
@endsection
