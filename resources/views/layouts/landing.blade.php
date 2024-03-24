<!DOCTYPE html>
<html lang="es">
<head>


   

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta name="author" content="Diego Arista">
    <meta name="keywords" content="Sinahua, Pueblo Hospitalario, Pueblos del estado de Guerrero, Guereero, Tierra Caleinte, Guache, Kuinique, Comida típica de Tierra Caliente">
    <meta name="description" content="Sinahua Sitio Oficial, Pueblo hospitalario del Estado de Guerrero, conoce nuestras tradiciones y nuestra cultura.">
    <title>Diego Arista | Web Designer</title>

    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">





    <meta property="og:url"  content="https://diegoarista.com/blog/post/{{ $post->slug ?? '' }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title"  content="{{ $post->name  ?? '' }}" />
    <meta property="og:description" content="{{ $post->excerpt   ?? ''}}" />
    <meta property="og:image" content="{{ $post->file ?? ''}}"/>
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="675" />

    <meta property="og:locale" content="es_ES" />





   <!-- cargamos fuentes web-->
   <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,900&display=swap" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <!---carga de archivos css-->
    <link rel="stylesheet" href="{{ asset('assets/css/normalize.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/freelancer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">


</head>
<body>
   

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v8.0&appId=885432708650123&autoLogAppEvents=1" nonce="BSmf1WaS"></script>



            <header class="encabezado fixed-top shadow" role="banner" id="encabezado">
                <div class="container">
                    <div id="bloque-logo">

                        <a data-scroll href="{{ url('/') }}" class="logo">
                          <img class="logo" src="{{ asset('assets/images/logo.png') }}" alt="logo del sitio">
                        </a>
                    </div>
                    <button type="button" class="boton-menu hidden-md-up" data-toggle="collapse" data-target="#menu-principal" aria-expanded="false">
                        <i class="fa fa-bars" aria-hidden="true"></i></button>

                <!-- <button type="button" class="boton-buscar" data-toggle="collapse" data-target="#bloque-buscar" aria-expanded="false">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>


                <form action="#" id="bloque-buscar" class="collapse">
                    <div class="contenedor-bloque-buscar">
                        <input type="text" placeholder="Buscar...">
                        <input type="submit" value="Buscar">
                    </div>
                </form> -->

                <nav id="menu-principal" class="collapse ">
                    <ul>
                        <li><a data-scroll href="{{ url('/') }}">Inicio</a></li>
                        <li>
                            <a  data-scroll href="{{ url('/blog')}}">Blog</a>
                          </li>
                       
                          <li>
                            <a  data-scroll href="{{ url('/#contacto')}}">Contacto</a>
                          </li>
                      </ul>
                </nav>

                 </div>
            </header>

<!--  -->
@yield('content')
<!--  -->


<footer class="footer">


  <div class="text-center col-md-12 footer--internas">

  <div class="d-flex justify-content-center align-content-center ">
            <a class="nav-link nav-social text-white" href="https://www.facebook.com/diegoaristawebdesinger"><i class="fab fa-facebook" aria-hidden="true"></i></a>
          
            <a class="nav-link nav-social text-white" href="https://www.instagram.com/diegoaristadisenoweb"><i class="fab fa-instagram" aria-hidden="true"></i></a>
          
            <a class="nav-link nav-social text-white"  target="_blank" href="https://api.whatsapp.com/send?phone=524772699750&text=%C2%A1Hola!%20Quiero%20hacer%20una%20página%20dame%20más%20info."><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
          
          </div>

      <p class="wow fadeInLeft">Derechos reservados © 2024 - Diego Arista </p>

  </div>
</footer>

<a data-scroll class="ir-arriba" href="#encabezado"><i class="fa  fa-arrow-up" aria-hidden="true"> </i> </a>



<!--Cargamos archivos js-->
<script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }} "></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/smooth-scroll.min.js') }}"></script>
<script src="{{ asset('assets/js/sitio.js') }}"></script>
</body>
</html>
