<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Diseño Web | Diego Arista</title>
  <link rel="shortcut icon" href="{{ url('favicon.png')}}" type="image/x-icon">
    <meta name="description" content="Diseño de sitios web,  logotipos y desarrollo web en México."/>
   
    <link href="https://fonts.googleapis.com/css2?family=Quattrocento+Sans&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('assets/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ url('assets/styles/main.css')}}" rel="stylesheet">
    
  </head>
  <body id="top"><div class="site-wrapper">
  <div class="site-wrapper-inner">
    <div class="cover-container">
      <div class="masthead clearfix">
        <div class="inner">
          <h3 class="masthead-brand">Próximamente</h3>
          <nav class="nav nav-masthead">

<a href="http://" ></a>

            <a class="nav-link nav-social" href="https://www.facebook.com/diegoaristawebdesinger" target="_blank" rel="noopener noreferrer"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <!-- <a class="nav-link nav-social" href="#"><i class="fa fa-twitter" aria-hidden="true" target="_blank" rel="noopener noreferrer"></i></a> -->
            <a class="nav-link nav-social" href="https://www.instagram.com/diegoaristadisenoweb/" target="_blank" rel="noopener noreferrer"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a class="nav-link nav-social" href="https://api.whatsapp.com/send?phone=524772699750&text=%C2%A1Hola!%20Quiero%20hacer%20una%20página%20dame%20más%20info." target="_blank" rel="noopener noreferrer"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
          </nav>
        </div>
      </div><br>      <div class="inner cover">
        <h1 class="cover-heading">Diseño web</h1>
        <p class="lead cover-copy">Lo que necesitas para potenciar tu presencia online con un diseño web y todo un arsenal de herramientas web, ya viene.</p>
        <p class="lead"><button type="button" class="btn btn-lg btn-default btn-notify" data-toggle="modal" data-target="#subscribeModal">Notificarme</button></p>
       <div>

       <a   href="{{ url('/blog')}}" class="btn btn-lg btn-default btn-notify">Blog</a>
      
       </div>
       
       

       
       
       
       
        @if(count($errors))
        <div class="d-flex justify-content-center align-items-center">
<div class="col-sm-6 ">
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error}}</li>
            @endforeach
        </ul>
    </div>
</div>

</div>
@endif
       
       
       
       
            @if(session('info'))
            <div class="d-flex justify-content-center align-items-center">
                <div class="col-sm-6 ">
                    <div class="alert alert-success">
                        {{ session('info')}}
                    </div>
                </div>
            </div>
            @endif
       
        <div class="col-md-12 nota">
       

      </div>
      
      
      </div>
    
      <div class="mastfoot">
        <div class="inner">
          <p>&copy; Diego Arista | Diseño & Desarrollo Web </p>
        </div>
      </div>
      <div class="modal fade" id="subscribeModal" tabindex="-1" role="dialog" aria-labelledby="subscribeModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="subscribeModalLabel">Notificarme novedades:</h5>


              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">















            {!! Form::open(['url' => 'welcome/subscriptor']) !!}
             
                  

             {{ Form::input('email', 'email', null, ['class' => 'form-control btn-email mb-4',  'placeholder' => 'Tu correo aquí', 'required' ]) }}
             {{ Form::input('submit', '', 'Enviar', ['class' => 'btn-subs btn btn-primary col-sm-5 ', 'required' ]) }}
       
   
 {!! Form::close() !!}






            </div>

      


             
          </div>
        </div>
    </div>
  </div>
</div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="{{ url('assets/scripts/jquery-3.5.1.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <script src="{{ url('assets/scripts/main.js')}}"></script>
    <script src="{{ url('assets/views/js/validarRegistro.js')}}"></script>
    <script type="application/ld+json">
{
 "@context" : "http://schema.org",
 "@type" : "Organization",
 "name" : "Dieño de sitios web",
 "url" : "https://diegoarista.com/",
 "sameAs" : [
   
   
   "https://www.facebook.com/sitioswebparaminegocio",
   
   "https://www.instagram.com/sitios_web_para_negocios/"
  ],
 "address": {
   "@type": "PostalAddress",
   "streetAddress": "Ciudad Altamirano 40660",
   "addressRegion": "CA",
   "postalCode": "40660",
   "addressCountry": "MX"
 }
}
</script>

 <!-- Messenger plugin de chat Code -->
 <div id="fb-root"></div>

<!-- Your plugin de chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "107106028254107");
  chatbox.setAttribute("attribution", "biz_inbox");

  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v11.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
  </body>
</html>
