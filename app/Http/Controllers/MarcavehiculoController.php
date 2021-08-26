<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marcavehiculo;

class MarcavehiculoController extends Controller
{
    public function index(){
        $marcavehiculos = Marcavehiculo::orderBy('nombre','asc')->get();

    	return view('marcavehiculo.index',compact('marcavehiculos'));
    }

    public function show($id){
    	return view('marcavehiculo.show');
    }

    public function create(){
    	return view('marcavehiculo.create');
    }

    public function store(Request $request){
        Marcavehiculo::create($request->all());
        return redirect('marcavehiculo')->with('message', __('panel.dataSaved'));
    }

    public function edit($id)
    {
        $id = decrypt($id);
        $marcavehiculo = Marcavehiculo::findOrFail($id);
        return view('marcavehiculo.edit', compact('marcavehiculo'));
    }

    public function update(Request $request, $id)
    {
        $id = decrypt($id);
        $marcavehiculo = Marcavehiculo::findOrFail($id);

        $marcavehiculo->update($request->all());
        return redirect('/marcavehiculo')->with('message', __('panel.dataSaved'));
    }
}