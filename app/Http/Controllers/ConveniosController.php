<?php

namespace App\Http\Controllers;

use App\Convenio;
use App\Http\Requests\ConvenioRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConveniosController extends Controller
{
    public function index(){
        $convenios = Convenio::all();
        return view('convenios.index', ['convenios'=>$convenios]);
    }

    public function create(){
        return view('convenios.create');
    }

    public function store(ConvenioRequest $request){
        $novo_convenio = $request->all();
        Convenio::create($novo_convenio);

        return redirect('convenios');
    }

    public function destroy($id){
        Convenio::find($id)->delete();
        return redirect ('convenios');
    }

    public function edit($id){
        $convenio = Convenio::find($id);
        return view('convenios.edit', compact('convenio'));
    }

    public function update(ConvenioRequest $request, $id){
        $convenio = Convenio::find($id)->update($request->all());
        return redirect('convenios');
    }
}
