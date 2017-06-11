<?php

namespace App\Http\Controllers;

use App\Paciente;
use App\Http\Requests\PacienteRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PacientesController extends Controller
{
    public function index(){
        $pacientes = Paciente::all();
        return view('pacientes.index', ['pacientes'=>$pacientes]);
    }

    public function create(){
        return view('pacientes.create');
    }

    public function store(PacienteRequest $request){
        $novo_paciente = $request->all();
        Paciente::create($novo_paciente);

        return redirect()->route('pacientes');
    }

    public function destroy($id){
        Paciente::find($id)->delete();
        return redirect()->route('pacientes');
    }

    public function edit($id){
        $paciente = Paciente::find($id);
        return view('pacientes.edit', compact('paciente'));
    }

    public function update(PacienteRequest $request, $id){
        $paciente = Paciente::find($id)->update($request->all());
        return redirect()->route('pacientes');
    }

}
