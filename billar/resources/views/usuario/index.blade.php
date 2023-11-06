@extends('layouts.app')

@section('content')
    <h1>Usuarios</h1>
    <a href="{{ route('usuario.create') }}" class="btn btn-success">Registrar Usuario</a>
    @if (count($usuarios) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>ID de Usuario</th>
                    <th>Usuario</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->id_usuario }}</td>
                        <td>{{ $usuario->usuario }}</td>
                        <td>{{ $usuario->rol_usu }}</td>
                        <td>
                            <a href="{{ route('usuario.show', $usuario->id_usuario) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('usuario.edit', $usuario->id_usuario) }}" class="btn btn-primary">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay registros de usuarios disponibles.</p>
    @endif
@endsection
