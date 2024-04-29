<?php

namespace App\Http\Controllers;

use App\Models\MntMedicamentos;
use App\Models\MntRecetaMedicamento;
use App\Models\MntRecetas;
use Illuminate\Http\Request;

class MntRecetaMedicamentoController extends Controller
{
    public function catalogoRecetaMedicamentoList(){
        $listadoRecetas = MntRecetas::get();
        $listadoMedicamentos = MntMedicamentos::get();

        return view('receta_medicamento.receta_medicamento_create', ['recetas'=>$listadoRecetas, 'medicamentos'=>$listadoMedicamentos]);
    }


    public function listadoRecetaMedicamentos(){
        $listadoRecetaMedicamentos = MntRecetaMedicamento::with(['medicamento'])->get();

        return view('receta_medicamento.receta_medicamento_index', ['receta_medicamento'=> $listadoRecetaMedicamentos]);
    }


    public function creacionRecetaMedicamento(Request $request) {
       
        $newRecetaMedicamento = new MntRecetaMedicamento();
        $newRecetaMedicamento->cantidad = $request->cantidad;
        $newRecetaMedicamento->dosis = $request->dosis;
        $newRecetaMedicamento->indicaciones = $request->indicaciones;
        $newRecetaMedicamento->id_medicamento = $request->id_medicamento;
        $newRecetaMedicamento->id_receta = $request->id_receta;
        $newRecetaMedicamento->save();

        return redirect()->route("receta_medicamento.listadoRecetaMedicamentos")->with('success', 'Receta Medicamento creada existosamente!');

    }

    public function recetaMedicamentoDetalle(MntRecetaMedicamento $recetaMedicamento){

        $detalleRecetaMedicamento = MntRecetaMedicamento::with(['medicamento'])->where('id', $recetaMedicamento->id)->get();

        return view('receta_medicamento.receta_medicamento_detalle', ['detalle_receta_medicamento' => $detalleRecetaMedicamento, 'numero_receta'=>$recetaMedicamento->id]);

    }
}
