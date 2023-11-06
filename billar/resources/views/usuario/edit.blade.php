@extends('layouts.app')

@section('content')
    <h1>Editar Usuario</h1>
    <form method="POST" action="{{ route('usuario.update', $usuario->id_usuario) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" class="form-control" value="{{ $usuario->usuario }}">
        </div>
        <div class="form-group">
            <label for="contraseña_usu">Contraseña</label>
            <input type="password" name="contraseña_usu" class="form-control" value="{{ $usuario->contraseña_usu }}">
        </div>
        <div class="form-group">
            <label for="rol_usu">Rol</label>
            <input type="text" name="rol_usu" class="form-control" value="{{ $usuario->rol_usu }}">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</section>
