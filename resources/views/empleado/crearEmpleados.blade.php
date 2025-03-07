<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear empleado</title>
    <link href="{{ asset('css/empleado/styleFormEmpleado.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styleGeneral.css') }}" rel="stylesheet">
</head>
<body>
<h1 class="titulo">Crear empleado para {{ $oficina->nombre }}</h1>
<a href="{{ route('mostrarOficina', $oficina) }}"><button>Volver a la página inicial</button></a>

<form method="POST" action="{{ route('guardarEmpleados', $oficina->id) }}">
    @csrf
    <div>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
    </div>
    <div>
        <label for="primer_apellido">Primer Apellido:</label>
        <input type="text" id="primer_apellido" name="primer_apellido" required>
    </div>
    <div>
        <label for="segundo_apellido">Segundo Apellido:</label>
        <input type="text" id="segundo_apellido" name="segundo_apellido">
    </div>
    <div>
        <label for="rol">Rol:</label>
        <input type="text" id="rol" name="rol">
    </div>
    <div>
        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento">
    </div>
    <div>
        <label for="dni">DNI:</label>
        <input type="text" id="dni" name="dni" required pattern="[0-9]{8}[A-Za-z]" title="Debe tener 8 números seguidos de una letra">
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>
    <button type="submit">Guardar</button>
</form>
</body>
</html>
