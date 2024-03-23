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
    <title>Sinahua | Pueblo Hospitalario | Sitio Oficial </title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

   <!-- cargamos fuentes web-->
   <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,900&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <!---carga de archivos css-->
    <link rel="stylesheet" href="{{ asset('assets/css/normalize.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/freelancer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
  
    <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">
</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KBGK8RS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
        <header class="encabezado fixed-top shadow" role="banner" id="encabezado">
            <div class="container">
                <div id="bloque-logo">

                    <a data-scroll href="{{ url('/') }}" class="logo">
                        <img class="logo" src="{{ asset('assets/images/logo_svg.svg') }}" alt="logo del sitio">
                    </a>
                </div>
                <button type="button" class="boton-menu hidden-md-up" data-toggle="collapse" data-target="#menu-principal" aria-expanded="false">
                    <i class="fa fa-bars" aria-hidden="true"></i></button>


                    <nav id="menu-principal" class="collapse ">
                    <ul class="menu">
                        <li class="active">  <a  data-scroll href="{{ url('/') }}">Inicio </a></li>


                        <li>
                            <a  data-scroll href="{{ url('/#significado')}}">Significado </a>
                        </li>
                        <li>
                            <a data-scroll href="{{ url('/#geografia')}}">
                                Geografía <span><i class="fa fa-chevron-down iconos-derecha"></i></span>
                            </a>
                            <ul class="collapse subnivel nivel2" id="subnivel">
                                <li> <a  data-scroll href="{{ url('/ubicacion')}}">Ubicaci&oacute;n </a></li>

                                <li><a  data-scroll href="{{ url('/flora')}}">Flora </a></li>
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
                        <li>
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




  <!-- Start slider  -->
  <section id="mu-slider" >
    <div class="mu-slider-area" > 

      <!-- Top slider -->
      <div class="mu-top-slider" >

        <!-- Top slider single slide -->
        <div class="mu-top-slider-single">
          <img src="/assets/images/slider/1-cerro.jpg" alt="img slider 3">
          <!-- Top slider content -->
          <div class="mu-top-slider-content">
            
            <h2 class="mu-slider-title">¡Puro Tierra Caliente!</h2>
            <p>Comida, Cultura, Deporte, Música y los mejores luagres para estar en familia.</p>           
         
          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide --> 

           <!-- Top slider single slide -->
           <div class="mu-top-slider-single">
           
            <img src="/assets/images/slider/2-terrenos.jpg" alt="img">
            <!-- Top slider content -->
            <div class="mu-top-slider-content">
              <h2 class="mu-slider-title">Visita nuestro Blog</h2>
              <p>Tenemos posts de cultura, historia y mucho más...</p>   
              <a data-scroll href="{{ url('/blog')}}" class="mb-3 btn__slider btn-lg btn btn-primary  ftco-animate">Ir al blog</a>
            </div>
            <!-- / Top slider content -->
          </div>
          <!-- / Top slider single slide -->   

     
        <!-- Top slider single slide -->
        <div class="mu-top-slider-single">
          <img src="/assets/images/slider/3-contraste.jpg" alt="img slider 3">
          <!-- Top slider content -->
          <div class="mu-top-slider-content">
            
            <h2 class="mu-slider-title">Entérate de nuestros nuevos posts</h2>
            <p>¡Suscríbete Yaa!</p>           
           <a data-scroll href="{{ url('/#contacto')}}" class="btn btn__slider btn-primary btn-lg ftco-animate">Suscribirme</a>
          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide --> 

       

       

      </div>
    </div>
  </section>
  <!-- End slider  -->

      
<!-- 
<section class="seccion-principal text-center">
    <div class="principal">
        <div class="filtro--principal">
            <div class="contenedor--seccion--principal" id="inicio">
                        <div class="titulo-principal">
                            <h1 class=" text-white ">¡Bienvenido!</h1>
                        </div>
                        <div class="description--text col-xs-7 col-sm-8 col-md-12 ">
                            <p class=" text-white wow bounceInUp">Todos los aspectos  importantes, están aquí.</p>
                        </div>
                        <div class="hijo3">
                            <div class="bajar wow bounceInUp" data-wow-duration="1.5s">
                                    <a data-scroll href="#intro">  <i class="fa fa-chevron-down"></i></a>
                            </div>
                        </div>
                </div>
        </div>
    </div>
</section>  -->

<!--SECCION DE INTRODUCCION-->

<section class="seccion--introduccion text-center pb-3" id="intro">
    <div class="container" >
                  <div class="parrafo--resaltado pt-5">
                        <p>Sinahua, es una comunidad del
                        municipio de Pungarabato, perteneciente a la región Tierra Caliente, en el estado de Guerrero.
                        </p>
                </div>
                <div class="parrafo--normal pb-3">
                         <p>Se estima que fue fundada
                        aproximadamente en el año 1585, sin
                        embargo, se desconocen sus orígenes.
                        </p>
                </div>

                <div class="introduccion--contenedor wow bounceInUp">
                    <div class="imagenes--normales col-md-5">
                        <img src="{{ asset('assets/images/introduccion/imagen-1.jpg') }}" alt="Entrada al pueblo">
                    </div>
                    <div class="imagenes--normales col-md-5">
                            <img src="{{ asset('assets/images/introduccion/imagen-2.jpg') }}" alt="Camino adentrandose al pueblo ">
                    </div>
                </div>

     </div>

</section>

<!--seccion significado-->

<section class="seccion--significado pb-3">
                    <div class="titulo--nivel1" id="significado">
                        <h2 class="display-5 wow slideInLeft">Significado</h2>
                    </div>
        <div class="container"  >
            <div class="contenedor--significado ">
                    <div class="parrafo--normal col-md-8 col-lg-5 col-xl-5 wow slideInLeft">
                        <p>De acuerdo con la versión de los habitantes mayores de la misma
                            población, el significado de <strong>Sinahua</strong> es debido a que antes en el lugar donde se ubica,
                            había mucho <strong>nopal</strong> por toda la zona, quizá el nombre haga pensar que no había agua en la zona pero
                            el pueblo esta a orillas del <strong>Río Balsas</strong>, y  lamentablemente se desconoce con exactitud el año de su fundación.
                        </p>
                    </div>
                    <div class="imagenes--normales col-md-4 wow rubberBand" data-wow-delay=".8s">
                        <img src="{{ asset('assets/images/significado/nopal-1.jpg') }}" alt="imagen de un nopal a las faldas d eun cerro.">
                    </div>

                    <div class="parrafo--normal col-md-8 col-lg-5 col-xl-5  wow slideInLeft">
                        <p>De acuerdo con el Ing. Alfredo Mundo Fernández, el significado de <strong>Sinahua</strong> es
                            <strong> <em>"lugar de curación"</em></strong>, proveniente de la palabra Tarasca: <em>Tzinagua</em>.
                        </p>
                    </div>
                    <div class="imagenes--normales col-md-4 wow rubberBand" data-wow-delay="1s">
                        <img src="{{ asset('assets/images/significado/nopal-2.jpg') }}" alt="imagen de un nopal frondoso.">
                    </div>
            </div>
        </div>
</section>


<section class="seccion--geografia ">
                        <div class="filtro--geografia">
                            <div class="titulo--nivel1" id="geografia">
                                <h2 class="display-5 wow slideInLeft">Geografía</h2>
                            </div>
                            <div class="container">
                                <div class="contenedor--geografia">
                                <div class="parrafo--normal col-md-8 col-lg-5 col-xl-5 wow fadeIn">
                                    <p>En el sistema DMS la latitud es 181652 y
                                        la longitud es -1003601” Sinahua está
                                        localizado en una altura de 254 Metros
                                        Sobre El Nivel Del Mar.
                                    </p>
                                </div>




                                <div class="imagenes--normales col-md-4 wow pulse">
                                    <img src="{{ asset('assets/images/geografia/rio-balsas-1.jpg') }}" alt="imagen de un nopal a las faldas d eun cerro.">
                                </div>

                                <div class="parrafo--normal col-md-8 col-lg-5 col-xl-5 wow fadeIn">


                                    <p>Además, forma la micro cuenca “la
                                        bolsa”, está integrada por tres
                                        comunidades: Tanganhuato, Sinahua y
                                        Chacamerito, perteneciente al Municipio
                                        de Pungarabato, con características
                                        similares en cuanto a cultura, clima,
                                        suelo y vegetación.
                                    </p>
                                </div>
                                <div class="imagenes--normales col-md-4 wow pulse">
                                    <img src="{{ asset('assets/images/geografia/rio-balsas-2.jpg') }}" alt="imagen de un nopal frondoso.">
                                </div>

                                <div class="parrafo--normal col-md-8 col-lg-5 col-xl-5 wow fadeIn">


                                    <p>La cuenca del Rió Balsas, que
                                        pertenece a la vertiente del Océano
                                        Pacifico, drena la región por medio
                                        de las principales corrientes fluviales
                                        que son los Ríos Cutzamala, Balsas,
                                        Amuco, Cuirio, entre otros.
                                    </p>
                                </div>




                                <div class="imagenes--normales col-md-4 wow pulse">
                                    <img src="{{ asset('assets/images/geografia/rio-balsas-3.jpg') }}" alt="imagen de un nopal frondoso.">
                                </div>


                                <div class="parrafo--normal col-md-12 wow fadeIn" data-wow-delay=".5s">


                                    <p> El elemento geomorfológico está
                                        caracterizado por las formas de
                                        montañas plegadas de las zonas de
                                        Huetamo, Cd. Altamirano y
                                        Arcelia-Teloloapan.
                                    </p>

                                    <p>Constituidas por rocas de diferente
                                        ambiente sedimentario y edad, razón por
                                        la cual ofrecen diverso grado afectación
                                        tectónica y desarrollo morfológico, esto
                                        debido a las estribaciones de la Sierra
                                        Madre del Sur.
                                    </p>
                                </div>


                            </div>
                        </div>

                    </div>
</section>


<section class="seccion--sociedad text-center">
    <div class="filtro--sociedad">
                        <div class="titulo--nivel1" id="sociedad">
                            <h2 class="titulo-secundario display-5  wow slideInLeft">Sociedad</h2>
                        </div>
        <div class="container">
            <div class="contenedor--sociedad">
                <div class="sombra--negra col-xs-6 col-sm-7 col-md-5 col-lg-5 col-xl-4">
                    <p  class="parrafo--resaltado wow fadeInLeftBig">En Sinahua viven
                        aproximadamente 1,349
                        habitantes.
                    </p>
                    <p class="parrafo--normal wow fadeInLeftBig">Hay un total de 251 hogares
                        aproximadamente.
                    </p>
                    <p class="parrafo--normal wow fadeInLeftBig"><strong>20 de los jóvenes entre 6 y 14
                        años no asisten a la escuela.</strong>
                    </p>
                    <p class="parrafo--normal wow fadeInLeftBig"> Aunque el panorama ha mejorado aún
                        hace falta mucho por hacer en materia
                        educativa en la localidad.</p>
                </div>
            </div>
          </div>
     </div>
</section>

<section class="seccion--economia">
    <div class="titulo--nivel1"  id="economia">
        <h2 class="titulo-secundario display-5  wow slideInLeft">Economía</h2>
    </div>
        <div class="container">
            <div class="subtitulo--economia wow bounceInDown">
                <h6><strong>¿Qué actividades económicas existen?</strong></h6>
            </div>
            <div class="contenedor--economia">
                    <div class="parrafo--normal col-md-12">
                        <p>Las principales actividades económicas
                            son la <strong>Agricultura</strong>, la Ganadería, y el
                            <strong>Comercio</strong>.
                        </p>
                        <p>En cuanto a la agricultura, se da
                            principalmente Maíz, Mango, Comba,
                            Sorgo forrajero y Calabaza.
                        </p>
                    </div>
                    <div class="imagenes--normales width-2 wow zoomInDown">
                        <img src="{{ asset('assets/images/economia/maiz1.jpg') }}" alt="Cosecha de maíz">
                    </div>
                    <div class="imagenes--normales width-2 wow zoomInDown">
                        <img src="{{ asset('assets/images/economia/camahuas.jpg') }}" alt="Maiz recien cortado">
                    </div>
                    <div class="parrafo--normal width-2">
                        <p>Sinahua cuenta con sus propios
                            terrenos ejidales, donde hay actividad
                            de siembra de riego y de temporal,
                            principalmente se cultiva el maíz,
                                se da muy bien el mango criollo
                            y el mango petacón.
                        </p>
                    </div>
                    <div class="imagenes--normales  width-2 wow zoomInDown">
                        <img src="{{ asset('assets/images/economia/mango-petacon.jpg') }}" alt="Mango petacon">
                    </div>
                    <div class="parrafo--normal col-md-12">
                        <p>En el caso de la Ganadería, en Sinahua
                            actualmente se maneja el ganado
                            vacuno, bobino, caballar, porcino y aves
                            de corral como gallinas, gallos, entre
                            otras.
                        </p>
                    </div>
                    <div class="imagenes--normales width-3 wow zoomIn">
                        <img src="{{ asset('assets/images/economia/1-vaca.jpg') }}" alt="vaca">
                    </div>
                    <div class="imagenes--normales width-3 wow zoomIn">
                        <img src="{{ asset('assets/images/economia/2-ovejas.jpg') }}" alt="ovejas">
                    </div>
                    <div class="imagenes--normales width-3 wow zoomIn">
                        <img src="{{ asset('assets/images/economia/3-caballos.jpg') }}" alt="caballos">
                    </div>
                    <div class="imagenes--normales width-3 wow zoomIn">
                        <img src="{{ asset('assets/images/economia/4-cerdo.jpg') }}" alt="Cerdo">
                    </div>
                    <div class="imagenes--normales width-3 wow zoomIn">
                        <img src="{{ asset('assets/images/economia/5-gallina.jpg') }}" alt="Gallina">
                    </div>

                    <div class="parrafo--normal col-md-12">
                        <p>El comercio, tiene su origen hace
                            apróximadamente 20 años, el cual nace
                            dedibo a que, varias personas se
                            reunían en el zócalo a vender sus
                            productos, formando un mini mercado
                            que hasta la vez se pone.
                        </p>
                        <p>Actualmente, hay personas que venden,
                            comida corrida, quesadillas, jugos,
                            licuados, gelatinas, atole, cócteles,
                            gorditas, entre otros platillos y frutas
                            típicas de la región.
                        </p>
                    </div>
                    <div class="imagenes--normales width-2 wow slideInUp">
                        <img src="{{ asset('assets/images/economia/6-tacos.jpg') }}" alt="Tacos">
                    </div>
                    <div class="imagenes--normales width-2 wow slideInUp">
                        <img src="{{ asset('assets/images/economia/7-huarache.jpg') }}" alt="Huarache">
                    </div>
                                <div class="parrafo--normal ">
                                    <p class="col-xl-12">En los servicios, Sinahua cuenta con
                                        transporte público (Combis y un sitio de
                                        taxis), alumbrado público, caseta
                                        telefónica, red de telefonía celular, así como red
                                        eléctrica, servicio de
                                        Internet, red de drenaje, y una carretera
                                        estatal pavimentada que va desde Cd.
                                        Altamirano a Iguala, así como la mayoría
                                        de sus calles pavimentadas.
                                    </p>
                                </div>
                                <div class="imagenes--normales w-auto wow fadeIn">
                                    <img src="{{ asset('assets/images/economia/8-mapa.jpg') }}" alt="Huache">
                                </div>
            </div>
    </div>
</section>

<section class="seccion--cultura">
    <div class="filtro--cultura">
        <div class="titulo--nivel1" id="cultura">
            <h2 class="display-5 wow slideInLeft">Cultura</h2>
        </div>
                    <div class="container">
                        <div class="contenedor--cultura mb-4">
                            <div class="parrafo--normal sombra--negra col-xs-8 col-sm-9 col-md-8 col-lg-4 col-xl-4 wow bounceInDown">
                                <p>Sin duda alguna, cada región, tiene rasgos significativos que la distinguen de otras regiones: su cultura.</p>
                                <p>La localidad de Sinahua, comparte razgos similares en cuanto a cultura, respecto a las localidades circundantes,
                                    claro que cada localidad le da su estilo propio, que en general, ya sea una costumbre o tradición, en cada localidad se realizan con una cierta peculiaridad.
                                </p>
                                <p>Es por ello que acontinuación, se va a exponer la cultura de la localidad de Sinahua.
                                </p>
                            </div>
                        </div>
                    </div>

        </div>
    </div>
</section> <!--seccion cultura-->


<section class="seccion--blog">
    <div class="titulo--nivel1">
        <h2 class="display-5 wow slideInLeft">Blog</h2>
    </div>
        <div class="container">
            <div class="contenedor--blog">
            @foreach($posts  as $post)
                <div class="item--blog  width-4 wow slideInUp">
                @if($post->file )
                    <div class="imagen--blog">

                        <img src="{{ $post->file }}" alt="imagen principal del articulo">
                    </div>
                    @endif
                        <div class="categoria--blog">
                        <h6>{{ $post->category->name }}</h6>
                        </div>
                            <div class="cuerpo-blog">
                                <div class="fecha--post">
                                <h6>{{ $post->created_at }}</h6>
                                </div>
                                <div class="titulo--post">
                                <h4>{{ $post->name }}</h4>
                                </div>
                                <div class="descripcion--blog">
                                <p>{{ $post->excerpt }}
                                    </p>
                                </div>
                            </div>
                            <a href="{{ route('post', $post->slug ) }}" class="boton--blog text-center">Leer...</a>
                </div>
                @endforeach




        </div>
    </div>
</section>


<section class="seccion--galeria">
    <div class="titulo--nivel1" id="galeria">
        <h2 class="display-5 wow slideInLeft">Galería</h2>
    </div>

<div class="container">
    <div class="imagenes--galeria--contenedor">

                    <div class="galery--item gallery-item col-md-3 wow zoomIn">
                        <div class="galeria--individual gallery-image">
                            <a class="gallery" href="{{ asset('assets/images/galeria/paisaje-1.jpg') }}">
                            <img src="{{ asset('assets/images/galeria/paisaje-1.jpg') }}"
                                alt="Camino en los terrenos ejildales">
                                <div class="gallery-caption">
                                    <div class="gallery-icon"><span class="fa fa-search"></span></div>
                                </div>
                            </a>
                            <div class="imagen--focus"></div>
                        </div>
                    </div>

                    <div class="galery--item gallery-item col-md-3 wow zoomIn">
                        <div class="galeria--individual gallery-image">
                            <a class="gallery" href="{{ asset('assets/images/galeria/paisaje-2.jpg') }}">
                                <img src="{{ asset('assets/images/galeria/paisaje-2.jpg') }}"
                                    alt="Atardecer">
                                <div class="gallery-caption">
                                    <div class="gallery-icon"><span class="fa fa-search"></span></div>
                                </div>
                            </a>
                            <div class="imagen--focus"></div>
                        </div>
                    </div>

                    <div class="galery--item gallery-item col-md-3 wow zoomIn">
                        <div class="galeria--individual gallery-image">
                            <a class="gallery" href="{{ asset('assets/images/galeria/paisaje-3.jpg') }}">
                            <img src="{{ asset('assets/images/galeria/paisaje-3.jpg') }}" alt="Terrenos ejildales">
                            <div class="gallery-caption">
                                    <div class="gallery-icon"><span class="fa fa-search"></span></div>
                                </div>
                            </a>
                            <div class="imagen--focus"></div>
                        </div>
                    </div>

                    <div class="galery--item gallery-item col-md-3 wow zoomIn">
                        <div class="galeria--individual gallery-image">
                            <a class="gallery" href="{{ asset('assets/images/galeria/paisaje-4.jpg') }}">
                            <img src="{{ asset('assets/images/galeria/paisaje-4.jpg') }}" alt="Nubes">
                            <div class="gallery-caption">
                                    <div class="gallery-icon"><span class="fa fa-search"></span></div>
                                </div>
                            </a>
                            <div class="imagen--focus"></div>
                        </div>
                    </div>

                    <div class="galery--item gallery-item col-md-3 wow zoomIn">
                        <div class="galeria--individual gallery-image">
                            <a class="gallery" href="{{ asset('assets/images/galeria/paisaje-5.jpg') }}">
                            <img src="{{ asset('assets/images/galeria/paisaje-5.jpg') }}" alt="">
                                <div class="gallery-caption">
                                    <div class="gallery-icon"><span class="fa fa-search"></span></div>
                                </div>
                            </a>
                            <div class="imagen--focus"></div>
                        </div>
                    </div>

                    <div class="galery--item gallery-item col-md-3 wow zoomIn">
                        <div class="galeria--individual gallery-image">
                            <a class="gallery" href="{{ asset('assets/images/galeria/paisaje-6.jpg') }}">
                            <img src="{{ asset('assets/images/galeria/paisaje-6.jpg') }}" alt="">
                                <div class="gallery-caption">
                                    <div class="gallery-icon"><span class="fa fa-search"></span></div>
                                </div>
                            </a>
                            <div class="imagen--focus"></div>
                        </div>
                    </div>

                    <div class="galery--item gallery-item col-md-3 wow zoomIn">
                        <div class="galeria--individual gallery-image">
                            <a class="gallery" href="{{ asset('assets/images/galeria/paisaje-7.jpg') }}">
                            <img src="{{ asset('assets/images/galeria/paisaje-7.jpg') }}" alt="">
                                <div class="gallery-caption">
                                    <div class="gallery-icon"><span class="fa fa-search"></span></div>
                                </div>
                            </a>
                            <div class="imagen--focus"></div>
                        </div>
                    </div>

                    <div class="galery--item gallery-item col-md-3 wow zoomIn">
                        <div class="galeria--individual gallery-image">
                            <a class="gallery" href="{{ asset('assets/images/galeria/paisaje-8.jpg') }}">
                            <img src="{{ asset('assets/images/galeria/paisaje-8.jpg') }}" alt="">
                                <div class="gallery-caption">
                                    <div class="gallery-icon"><span class="fa fa-search"></span></div>
                                </div>
                            </a>
                            <div class="imagen--focus"></div>
                        </div>
                    </div>

                    <div class="galery--item gallery-item col-md-3 wow zoomIn">
                        <div class="galeria--individual gallery-image">
                            <a class="gallery" href="{{ asset('assets/images/galeria/paisaje-9.jpg') }}">
                            <img src="{{ asset('assets/images/galeria/paisaje-9.jpg') }}" alt="">
                                <div class="gallery-caption">
                                    <div class="gallery-icon"><span class="fa fa-search"></span></div>
                                </div>
                            </a>
                            <div class="imagen--focus"></div>
                        </div>
                    </div>

                    <div class="galery--item gallery-item col-md-3 wow zoomIn">
                        <div class="galeria--individual gallery-image">
                            <a class="gallery" href="{{ asset('assets/images/galeria/paisaje-10.jpg') }}">
                            <img src="{{ asset('assets/images/galeria/paisaje-10.jpg') }}" alt="">
                                <div class="gallery-caption">
                                    <div class="gallery-icon"><span class="fa fa-search"></span></div>
                                </div>
                            </a>
                            <div class="imagen--focus"></div>
                        </div>
                    </div>

                    <div class="galery--item gallery-item col-md-3 wow zoomIn">
                        <div class="galeria--individual gallery-image">
                            <a class="gallery" href="{{ asset('assets/images/galeria/paisaje-11.jpg') }}">
                            <img src="{{ asset('assets/images/galeria/paisaje-11.jpg') }}" alt="">
                                <div class="gallery-caption">
                                    <div class="gallery-icon"><span class="fa fa-search"></span></div>
                                </div>
                            </a>
                            <div class="imagen--focus"></div>
                        </div>
                    </div>

                    <div class="galery--item gallery-item col-md-3 wow zoomIn">
                        <div class="galeria--individual gallery-image">
                            <a class="gallery" href="{{ asset('assets/images/galeria/paisaje-12.jpg') }}">
                            <img src="{{ asset('assets/images/galeria/paisaje-12.jpg') }}" alt="">
                                <div class="gallery-caption">
                                    <div class="gallery-icon"><span class="fa fa-search"></span></div>
                                </div>
                            </a>
                            <div class="imagen--focus"></div>
                        </div>
                    </div>

                    <div class="galery--item gallery-item col-md-3 wow zoomIn">
                        <div class="galeria--individual gallery-image">
                            <a class="gallery" href="{{ asset('assets/images/galeria/paisaje-13.jpg') }}">
                            <img src="{{ asset('assets/images/galeria/paisaje-13.jpg') }}" alt="">
                                <div class="gallery-caption">
                                    <div class="gallery-icon"><span class="fa fa-search"></span></div>
                                </div>
                            </a>
                            <div class="imagen--focus"></div>
                        </div>
                    </div>

                    <div class="galery--item gallery-item col-md-3 wow zoomIn">
                        <div class="galeria--individual gallery-image">
                            <a class="gallery" href="{{ asset('assets/images/galeria/paisaje-14.jpg') }}">
                            <img src="{{ asset('assets/images/galeria/paisaje-14.jpg') }}" alt="">
                                <div class="gallery-caption">
                                    <div class="gallery-icon"><span class="fa fa-search"></span></div>
                                </div>
                            </a>
                            <div class="imagen--focus"></div>
                        </div>
                    </div>

                    <div class="galery--item gallery-item col-md-3 wow zoomIn">
                        <div class="galeria--individual gallery-image">
                            <a class="gallery" href="{{ asset('assets/images/galeria/paisaje-15.jpg') }}">
                            <img src="{{ asset('assets/images/galeria/paisaje-15.jpg') }}" alt="">
                                <div class="gallery-caption">
                                    <div class="gallery-icon"><span class="fa fa-search"></span></div>
                                </div>
                            </a>
                            <div class="imagen--focus"></div>
                        </div>
                    </div>

                    <div class="galery--item gallery-item col-md-3 wow zoomIn">
                        <div class="galeria--individual gallery-image">
                            <a class="gallery" href="{{ asset('assets/images/galeria/huizache.jpg') }}">
                            <img src="{{ asset('assets/images/galeria/huizache.jpg') }}" alt="">
                                <div class="gallery-caption">
                                    <div class="gallery-icon"><span class="fa fa-search"></span></div>
                                </div>
                            </a>
                            <div class="imagen--focus"></div>
                        </div>
                    </div>

                    <div class="galery--item gallery-item col-md-3 wow zoomIn">
                        <div class="galeria--individual gallery-image">
                            <a class="gallery" href="{{ asset('assets/images/galeria/plaga-mango.jpg') }}">
                            <img src="{{ asset('assets/images/galeria/plaga-mango.jpg') }}" alt="">
                                <div class="gallery-caption">
                                    <div class="gallery-icon"><span class="fa fa-search"></span></div>
                                </div>
                            </a>
                            <div class="imagen--focus"></div>
                        </div>
                    </div>

                    <div class="galery--item gallery-item col-md-3 wow zoomIn">
                        <div class="galeria--individual gallery-image">
                            <a class="gallery" href="{{ asset('assets/images/galeria/pinzanes.jpg') }}">
                            <img src="{{ asset('assets/images/galeria/pinzanes.jpg') }}" alt="">
                                <div class="gallery-caption">
                                    <div class="gallery-icon"><span class="fa fa-search"></span></div>
                                </div>
                            </a>
                            <div class="imagen--focus"></div>
                        </div>
                    </div>

                    <div class="galery--item gallery-item col-md-3 wow zoomIn">
                        <div class="galeria--individual gallery-image">
                            <a class="gallery" href="{{ asset('assets/images/galeria/virgen-san-juan-de-los-lagos.jpg') }}">
                            <img src="{{ asset('assets/images/galeria/virgen-san-juan-de-los-lagos.jpg') }}" alt="">
                                <div class="gallery-caption">
                                    <div class="gallery-icon"><span class="fa fa-search"></span></div>
                                </div>
                            </a>
                            <div class="imagen--focus"></div>
                        </div>
                    </div>

                    <div class="galery--item gallery-item col-md-3 wow zoomIn">
                        <div class="galeria--individual gallery-image">
                            <a class="gallery" href="{{ asset('assets/images/galeria/veladoras.jpg') }}">
                            <img src="{{ asset('assets/images/galeria/veladoras.jpg') }}" alt="">
                                <div class="gallery-caption">
                                    <div class="gallery-icon"><span class="fa fa-search"></span></div>
                                </div>
                            </a>
                            <div class="imagen--focus"></div>
                        </div>
                    </div>
                </div>
</div>
</section>

<section class="seccion--contacto">
    <div class="contacto--cuerpo">
    <div class="titulo--nivel1"  id="contacto">
        <h2 class="display-5 wow slideInLeft">Contacto</h2>
    </div>
                <div class="container">
                    <div class="contenedor--contacto">
                <div class="titulo--contacto wow slideInUp">
                    <h3>Escríbenos</h3>
                </div>
                <div class="contacto--opinion wow slideInUp">
                        <p>¿Tienes material para aportar? <br>
                            Nos interesa tu opinión.</p>
                            <div class="enlace--footer ">
                                <a  class="text-white" href="mailto:contacto@sinahua.com.mx">  <i class="fa fa-envelope"></i> Enviar sugerencias</a>
                            </div>




                </div>
                <div class="redes-sociales d-flex justify-content-start align-content-center flex-row ">
                <div class=" d-flex titulo--contacto wow slideInUp  justify-content-start">
                    <h3>Redes Sociales</h3>
                </div>
                        <div class="ml-5 d-flex flex-row justify-content-center align-content-center">
                                <a   class="nav-link nav-social text-white" href="https://www.facebook.com/sinahuatierracaliente"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                            <!-- <a class="nav-link nav-social" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> -->

                                <a  class="nav-link nav-social text-white" href="https://www.instagram.com/sinahuagro/"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                        </div>
            </div>

            <div class="subscriptor  d-flex justify-content-start align-content-center flex-row">
            <div class="titulo--contacto wow slideInUp ">

                    <h3>Subscríbete</h3>
                </div>


            {!! Form::open(['url' => 'welcome/subscriptor']) !!}
                <div class="col-sm-12 ">
                    <div class=" d-flex">

                        {{ Form::input('email', 'email', null, ['class' => 'form-control btn-email col-sm-7',  'placeholder' => 'Tu correo aquí', 'required' ]) }}
                        {{ Form::input('submit', '', 'Enviar', ['class' => 'btn-subs btn btn-primary col-sm-5 ', 'required' ]) }}
                    </div>
                </div>
            {!! Form::close() !!}

            </div>

            @if(session('info'))


<div class="col-sm-12 ">
    <div class="alert alert-success">
        {{ session('info')}}
    </div>
</div>



@endif


@if(count($errors))

<div class="col-sm-12 ">
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error}}</li>
            @endforeach
        </ul>
    </div>
</div>


@endif
                <footer>



                    <div class="footer--descripcion text-center col-md-12 ">
                        <p class="wow slideInLeft">Derechos reservados © 2020 Sinahua, Gro. <br>
                        <a class="text-warning text-decoration-none" href="{{ url('/politica-privacidad')}}">Política de privacidad</a> <br>
                        Designed by <a class="text-decoration-none" href="https://diegoarista.com/">Diego Arista</a> </p>
                    </div>
                </footer>
            </div>
        </div>
    </div>

    </section>





    <a data-scroll class="ir-arriba" href="#encabezado"><i class="fa  fa-arrow-up" aria-hidden="true"> </i> </a>



<!--Cargamos archivos js-->
<script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/slider.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }} "></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/smooth-scroll.min.js') }}"></script>
<script src="{{ asset('assets/js/sitio.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.min.js') }}"></script>


<script>


        /* ---------------------------------------------- /*
         * Video popup, Gallery
         /* ---------------------------------------------- */



        $(".gallery-item").magnificPopup({
            delegate: 'a',
            type: 'image',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0,1]
            },
            image: {
                titleSrc: 'title',
                tError: 'La imagen no pudo ser cargada.'
            }
        });







</script>

</body>
</html>
