<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlmacenController extends Controller
{
    public function index(){
    	return view('almacen.index');
    }

    public function show($id){
    	return view('almacen.show');
    }

    public function create(){
    	return view('almacen.create');
    }

    public function store(Request $request){
    	
    }

    public function edit($id)
    {
      
    }

    public function update(Request $request, $id)
    {
      
    }
}
