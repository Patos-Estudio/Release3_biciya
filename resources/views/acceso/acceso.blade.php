<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body >
<header>
    <div class="logo">
        <img src="{{ asset('imagenes/acceso/logo.jpg') }}" alt="logo de la compañia" class="logo-img">
        <h2 class="nombre-empresa">Biciya</h2>
    </div>
    <div class="menu">
        @guest
            <a href="{{ route('login') }}" class="inicio" onclick="home()">
                <img src="{{ asset('imagenes/acceso/casita.png') }}" alt="casita para ir al inicio" class="inicio-img">
            </a>
        @else
            <div class="dropdown">
                <button class="dropbtn">
                    {{ Auth::user()->name }}
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        @endguest
    </div>
</header>

<section class="contenedor-historial" id="contenedor-historial">   
    <div class="content" id="nivel">
        <div class="content" id="numero"></div>
        <h4>Bienvenido...</h4>
        <img src="{{ asset('imagenes/acceso/perfil.png') }}" id="perfil">
        <h3 id="nivel">MI NIVEL:</h3>
        <h3 id="estado">ESTADO:</h3>
        <h2 id="ac">ACTIVO</h2>
    </div>
    <div id="fechas">
        <h3 id="texto">Mi historial:</h3>
        <input type="date" name="day" id="fechas">
        <input type="date" name="day" id="fechas2">
        <input type="date" name="day" id="fechas3">
        <input type="date" name="day" id="fechas4">
    </div>
<!-- Aca seria bueno como quitar el id y en el css poner .padre hijo{y aqui cambiar el color, ya que se acomodan solos}-->
    <div id="beneficios">
        <h3 id="beneficios">MIS BENEFICIOS:</h3>
        <p id="beneficio1">. padwwwwwwwwwwdawawawawawaddw</p>
        <p id="beneficio2">. padwwwwwwwwwwdawawawawawaddw</p>
        <p id="beneficio3">. padwwwwwwwwwwdawawawawawaddw</p>
        <p id="beneficio4">. padwwwwwwwwwwdawawawawawaddw</p>
    </div>
</section>    

<script src="js/mostrarAlerta.js"></script>
</body>
</html>
<!-- seria bueno saber como hacer que la pagina se acomode a la pantalla sola -->