<?php

namespace App\Http\Controllers;

use App\Models\CtlEstablecimiento;
use App\Models\MntMedicos;
use App\Models\MntPacientes;
use App\Models\MntRecetaMedicamento;
use App\Models\MntRecetas;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MntRecetasController extends Controller
{
    public function listadoRecetas(Request $request)
    {
        $recetaslistado = MntRecetas::get();

        return view('recetas.recetas_index', ['recetas' => $recetaslistado]);
    }

    public function catalogosVistaReceta(Request $request)
    {

        $establecimientosList = CtlEstablecimiento::get();
        $medicosList = MntMedicos::get();
        $pacientesList = MntPacientes::get();

        return view('recetas.recetas_create', ['establecimientos' => $establecimientosList, 'medicos' => $medicosList, 'pacientes' => $pacientesList]);
    }

    public function filtrarDetalleRecetaMedicamento(MntRecetas $receta)
    {
        $detalleRecetaMedicamento = MntRecetaMedicamento::with(['medicamento'])->where('id_receta', $receta->id)->get();

        return view('recetas.recetas_medicamentos', ['detalle_receta' => $detalleRecetaMedicamento, 'numero_receta'=>$receta->id]);
    }

    public function postRecetaMedica(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'numero' => 'required|integer',
        ], [
            'required' => 'El campo :attribute es obligatorio.',
            'integer' =>  'El campo :attribute debe ser un entero.',
        ]);

        // if ($validator->fails()) {
        //     return Redirect::back()->withErrors(['msg' => 'Debe de verificar los datos ingresados']);
        // }

        $newRecetaMedica = new MntRecetas();
        $newRecetaMedica->numero = $request->numero;
        $newRecetaMedica->id_medico = $request->id_medico;
        $newRecetaMedica->id_paciente = $request->id_paciente;
        $newRecetaMedica->save();

        return redirect()->route("recetas.listadoRecetas")->with('success', 'Receta creada existosamente!');
    }
}
