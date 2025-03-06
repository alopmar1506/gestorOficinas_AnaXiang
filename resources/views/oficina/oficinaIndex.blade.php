<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de empresas</title>
    <link href="{{ asset('css/oficina/styleListadoOficinas.css') }}" rel="stylesheet">

</head>
<body>
<h1 class="titulo">Listado de empresas</h1>
<a href="{{ route ('crearOficina') }}">Añadir oficina</a>
<div class="contenedor-oficinas">
    <ul class="lista_oficinas">
        @foreach($oficinas as $oficina)
            <li><a href="{{route ('mostrarOficina', $oficina->id)}}">{{$oficina->nombre}}</a></li>
        @endforeach
    </ul>
</div>

</body>
</html>
