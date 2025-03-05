<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de empresas</title>
</head>
<body>
<h1>Listado de empresas</h1>
<ul>
    @foreach($oficinas as $oficina)
        <li><a href="{{route ('mostrarOficina', $oficina->id)}}">{{$oficina->nombre}}</a></li>
    @endforeach
</ul>
<a href="{{ route ('crearOficina') }}">Añadir oficina</a>
</body>
</html>
