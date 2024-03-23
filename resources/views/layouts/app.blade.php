<!DOCTYPE html>
<html lang="es">
<head>
    <title>Diego Arista |  Administrador </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
   


    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">

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
<body >

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
            <a data-scroll href="{{ url('/') }}" class="" >
                        <img  width="150px" src="{{ asset('assets/images/logo.png') }}" alt="logo del sitio">
                    </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Entrar</a>
                            </li>
                            @if (Route::has('register'))
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Registrarme</a>
                                </li> -->
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       Salir
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
   



      
        <footer class="footer">
    <div class="text-center col-md-12 footer--internas">
        <p class="wow fadeInLeft pt-3">Derechos reservados © 2024 <br> Diego Arista.</p>
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