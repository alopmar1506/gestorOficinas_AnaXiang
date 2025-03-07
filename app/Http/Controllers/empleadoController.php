<?php

namespace App\Http\Controllers;

use App\Models\Oficina;
use Illuminate\Http\Request;
use App\Models\Empleado;

class empleadoController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create(Oficina $oficina)
    {
        return view('empleado/crearEmpleados', compact('oficina'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Oficina $oficina)
    {
        // Validar entrada del formulario
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'primer_apellido' => 'required|string|max:255',
            'segundo_apellido' => 'nullable|string|max:255',
            'dni' => [
                'required',
                'unique:empleados,dni',
                'regex:/^[0-9]{8}[A-Za-z]$/'
            ],
            'email' => 'required|email|unique:empleados,email',
            'fecha_nacimiento' => 'nullable|date',
            'rol' => 'nullable|string|max:255',
        ]);

        // Crear empleado asociado a la oficina
        $oficina->empleados()->create($validatedData);

        // Redirigir a la vista de la oficina
        return redirect()->route('mostrarOficina', $oficina->id)->with('success', 'Empleado creado exitosamente.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empleado $empleado, Oficina $oficina)
    {
        return view('empleado/editarEmpleados', compact('empleado', 'oficina'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empleado $empleado, Oficina $oficina)
    {
        $request->validate([
            'nombre' => 'required',
            'primer_apellido' => 'required',
            'dni' => 'required|regex:/^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKE]$/i|unique:empleados,dni,'.$empleado->id,
            'email' => 'required|email|unique:empleados,email,'.$empleado->id,
        ]);
        $empleado->update($request->all());
        return redirect()->route('oficina');
    }
}
