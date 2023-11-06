@extends('layouts.app')

@section('content')
    <h1>Detalles del Usuario</h1>
    <p>ID de Usuario: {{ $usuario->id_usuario }}</p>
    <p>Usuario: {{ $usuario->usuario }}</p>
    <p>Rol: {{ $usuario->rol_usu }}</p>
    <a href="{{ route('usuario.index') }}" class="btn btn-primary">Volver</a>
</section>
