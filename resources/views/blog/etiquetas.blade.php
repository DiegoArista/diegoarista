@extends('layouts.landing')

@section('content')



<section class="seccion--blog--post ">
    
        <div class="fondo--single--blog">
            <div class="filtro--single--blog">
                <div class="titulo--blog--post text-center text-white">
                    <h1 class="display-3  ">Etiquetas</h1>

<!--                    
                  <h5></h5> -->
           
                 
                   
                    <!-- <h3 class="text-white ">Categoria post</h3> -->
                </div>
            </div>
            <div class="  wow slideInLeft titulo--nivel2"></div>
        </div>
        
    <div class="container">
        <div class="contenedor--single--post col-md-12">
            <div class="titular--single--post col-md-9">
                    <form action="{{ url('/search') }}" id="bloque-buscar" method="get">
                        <div class="contenedor-bloque-buscar">
                       
                        <input class="" placeholder="Buscar un articulo.." type="text" name="query" id="query">
                        
                            <button type="submit"><i class="fa fa-search" ></i></button>
                        </div>
                    </form>
                
                   
                        
                               <!-- 1 -->
            <div class=" row d-flex justify-content-sm-start align-items-sm-start">
            @foreach($posts as $post)
                <div class="item--blog   p-2     col-md-4 wow fadeIn">
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
                            <a href="{{ route('post', $post->slug ) }}" class="boton--blog text-center" >Leer...</a>
                </div>
@endforeach


       


<div class=" col-md-12 d-flex align-content-center justify-content-center"> {{ $posts->render() }}</div>
      
    </div>
    

       
        

                                        <!--1  -->
                                        
            </div>
          
            <div class=" tags--blog--post order-2  col-md-3">
                        <div class="titulo--tags--blog--post">
                                <h5>Tags</h5>
                        </div>
                        <div class="tags--tags row">
                        @foreach($tagsall as $tag)
                            <div class="tags--individual">
                                    <h6><a class="text-white " href="{{ route('etiquetas', $tag->slug) }}">{{ $tag->name }}</a></h6>
                            </div>
                        @endforeach
                        
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

@endsection
