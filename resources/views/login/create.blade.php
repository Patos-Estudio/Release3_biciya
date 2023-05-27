<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginBici</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="{{ asset('style_login.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swamp">
</head>
<body>
    <header class="regre">
        <button onclick="login_princi()" type="button" class="btn btn-success" id="regre">Regresar</button>
    </header>
    <form action="{{ route('usuarios.store') }}" method="POST"id="form">
        @csrf
        <div class="form">
            <img id="imga"src="{{ asset('imagenes/login/img1.jpg') }}" alt="">
            <div class="grupo">
                <input type="text" name="name" id="name"><span class="barra"></span>
                <label for="">Nombres</label>
            </div>
            <div class="grupo">
                <input type="text" name="ape" id="ape"><span class="barra"></span>
                <label for="">Apellidos</label>
            </div>
            <div class="grupo">
                <input type="number" name="cedula" id="cedula" ><span class="barra"></span>
                <label for="">Cédula</label>
            </div>
            <div class="grupo">
                <input type="email" name="email" id="email" ><span class="barra"></span>
                <label for="">Email</label>
            </div>
            <div class="grupo">
                <input type="password" name="password" id="password" ><span class="barra" onfocusout="validar()"></span>
                <label for="">Contraseña</label>
            </div>
            <div class="grupo">
                <input type="password" name="" id="password1" ><span class="barra" onfocusout="validar()"></span>
                <label for="">Verificar contraseña</label>
            </div>
            <button type="submit" class="regi">Continuar</button>
            <p class="warnings" id="warnings"></p>
        </div>
    </form>
    <script src="{{ asset('bici.js') }}"></script>
    <script src="{{ asset('validar.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>