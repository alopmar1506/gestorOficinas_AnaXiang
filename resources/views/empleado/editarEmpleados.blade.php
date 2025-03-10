<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Empleado</title>
    <link href="{{ asset('css/empleado/styleFormEmpleado.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styleGeneral.css') }}" rel="stylesheet">
</head>
<body>
<h1 class="titulo">Editar Empleado</h1>
<form method="post" action="{{ route('actualizarEmpleados', ['empleado' => $empleado->id]) }}" >
    @csrf
    @method('PUT')
    <div>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="{{ $empleado->nombre }}" required>
    </div>
    <div>
        <label for="primer_apellido">Primer Apellido:</label>
        <input type="text" id="primer_apellido" name="primer_apellido" value="{{ $empleado->primer_apellido }}" required>
    </div>
    <div>
        <label for="segundo_apellido">Segundo Apellido:</label>
        <input type="text" id="segundo_apellido" name="segundo_apellido" value="{{ $empleado->segundo_apellido }}">
    </div>
    <div>
        <label for="rol">Rol:</label>
        <input type="text" id="rol" name="rol" value="{{ $empleado->rol }}">
    </div>
    <div>
        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ $empleado->fecha_nacimiento }}">
    </div>
    <div>
        <label for="dni">DNI:</label>
        <input type="text" id="dni" name="dni" value="{{ $empleado->dni }}" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $empleado->email }}" required>
    </div>
    <button type="submit">Guardar</button>
</form>
</body>
</html>
