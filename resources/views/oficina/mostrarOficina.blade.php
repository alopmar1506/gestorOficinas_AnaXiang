<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados de {{ $oficina->nombre }}</title>
</head>
<body>
<h1>Empleados de {{ $oficina->nombre }}</h1>
<a href="{{ route('crearEmpleados', $oficina) }}">Añadir empleado</a>
<ul>
    @foreach($oficina->empleados as $empleado)
        <li>
            <a href="{{ route('editarEmpleados', $empleado) }}">{{ $empleado->nombre }}</a>
            - DNI: {{ $empleado->dni }}
        </li>
    @endforeach
</ul>
</body>
</html>
