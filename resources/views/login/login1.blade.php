<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginBici</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style_login.css">
    <link rel="stylesheet" href="loginscript.js">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swamp">
</head>
<body>
    <header class="regre">
        <button onclick="home()" type="button" class="btn btn-success" id="regre">Regresar</button>
    </header>
    <form action="" method="post" id="form">
        <div class="form">
            <img id="imga"src="{{ asset('imagenes/login/img4.jpg') }}" alt="">
            <div class="grupo">
                <input type="email" name="" id="email" required><span class="barra"></span>
                <label for="">Email</label>
            </div>
            <div class="grupo">
                <input type="password" name="" id="password" required><span class="barra" onfocusout="validar()"></span>
                <label for="">Contraseña</label>
            </div>
            <div class="accesos">
                <a href="https://accounts.google.com/login?hl=es" target="_blank">
                    <img src="{{ asset('imagenes/login/gmail_Logo.png') }}" alt="">
                </a>
                <a href="https://es-la.facebook.com/login/device-based/regular/login/" target="_blank">
                    <img src="{{ asset('imagenes/login/Facebook_logo.jpg') }}" alt="">
                </a>
            </div>

            <button onclick="acceso()" type="submit" class="regi">Iniciar sesión</button>

            
            <p>Si aún no tienes cuenta <a href="usuarios" style="text-decoration: none;">¡REGISTRATE!</a>.</p>

        </div>
    </form>


    <script src="{{ asset('bici.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> 
</body>
</html>