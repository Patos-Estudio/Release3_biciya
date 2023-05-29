@extends('adminlte::page')

@section('title', 'Editar Estación')

@section('content_header')
    <h1>Editar Estación</h1>
@stop

@section('content')
    <form action="{{ route('estaciones.update', $estacion->id) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- Agrega los campos del formulario para editar los datos de la estación -->

        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" value="{{ $estacion->nombre }}" required>
        </div>

        <div class="form-group">
            <label for="ubicacion">Ubicación:</label>
            <input type="text" name="ubicacion" value="{{ $estacion->ubicacion }}" required>
        </div>

        <div class="form-group">
            <label for="estado">Estado:</label>
            <input type="text" name="estado" value="{{ $estacion->estado }}" required>
        </div>

        <!-- Otros campos del formulario -->
        <div class="modal-footer justify-content-between">
            <a href="{{ route('estaciones.index') }}" class="btn btn-outline-light">Cerrar</a>
            <button type="submit" class="btn btn-outline-primary">Guardar</button>
        </div>
    </form>
@stop
