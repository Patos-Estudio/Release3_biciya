@extends('adminlte::page')

@section('title','Bicycles')

@section('content_header')
    <h1>
        Categorias
    </h1>
@stop

@section('content')
    <div>
        <h4>Bicicletas
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-create-bicycle">
                Crear
            </button>
        </h4>
        <table class="table table-striped" id="bicicletas">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bicycles as $bicycle)
                    <tr>
                        <td>{{$bicycle->id}}</td>
                        <td>{{$bicycle->estado}}</td>
                        <td>{{$bicycle->tipo}}</td>
                        <td>
                            <a href="{{route('bicycles.edit', $bicycle->id)}}" class="btn btn-primary">Editar</a>
                            <form action="{{route('bicycles.destroy', $bicycle->id)}}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('bicycles.pdf') }}" class="btn btn-primary">Generar PDF</a>
    </div>
    <a href="{{ route('bicycles.grafica') }}">Grafica Bicicletas</a>
    
    <!-- modal -->
    <div class="modal fade" id="modal-create-bicycle">
        <div class="modal-dialog">
            <div class="modal-content bg-default">
                <div class="modal-header">
                    <h4 class="modal-title">Crear Bicicleta</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>
                <form action="{{ route('bicycles.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="id">Id</label>
                            <input type="number" name="id" class="form-control" id="id">
                        </div>
                        <div class="form-group">
                            <label for="estado">Estado</label>
                            <input type="text" name="estado" class="form-control" id="estado" required>
                        </div>
                        <div class="form-group">
                            <label for="tipo">Tipo</label>
                            <input type="text" name="tipo" class="form-control" id="tipo">
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
            $('#bicicletas').DataTable({
                "order": [[ 3, "desc" ]]
            });
        });
    </script>
@stop
