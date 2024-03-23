<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Post en el Blog</title>
</head>
<body>

<!-- <img width="200px" src="{{ asset('/assets/images/logo_svg.svg') }}" alt="Logotipo de Sinahua"> -->

<p>Se ha publicado una nuevo artículo en el blog</p>
<p>No te pierdas de este artículo:</p>

<div class="card">
<h1>{{ $post->name }}</h1>
<img width="50%" src="{{ $post->file }}" alt="imagen principal del articulo"> <br>
<small> <strong>Categría: </strong>{{ $post->category->name }}</small>
<p><strong>Fecha: </strong> {{ $post->created_at }}</p>
<p><strong>Resumen: </strong>{{ $post->excerpt }}</p>
<a href="{{ route('post', $post->slug ) }}">Leer artículo completo</a>
</div>




</body>
</html>
