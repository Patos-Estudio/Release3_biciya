<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginBici</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="{{ asset('style_login.css') }}" rel="stylesheet">
    <link href="{{ asset('style_upload.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swamp">
</head>
<body>
    <header class="regre">
        <button onclick="login2()" type="button" class="btn btn-success" id="regre">Regresar</button>
    </header>
    <form action="" method="post" id="form">
        <div class="form">
            <img id="imga"src="{{ asset('imagenes/login/img3.jpg') }}" alt="">
            <br>
            <h4>Parte delantera de la cédula</h4>
            <div class="container">
                <div class="wrapper">
                   <div class="image">
                      <img src="" alt="">
                   </div>
                   <div class="content">
                      <div class="icon">
                         <i class="fas fa-cloud-upload-alt"></i>
                      </div>
                      <div class="text">
                         ¡Aún no ha seleccionado un archivo!
                      </div>
                   </div>
                   <div class="cancel-btn">
                      <i class="fas fa-times"></i>
                   </div>
                   <div class="file-name">
                      nombre del archivo
                   </div>
                </div>
                <button onclick="defaultBtnActive()" class="custom-btn">Sube el archivo</button>
                <input id="default-btn" type="file" hidden accept=".jpg">
             </div>
             <br><br>
             <h4>Parte trasera de la cédula</h4>
             <div class="container">
                <div class="wrapper">
                   <div class="image">
                      <img src="" alt="">
                   </div>
                   <div class="content">
                      <div class="icon">
                         <i class="fas fa-cloud-upload-alt"></i>
                      </div>
                      <div class="text">
                        ¡Aún no ha seleccionado un archivo!
                      </div>
                   </div>
                   <div class="cancel-btn">
                      <i class="fas fa-times"></i>
                   </div>
                   <div class="file-name">
                      Nombre del archivo
                   </div>
                </div>
                <button onclick="defaultBtnActive()" class="custom-btn">Sube el archivo</button>
                <input id="default-btn" type="file" hidden>
             </div>
                <section class="area-subida"></section>
            </div>
            <br>
         <button onclick="acceso()" type="submit" class="regi">Acceder</button> <!-- NO envia al acceso-->
        </div>
    </form>
    
    <script src="loginscript.js"></script>
    <script src="bici.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>