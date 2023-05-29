@extends('adminlte::page')

@section('title', 'Editar Usuario')

@section('content_header')
    <h1>Editar Usuario</h1>
@stop

@section('content')
    <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" name="nombre" value="{{ $usuario->nombre }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" value="{{ $usuario->email }}" required>
        </div>

        <div class="form-group">
            <label>Rol:</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="rol_admin" value="admin" {{ $usuario->hasRole('admin') ? 'checked' : '' }}>
                <label class="form-check-label">Admin</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="rol_usuario" value="usuario" {{ $usuario->hasRole('usuario') ? 'checked' : '' }}>
                <label class="form-check-label">Usuario</label>
            </div>
        </div>

        <div class="modal-footer justify-content-between">
            <a href="{{ route('usuarios.index') }}" class="btn btn-outline-light">Cerrar</a>
            <button type="submit" class="btn btn-outline-primary">Guardar</button>
        </div>
    </form>
@stop
