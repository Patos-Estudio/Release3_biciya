@extends('adminlte::page')

@section('title', 'Editar Usuario')

@section('content_header')
    <h1>Editar Usuario</h1>
@stop

@section('content')
    <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- Agrega los campos del formulario para editar los datos del usuario -->
        <label for="nombre">name:</label>
        <input type="text" name="nombre" value="{{ $usuario->nombre }}" required>

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ $usuario->email }}" required>


        <!-- Otros campos del formulario -->
        <div class="modal-footer justify-content-between">
            <a href="{{ route('usuarios.index') }}" class="btn btn-outline-light">Cerrar</a>
            <button type="submit" class="btn btn-outline-primary">Guardar</button>
        </div>
    </form>
@stop