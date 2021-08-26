<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Procedencia;

class ProcedenciaController extends Controller
{
    public function index(){
        $procedencias = Procedencia::orderBy('nombre','asc')->get();

    	return view('procedencias.index',compact('procedencias'));
    }

    public function show($id){
    	return view('procedencias.show');
    }

    public function create(){
    	return view('procedencias.create');
    }

    public function store(Request $request){
        Procedencia::create($request->all());
        return redirect('procedencia')->with('message', __('panel.dataSaved'));
    }

    public function edit($id)
    {
        $id = decrypt($id);
        $procedencia = Procedencia::findOrFail($id);
        return view('procedencias.edit', compact('procedencia'));
    }

    public function update(Request $request, $id)
    {
        $id = decrypt($id);
        $procedencia = Procedencia::findOrFail($id);

        $procedencia->update($request->all());
        return redirect('/procedencia')->with('message', __('panel.dataSaved'));
    }
}