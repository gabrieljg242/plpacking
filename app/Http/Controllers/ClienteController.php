<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
    	return view('clientes.index');
    }

    public function show($id){
    	return view('clientes.show');
    }

    public function pedidos($id){
    	return view('clientes.pedidos');
    }
}
