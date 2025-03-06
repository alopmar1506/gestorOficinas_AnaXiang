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
Route::get('/oficina/{id}', [OficinaController::class, 'show'])->name('mostrarOficina');
Route::get('crearOficina', [OficinaController::class, 'create'])->name('crearOficina');
Route::put('/oficinas', [OficinaController::class, 'store'])->name('guardarOficina');

Route::get('oficina/{oficina}/empleados/create', [EmpleadoController::class, 'create'])->name('crearEmpleados');
Route::post('oficinas/{oficina}/empleados', [EmpleadoController::class, 'store'])->name('guardarEmpleados');
Route::get('/empleado/{empleado}/', [EmpleadoController::class, 'edit'])->name('editarEmpleados');
Route::put('/empleado/{empleado}', [EmpleadoController::class, 'update'])->name('actualizarEmpleados');


