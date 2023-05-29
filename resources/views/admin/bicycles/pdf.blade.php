<!DOCTYPE html>
<html>
<head>
    <style>
        /* Estilos CSS para el PDF */
    </style>
</head>
<body>
    <h1>Lista de Bicicletas</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Estado</th>
                <th>Tipo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bicycles as $bicycle)
                <tr>
                    <td>{{$bicycle->id}}</td>
                    <td>{{$bicycle->estado}}</td>
                    <td>{{$bicycle->tipo}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>