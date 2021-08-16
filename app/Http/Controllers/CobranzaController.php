<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobranzaController extends Controller
{
    public function index(){
    	return view('cobranzas.index');
    }

    public function show($id){
    	return view('cobranzas.show');
    }
}
