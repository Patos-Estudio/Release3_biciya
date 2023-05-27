<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BiciManizales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="{{ asset('style_bici.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ff337f31f7.js" crossorigin="anonymous"></script>
    <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            #map {
	            height: 500px;
	            width: 40%;
            }
        </style>
</head>
<body>
    <header>
        <a href="#" class="logo">
            <img src="{{ asset('imagenes/inicio/logo.jpg') }}" alt="logo de la compañia" class="logo-img">
            <h2 class="nombre-empresa">Biciya</h2>
        </a>
        <nav>
            <ul>
                <li><a href="#" class="nav-link">Inicio</a></li>
                <li><a href="#" class="nav-link">Contacto</a></li>
                {{-- <li><a href="{{route('login')}}">Acceder</a> --}}
                <li><a href="{{route('login')}}" id="boton" class="btn btn-warning">Acceder</a>
            </ul>       
        </nav>
    </header>

    <section class="container">
        <div class="slider-wrapper">
            <div class="slider">
                <img id="slider1"src="{{ asset('imagenes/inicio/img1.jpg') }}" alt="">
                <img id="slider1"src="{{ asset('imagenes/inicio/img2.jpg') }}" alt="">
                <img id="slider1"src="{{ asset('imagenes/inicio/img3.jpg') }}" alt="">
                <img id="slider1"src="{{ asset('imagenes/inicio/img4.jpg') }}" alt="">
            </div>
            <div class="slider-nav">
                <a href="#slider1" class=""></a>
                <a href="#slider2" class=""></a>
                <a href="#slider3" class=""></a>
                <a href="#slider4" class=""></a>
            </div>
        </div>
    </section>


    <section class="contenedor-conocenos">
        <div class="contenedor-nosotros">
        <script>
            function iniciarMap(){
                var coord = {lat: 5.067346479093432 ,lng: -75.51139162328708};
                var coord2 = {lat: 5.055558 ,lng: -75.491033};
                var coord3 = {lat: 5.074685 ,lng: -75.527674};
                var coord4 = {lat: 5.065067 ,lng: -75.499467};
                var coord5 = {lat: 5.064034 ,lng: -75.496672};
                var coord6 = {lat: 5.048370 ,lng: -75.483051};
                var coord7 = {lat: 5.056076 ,lng: -75.486315};
                var coord8 = {lat: 5.069967 ,lng: -75.518437};
                var coord9 = {lat: 5.067238 ,lng: -75.524370};
                var map = new google.maps.Map(document.getElementById('map'),{
                    zoom: 14.5,
                    center: coord5
            });
            var marker = new google.maps.Marker({
                    position: coord,
                    map: map
            });
            var marker = new google.maps.Marker({
                    position: coord2,
                    map: map
            });
            var marker = new google.maps.Marker({
                    position: coord3,
                    map: map
            });
            var marker = new google.maps.Marker({
                    position: coord4,
                    map: map
            });
            var marker = new google.maps.Marker({
                    position: coord5,
                    map: map
            });
            var marker = new google.maps.Marker({
                    position: coord6,
                    map: map
            });
            var marker = new google.maps.Marker({
                    position: coord7,
                    map: map
            });
            var marker = new google.maps.Marker({
                    position: coord8,
                    map: map
            });
            var marker = new google.maps.Marker({
                    position: coord9,
                    map: map
            });
}
        </script>
        <div id="map">
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script>
</div>
            <div class="textos">
                <h1 class="titulo">Conocenos</h1>
                <p>Somos un servicio  brindado por la alcaldia de Manizales para dar un medio de transporte
                    sostenible y asi mejorar la movilidad local.
                </p>
                <p>En este mapa puedes encontrar los puntos en donde nos ubicamos.</p>
            </div>
        </div>
    </section>

    <section class="contenedor-sobre">
        <div class="contenedor-nosotros">
            <div class="textos">
                <h1 class="titulo">Sobre nuestros servicios
                </h1>
                <p>
                    Ofrecemos un servicio de prestamo de bicicletas orientado a los ciudadanos
                    de cualquier edad que deseen movilizarce de un punto a otro. Contamos con 
                    diferentes estaciones a lo largo de toda la ciudad para asegurarnos que la 
                    mayor parte de la poblacion pueda tener su bicicleta disponible, ademas 
                    contamos con muchas unidades en cada estación y diferentes tipos de bicicletas
                    para las personas con beneficios.
                </p>
            </div>
            <img src="{{ asset('imagenes/inicio/imag2.jpg') }}" alt="" class="imagen-conocenos">
        </div>
    </section>

    <section class="contenedor-novedades">
        <div class="contenedor-nosotros">
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('imagenes/inicio/not4.jpg') }}" class="d-block w-70" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Una ciudad al futuro</h5>
                      <p>Conozca los proyectos que actualmente se encuentran en marcha en la ciudad.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('imagenes/inicio/not5.jpg') }}" class="d-block w-70" alt="">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Manizales: Ciudad universitaria</h5>
                      <p>Manizales es la ciudad conocida como la ciudad universitaria con alrededor de 50.000 Estudiantes.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('imagenes/inicio/not6.jpg') }}" class="d-block w-70" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Manizales hoy</h5>
                      <p>Conozca las noticias mas actualizadas sobre lo que pasa hoy en la ciudad</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            <div class="hola">
                <h1 class="titulo">Novedades Manizales</h1>
                <p>Enterate de las novedades y noticias sobre la ciudad
                </p>
            </div>
        </div>
    </section>



    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <div class="red-social">
                    <a href="" class="fa fa-facebook"></a>
                    <a href="" class="fa fa-instagram"></a>
                    <a href="" class="fa fa-twitter"></a>
                </div>
            </div>
            <div class="box">
                <h2>Contacto pagina web</h2>
                <p>Calle x #4y - 2t</p>
                <p>Manizales, Caldas</p>
                <p>3107894905</p>
                <p>8907658</p>
            </div>
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="{{ asset('imagenes/inicio/logo.jpg') }}" alt="Logo de la empresa">
                    </a>
                </figure>
            </div>
        </div>

        <div class="grupo-2">
            <small>&copy; 2023 <b>Manizales en bici</b> - Algunos derechos reservados.</small>
        </div>

    </footer>



    <script src="{{ asset('bici.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>