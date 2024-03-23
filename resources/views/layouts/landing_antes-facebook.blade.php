<!DOCTYPE html>
<html lang="es">
<head>
 <!-- Global site tag (gtag.js) - Google Analytics -->
 <script async src="https://www.googletagmanager.com/gtag/js?id=G-CNL3ZGCENQ"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-CNL3ZGCENQ');
    </script>
        <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KBGK8RS');</script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta name="description" content="Sinahua Sitio Oficial, Pueblo hospitalario del Estado de Guerrero, conoce nuestras tradiciones y nuestra cultura.">
    <title>Sinahua | Pueblo Hospitalario  | Sitio Oficial</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

      <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
    <meta property="og:url"           content="https://www.sinahua.com.mx/blog/post/{{ $post->slug ?? '' }}" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="{{ $post->name  ?? '' }}" />
    <meta property="og:description"   content="{{ $post->excerpt   ?? ''}}" />
    <meta property="og:image"         content="{{ $post->file   ?? ''}}" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="675" />
    <meta property="fb:app_id" content="885432708650123" />
    <meta property="og:locale" content="es_ES" />





   <!-- cargamos fuentes web-->
   <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,900&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <!---carga de archivos css-->
    <link rel="stylesheet" href="{{ asset('assets/css/normalize.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/freelancer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">


</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KBGK8RS"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
      <!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "https://connect.facebook.net/en_LA/sdk.js#xfbml=1&version=v3.0";
      fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v8.0&appId=885432708650123&autoLogAppEvents=1" nonce="BSmf1WaS"></script>



            <header class="encabezado fixed-top shadow" role="banner" id="encabezado">
                <div class="container">
                    <div id="bloque-logo">

                        <a data-scroll href="{{ url('/') }}" class="logo">
                          <img class="logo" src="{{ asset('assets/images/logo_svg.svg') }}" alt="logo del sitio">
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
                            <a  data-scroll href="{{ url('/#significado')}}">Significado</a>
                          </li>
                        <li>
                            <a data-scroll href="{{ url('/#geografia')}}">
                                Geografía <span><i class="fa fa-chevron-down iconos-derecha"></i></span>
                            </a>
                            <ul class="collapse subnivel nivel2" id="subnivel">
                                <li> <a  data-scroll href="{{ url('/ubicacion')}}">Ubicaci&oacute;n</a></li>

                                <li><a  data-scroll href="{{ url('/flora')}}">Flora</a></li>
                                <li><a  data-scroll href="{{ url('fauna')}}">Fauna</a></li>
                                <li><a  data-scroll href="{{ url('/clima')}}">Clima</a></li>

                            </ul>
                          </li>
                        <li>
                          <a  data-scroll href="{{ url('/#sociedad')}}">Sociedad</a>
                        </li>
                        <li>
                          <a  data-scroll href="{{ url('/#economia')}}">Economía</a>
                        </li>
                        <li >
                          <a data-scroll href="{{ url('/#cultura')}}">
                            Cultura <span><i class="fa fa-chevron-down iconos-derecha"></i></span>
                          </a>
                          <ul id="subnivel-cultura" class="collapse nivel2 subnivel">
                            <li><a  data-scroll href="{{ url('/religion')}}">Religi&oacute;n</a></li>
                           <li> <a  data-scroll href="{{ url('/danza')}}">Danza</a></li>
                           <li> <a  data-scroll href="{{ url('/gastronomia')}}">Gastronom&iacute;a</a></li>
                          </ul>
                        </li>
                        <li>
                            <a  data-scroll href="{{ url('/blog')}}">Blog</a>
                          </li>
                          <li>
                            <a  data-scroll href="{{ url('/#galeria')}}">Galería</a>
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
            <a class="nav-link nav-social text-white" href="https://www.facebook.com/sinahuatierracaliente"><i class="fab fa-facebook" aria-hidden="true"></i></a>
            <!-- <a class="nav-link nav-social" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> -->
            <a class="nav-link nav-social text-white" href="https://www.instagram.com/sinahuagro/"><i class="fab fa-instagram" aria-hidden="true"></i></a>
          </div>

      <p class="wow fadeInLeft">Derechos reservados © 2020 <br> Sinahua, Gro. <br>
      Designed by <a class="text-decoration-none text-warning" href="https://diegoarista.com/">Diego Arista</a> </p>

  </div>
</footer>

<a data-scroll class="ir-arriba" href="#encabezado"><i class="fa  fa-arrow-up" aria-hidden="true"> </i> </a>



<!--Cargamos archivos js-->
<script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }} "></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/smooth-scroll.min.js') }}"></script>
<script src="{{ asset('assets/js/sitio.min.js') }}"></script>
</body>
</html>
