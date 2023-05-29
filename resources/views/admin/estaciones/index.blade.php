@extends('adminlte::page')

@section('title','Estaciones')

@section('content_header')
    <h1>
        Categorias
    </h1>
@stop

@section('content')
    <div>
        <h4>Estaciones
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-create-estacion">
                Crear
            </button>
        </h4>
        <table class="table table-striped" id="estaciones"> <!-- Agrega el atributo id="estaciones" a la tabla -->
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Ubicación</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($estaciones as $estacion)
                    <tr>
                        <td>{{$estacion->id}}</td>
                        <td>{{$estacion->nombre}}</td>
                        <td>{{$estacion->ubicacion}}</td>
                        <td>{{$estacion->estado}}</td>
                        <td>
                            <a href="{{route('estaciones.edit', $estacion->id)}}" class="btn btn-primary">Editar</a>
                            <form action="{{route('estaciones.destroy', $estacion->id)}}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
       
    </div>
    <!-- modal -->
    <div class="modal fade" id="modal-create-estacion">
        <div class="modal-dialog">
            <div class="modal-content bg-default">
                <div class="modal-header">
                    <h4 class="modal-title">Crear Estación</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>
                <form action="{{ route('estaciones.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="id">Id</label>
                            <input type="number" name="id" class="form-control" id="id">
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" class="form-control" id="nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="ubicacion">Ubicación</label>
                            <input type="text" name="ubicacion" class="form-control" id="ubicacion" required>
                        </div>
                        <div class="form-group">
                            <label for="estado">Estado</label>
                            <input type="text" name="estado" class="form-control" id="estado" required>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-outline-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script>
        $(document).ready(function() {
            $('#estaciones').DataTable({
                "order": [[ 3, "desc" ]]
            });
        });
    </script>
@stop
