<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\oficinaController;
use App\Http\Controllers\empleadoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('oficina', [OficinaController::class, 'index'])->name('oficina');
Route::get('/oficinas/{id}', [OficinaController::class, 'show'])->name('mostrarOficina');
Route::get('crearOficina', [OficinaController::class, 'create'])->name('crearOficina');
Route::put('/oficinas', [OficinaController::class, 'store'])->name('guardarOficina');
Route::get('crearEmpleado', [EmpleadoController::class, 'create'])->name('crearEmpleado');
Route::post('/oficinas/{oficina}/empleados', [EmpleadoController::class, 'store'])->name('guardarEmpleado');
Route::get('/empleados/{empleado}/', [EmpleadoController::class, 'edit'])->name('editarEmpleado');
Route::put('/empleados/{empleado}', [EmpleadoController::class, 'update'])->name('actualizarEmpleado');


