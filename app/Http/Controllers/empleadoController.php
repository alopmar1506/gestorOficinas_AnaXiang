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
        $request->validate([
            'nombre' => 'required',
            'primer_apellido' => 'required',
            'dni' => 'required|unique:empleados,dni|regex:/^[0-9]{8}[A-Z]$/',
            'email' => 'required|email|unique:empleados',
        ]);

        $empleado = new Empleado($request->all());
        $empleado->oficina_id = $oficina->id;
        $empleado->save();

        return redirect()->route('oficina', $oficina);
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

        return redirect()->route('oficina', $empleado->oficina);
    }
}
