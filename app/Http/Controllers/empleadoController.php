<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class empleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Oficina $oficina)
    {
        return view('empleados.create', compact('oficina'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Oficina $oficina)
    {
        $request->validate([
            'nombre' => 'required',
            'primer_apellido' => 'required',
            'dni' => 'required|unique:empleados|regex:/^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKE]$/i',
            'email' => 'required|email|unique:empleados',
        ]);

        $empleado = new Empleado($request->all());
        $empleado->oficina_id = $oficina->id;
        $empleado->save();

        return redirect()->route('oficinas.show', $oficina)->with('success', 'Empleado creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empleado $empleado)
    {
        return view('empleados.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empleado $empleado)
    {
        $request->validate([
            'nombre' => 'required',
            'primer_apellido' => 'required',
            'dni' => 'required|regex:/^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKE]$/i|unique:empleados,dni,'.$empleado->id,
            'email' => 'required|email|unique:empleados,email,'.$empleado->id,
        ]);

        $empleado->update($request->all());

        return redirect()->route('oficinas.show', $empleado->oficina)->with('success', 'Empleado actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
