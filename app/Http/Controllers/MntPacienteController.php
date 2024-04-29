<?php

namespace App\Http\Controllers;

use App\Models\MntPacientes;
use Illuminate\Http\Request;

class MntPacienteController extends Controller
{
    public function listadoPacientes(){
        $listadoPacientes = MntPacientes::get();

        return view('paciente.paciente_index',['pacientes'=>$listadoPacientes]);
    }

    public function createPacientesView(){
       $listadoPacientes = MntPacientes::get();

       return view('paciente.paciente_create', ['pacientes'=>$listadoPacientes]);
    }

    public function crearPaciente(Request $request) {

        $newPaciente = new MntPacientes();
        $newPaciente->nombres = $request->nombres;
        $newPaciente->apellidos = $request->apellidos;
        $newPaciente->fecha_nacimiento = $request->fecha_nacimiento;
        $newPaciente->save();
        
        return redirect()->route("paciente.listadoPacientes")->with('success', 'Paciente creado existosamente!');

    }
}
