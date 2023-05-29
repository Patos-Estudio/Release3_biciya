<!DOCTYPE html>
<html>
<head>
    <style>
        /* Estilos CSS para el PDF */
    </style>
</head>
<body>
    <h1>Listado de Usuarios</h1>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Contraseña</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{$usuario->name}}</td>
                    {{-- <td>{{$usuario->ape}}</td>
                    <td>{{$usuario->cedula}}</td> --}}
                    <td>{{$usuario->email}}</td>
                    <td>{{$usuario->password}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
