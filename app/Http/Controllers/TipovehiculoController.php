<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipovehiculo;

class TipovehiculoController extends Controller
{
    public function index(){
        $tipovehiculos = Tipovehiculo::orderBy('nombre','asc')->get();

    	return view('tipovehiculo.index',compact('tipovehiculos'));
    }

    public function show($id){
    	return view('tipovehiculo.show');
    }

    public function create(){
    	return view('tipovehiculo.create');
    }

    public function store(Request $request){
        Tipovehiculo::create($request->all());
        return redirect('tipovehiculo')->with('message', __('panel.dataSaved'));
    }

    public function edit($id)
    {
        $id = decrypt($id);
        $tipovehiculo = Tipovehiculo::findOrFail($id);
        return view('tipovehiculo.edit', compact('tipovehiculo'));
    }

    public function update(Request $request, $id)
    {
        $id = decrypt($id);
        $tipovehiculo = Tipovehiculo::findOrFail($id);

        $tipovehiculo->update($request->all());
        return redirect('/tipovehiculo')->with('message', __('panel.dataSaved'));
    }
}