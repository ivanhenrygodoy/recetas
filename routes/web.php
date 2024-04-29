<?php

use App\Http\Controllers\MntPacienteController;
use App\Http\Controllers\MntRecetaMedicamentoController;
use App\Http\Controllers\MntRecetasController;
use Illuminate\Support\Facades\Route;

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

Route::get('/catalogos-recetas',[MntRecetasController::class, 'catalogosVistaReceta'])->name('recetas.catalogosVistaReceta');
Route::get('/listado-recetas',[MntRecetasController::class, 'listadoRecetas'])->name('recetas.listadoRecetas');
Route::post('/registro-recetas', [MntRecetasController::class, 'postRecetaMedica'])->name('recetas.postRecetaMedica');
Route::get('/receta-medicamento-detalle/{receta}',[MntRecetasController::class, 'filtrarDetalleRecetaMedicamento'])->name('recetas.filtrarDetalleRecetaMedicamento');

Route::get('/catalogos-receta-medicamento', [MntRecetaMedicamentoController::class, 'catalogoRecetaMedicamentoList'])->name('receta_medicamento.catalogoRecetaMedicamentoList');
Route::get('/listado-receta-medicamento', [MntRecetaMedicamentoController::class, 'listadoRecetaMedicamentos'])->name('receta_medicamento.listadoRecetaMedicamentos');
Route::post('/registro-receta-medicamento', [MntRecetaMedicamentoController::class, 'creacionRecetaMedicamento'])->name('receta_medicamento.creacionRecetaMedicamento');
Route::get('/receta-medicamento_detalle/{recetaMedicamento}', [MntRecetaMedicamentoController::class, 'recetaMedicamentoDetalle'])->name('receta_medicamento.recetaMedicamentoDetalle');

Route::get('/listado-pacientes', [MntPacienteController::class, 'listadoPacientes'])->name('paciente.listadoPacientes');
Route::post('/registrar-pacientes', [MntPacienteController::class, 'crearPaciente'])->name('paciente.crearPaciente');
Route::get('/listado-general-pacientes', [MntPacienteController::class, 'createPacientesView'])->name('paciente.createPacientesView');











