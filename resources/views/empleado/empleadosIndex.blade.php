<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Empleados</title>
</head>
<body>
<h1>Listado de Empleados - {{ $oficina->nombre }}</h1>
<a href="{{ route('oficinas.empleados.create', $oficina->id) }}">Añadir empleado</a>
<ul>
    @foreach($empleados as $empleado)
        <li>
            <a href="{{ route('oficinas.empleados.edit', [$oficina->id, $empleado->id]) }}">
                {{ $empleado->nombre }}
            </a>
            - {{ $empleado->dni }}
        </li>
    @endforeach
</ul>
</body>
</html>
