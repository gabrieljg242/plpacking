<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedor;

class ProveedorController extends Controller
{
    public function index(){
        $proveedores = Proveedor::orderBy('nombre','asc')->get();

    	return view('proveedores.index',compact('proveedores'));
    }

    public function show($id){
    	return view('proveedores.show');
    }

    public function create(){
    	return view('proveedores.create');
    }

    public function store(Request $request){
        Proveedor::create($request->all());
        return redirect('proveedor')->with('message', __('panel.dataSaved'));
    }

    public function edit($id)
    {
        $id = decrypt($id);
        $proveedor = Proveedor::findOrFail($id);
        return view('proveedores.edit', compact('proveedor'));
    }

    public function update(Request $request, $id)
    {
        $id = decrypt($id);
        $proveedor = Proveedor::findOrFail($id);

        $proveedor->update($request->all());
        return redirect('/proveedor')->with('message', __('panel.dataSaved'));
    }
}