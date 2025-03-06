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
        return view('oficina/oficinaIndex', compact('oficinas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('oficina/crearOficina');
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

        return redirect()->route('oficina');
    }

    /**
     * Display the specified resource.
     */
    public function show(Oficina $oficina, string $id)
    {
        $oficina=Oficina::findOrFail($id);
        $empleados = $oficina->empleados;
        return view('oficina/mostrarOficina', compact('oficina'));
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
