@extends('layouts.app')

@section('content')
    <h1>Registrar Usuario</h1>
    <form method="POST" action="{{ route('usuario.store') }}">
        @csrf
        <div class="form-group">
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" class="form-control" placeholder="Nombre de Usuario">
        </div>
        <div class="form-group">
            <label for="contraseña_usu">Contraseña</label>
            <input type="password" name="contraseña_usu" class="form-control" placeholder="Contraseña">
        </div>
        <div class="form-group">
            <label for="rol_usu">Rol</label>
            <input type="text" name="rol_usu" class="form-control" placeholder="Rol de Usuario">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</section>
