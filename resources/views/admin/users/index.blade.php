@extends('adminlte::page')

@section('title','Usuarios')

@section('content_header')
    <h1>
        Categorias
    </h1>
@stop

@section('content')
    <div>
        <h4>Usuarios
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-create-category">
                Crear
            </button>
        </h4>
        <table class="table table-striped" id="usuarios">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contraseña</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{$usuario->name}}</td>
                        <td>{{$usuario->email}}</td>
                        <td>{{$usuario->password}}</td>
                        <td>
                            @foreach ($usuario->roles as $rol)
                                {{ $rol->name }}<br>
                            @endforeach
                        </td>
                        <td>
                            <a href="{{route('usuarios.edit', $usuario->id)}}" class="btn btn-primary">Editar</a>
                            <form action="{{route('usuarios.destroy', $usuario->id)}}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('usuarios.pdf') }}" class="btn btn-primary">Generar PDF</a>
        <br>
        <br>        
    </div>
    <!-- modal -->
    <div class="modal fade" id="modal-create-category">
        <div class="modal-dialog">
            <div class="modal-content bg-default">
                <div class="modal-header">
                    <h4 class="modal-title">Crear Usuario</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>
                <form action="{{ route('usuarios.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" name="password" class="form-control" id="password">
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
    </div>
    <!-- modal -->
    
@stop

@section('js')
    <script>
        $(document).ready(function() {
            $('#usuarios').DataTable({
                "order": [[ 3, "desc" ]]
            });
        });
    </script>
@stop
