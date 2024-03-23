@extends('layouts.landing')

@section('content')
  <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
    <meta property="og:url"           content="https://diegoarista.com/blog/post/{{ $post->slug  }}" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="{{ $post->name  }}" />
    <meta property="og:description"   content="{{ $post->excerpt }}" />
    <meta property="og:image"         content="{{ $post->file }}" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="675" />
   
    <meta property="og:locale" content="es_ES" /> 
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v19.0" nonce="KVw9ljom"></script>



<section class="seccion--blog--post">

        <div class="fondo--single--blog">
            <div class="filtro--single--blog">
                <div class="titulo--blog--post text-center">
                    <h1 class="display-4  text-white">Blog</h1>

                    <!-- <h3 class="text-white ">Categoria post</h3> -->
                </div>
            </div>
            <div class="  wow slideInLeft titulo--nivel2"></div>
        </div>

    <div class="container">
        <div class="contenedor--single--post">
            <div class="titular--single--post col-md-7">
                <form action="{{ url('/search') }}" id="bloque-buscar" method="get">
                        <div class="contenedor-bloque-buscar">

                        <input class="" placeholder="Buscar un articulo.." type="text" name="query" id="query" required>

                            <button type="submit"><i class="fa fa-search" ></i></button>
                        </div>
                    </form>

                    <div class="categoria--blog--post text-right">
                        <a href="{{ route('categorias', $post->category->slug) }}" >{{ $post->category->name }}</a href="" class="">
                    </div>

                    @if($post->file )
                        <div class="imagen--blog--post">
                                <img src="{{ $post->file }}" alt="imagen {{ $post->name }} ">
                        </div>
                        @endif
                            <div class="titulo--blog--post pt-3">
                                <h2>{{ $post->name }}</h2>
                            </div>
                                <div class="datos--blog--post ">
                                    <div class="autor--blog-post col-md-5 text-left">
                                        <label for="text">Por:  {{ $post->user->name }}</label></div>
                                        <div class="fecha--blog-post col-md-5 text-right">
                                           <label for="text">  {{ $post->created_at  }}</label>
                                        </div>
                                    </div>
                                        <div class="subtitulo--blog--post">
                                            <p>{{ $post->excerpt }}</p>
                                        </div>
                                        <div  class="contenido--blog--post" id="demo">
                                        {!! $post->body !!}
                                        <div class="" id="ever"></div>
                                        </div>
            </div>

       <div class="c2 col-md-5">
            <div class="categorias--blog--post ">
                <div class="titulo--categorias--blog--post ">
                        <h5>Categorías</h5>
                </div>






                <ul>
                @foreach($categories as $category)
                    <li><a href="{{ route('categorias', $category->slug) }}">{{ $category->name }}</a></li>
                    <!-- <li><a href="#">Eventos</a></li>
                    <li><a href="#">Fiestas Patronales</a></li>
                    <li><a href="#">Deportes</a></li>
                    <li><a href="#">Politica</a></li>
                    <li><a href="#">Espectaculos</a></li>
                    <li><a href="#">Redes Sociales</a></li>
                    <li><a href="#">Ballet Xochipilli</a></li>
                    <li><a href="#">Economia</a></li> -->
              @endforeach
                </ul>

            </div>


            <div class="novedades--blog--post ">
                    <div class="titulo--novedades--blog--post">
                            <h5>Últimas entradas</h5>
                    </div>
                    @foreach($last_articles  as $la)
                        <a href="{{ route('post', $la->slug ) }}">
                            <div class="novedades--posts ">
                                <div class="imagenes--novedades col-4 p-2">
                                @if($la->file )
                                <img  src="{{ $la->file }}" alt="{{ $la->name }}">
                                @endif
                                </div>
                                <div class="cuerpo--novedades col-6">
                                    <p class="fecha">{{ $la->created_at }}</p>
                                    <h6><strong>{{ $la->name }}</strong></h6>
                                </div>
                                <div class="enlace-font col-2 ">
                                    <i class="fa fa-chevron-right"></i>
                                </div>
                            </div>
                        </a>

                        @endforeach





            </div>
        </div>

                    <div class="tags--blog--post  col-md-5">
                        <div class="titulo--tags--blog--post">
                                <h5>Tags</h5>
                        </div>
                        <div class="tags--tags row">
                        @foreach($post->tags as $tag)
                            <div class="tags--individual">
                                    <h6><a class="text-white " href="{{ route('etiquetas', $tag->slug) }}">{{ $tag->name }}</a></h6>
                            </div>
                        @endforeach

                        </div>
                    </div>
<div class="c3 col-md-7">
                    <div class="compartir--blog--post mb-2 ">
                        <!-- <strong>Compartir: </strong> <a href="#" class="botones--compartir--blog--post col-md-5 mb-1"> <i class="fab fa-facebook-f"></i></a> -->

<!-- aqui compartir -->





<div class="fb-share-button" data-href="https://diegoarista.com/blog/post/{{ $post->slug }}" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdiegoarista.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>






           <!-- Your share button code -->
<!-- <div class="fb-share-button"
data-href="https://www.sinahua.com.mx/post/{{ $post->slug  }}"
data-layout="button_count">
</div> -->


                    </div>

                    <div class="comentarios--blog--post ">
                        <div class="titulo--comentarios--blog--post mb-4">
                            <h5>Comentarios</h5>
                        </div>
                            <div class="col">

                            <div class="fb-comments" data-href="https://www.sinahua.com.mx/post/{{ $post->slug }}" data-numposts="50" data-width=""></div>

                                <!-- <div class="contenedor--comentarios--blog--post row">
                                    <div class="foto--usuario--comentario text-center fecha--comentario col-xs-3">
                                        <img width="40px" src="./assets/images/usuario.png" alt="avatar--usuario">
                                        <p >Usuario</p>
                                        <p>22-07-2019</p>
                                    </div>
                                    <div class="contenido--comentario col-9 col-xs-9 ">
                                        <p> temporibus maxime quos est magni minus et cum, nobis perspiciatis doloremque blanditiis.</p>
                                    </div>
                                    <div class="fecha--comentario text-right col-12">
                                    </div>
                                </div>                   -->
                            </div>
                    </div>
</div>

        <!-- </div>

    </div> -->


    <!-- </div>
   -->
            </div>
        </div>
    </div>
</section>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>


// $(document).ready(function(){
//     var aux="{{ $post->body }}";
//     document.getElementById("demo").innerHTML = aux;
// 	});


</script>


@endsection
