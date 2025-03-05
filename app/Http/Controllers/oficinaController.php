<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oficina;


class oficinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $oficinas = Oficina::all();
        return view('oficinaIndex', compact('oficinas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crearOficina');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'direccion' => 'nullable',
        ]);

        Oficina::create($request->all());

        return redirect()->route('oficina')->with('success', 'Oficina creada con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Oficina $oficina)
    {
        $empleados = $oficina->empleados;
        return view('mostrarOficina', compact('oficina'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
