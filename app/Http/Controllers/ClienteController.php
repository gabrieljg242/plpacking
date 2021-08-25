<?php

namespace App\Http\Controllers;
use App\Area;
use App\Cliente;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
    	$clientes = Cliente::orderBy('nombre_comercial','asc')->get();
    	return view('clientes.index',compact('clientes'));
    }

    public function show($id){
    	return view('clientes.show');
    }

    public function create(){
    	return view('clientes.create');
    }

    public function store(Request $request){
    	$contact = Cliente::create($request->all());
        return redirect('clientes')->with('message', __('panel.dataSaved'));
    }

    public function edit($id)
    {
        $id = decrypt($id);
        $cliente = Cliente::findOrFail($id);
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, $id)
    {
        $id = decrypt($id);
        $cliente = Cliente::findOrFail($id);

        $cliente->update($request->all());
        return redirect('/clientes')->with('message', __('panel.dataSaved'));
    }

    public function pedidos($id){
    	return view('clientes.pedidos');
    }
}
