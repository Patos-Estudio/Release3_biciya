<!DOCTYPE html>
<html>
<head>
    <style>
        /* Estilos CSS para el PDF */
    </style>
</head>
<body>
    <h1>Lista de Estaciones</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Ubicación</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($estaciones as $estacion)
                <tr>
                    <td>{{ $estacion->id }}</td>
                    <td>{{ $estacion->nombre }}</td>
                    <td>{{ $estacion->ubicacion }}</td>
                    <td>{{ $estacion->estado }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
