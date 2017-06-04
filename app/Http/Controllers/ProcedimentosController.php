<?php

namespace App\Http\Controllers;

use App\Procedimento;
use App\Http\Requests\ProcedimentoRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProcedimentosController extends Controller
{
    public function index(){
        $procedimentos = Procedimento::all();
        return view('procedimentos.index', ['procedimentos'=>$procedimentos]);
    }

    public function create(){
        return view('procedimentos.create');
    }

    public function store(ProcedimentoRequest $request){
        $novo_procedimento = $request->all();
        Procedimento::create($novo_procedimento);

        return redirect('procedimentos');
    }

    public function destroy($id){
        Procedimento::find($id)->delete();
        return redirect ('procedimentos');
    }

    public function edit($id){
        $procedimento = Procedimento::find($id);
        return view('procedimentos.edit', compact('procedimento'));
    }

    public function update(ProcedimentoRequest $request, $id){
        $procedimento = Procedimento::find($id)->update($request->all());
        return redirect('procedimentos');
    }
}
