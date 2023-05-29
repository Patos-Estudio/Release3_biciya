@extends('adminlte::page')

@section('title', 'Editar Bicicletas')

@section('content_header')
    <h1>Editar Bicicleta</h1>
@stop

@section('content')
    <form action="{{ route('bicycles.update', $bicycle->id) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- Agrega los campos del formulario para editar los datos del usuario -->

        <label for="nombre">Estado:</label>
        <input type="text" name="estado" value="{{ $bicycle->estado }}" required>

        <label for="email">Tipo:</label>
        <input type="text" name="tipo" value="{{ $bicycle->tipo }}" required>


        <!-- Otros campos del formulario -->
        <div class="modal-footer justify-content-between">
            <a href="{{ route('bicycles.index') }}" class="btn btn-outline-light">Cerrar</a>
            <button type="submit" class="btn btn-outline-primary">Guardar</button>
        </div>
    </form>
@stop