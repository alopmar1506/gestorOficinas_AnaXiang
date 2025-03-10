<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados de {{ $oficina->nombre }}</title>
    <link href="{{ asset('css/oficina/styleListadoEmpleados.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styleGeneral.css') }}" rel="stylesheet">
</head>
<body>
<h1 class="titulo">Empleados de {{ $oficina->nombre }}</h1>
<a href="{{ route('oficina', $oficina) }}"><button>Volver a la lista de oficinas</button></a>
<a href="{{ route('crearEmpleados', $oficina) }}"><button>Añadir empleado</button></a>
<div class="empleados">
    <ul class="listaEmpleados">
        @foreach($oficina->empleados as $empleado)
            <li>
                <a href="{{ route('editarEmpleados', $empleado) }}">{{ $empleado->nombre }} - DNI: {{ $empleado->dni }}</a>
            </li>
        @endforeach
    </ul>
</div>
</body>
</html>
