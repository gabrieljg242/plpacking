<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Cliente;
use App\Producto;
use App\Productovariacion;
use App\Marcavehiculo;
use App\Tipovehiculo;
use App\Proveedor;
use App\Procedencia;
use App\Almaceningreso;

class AlmacenController extends Controller
{
    public function index(){

        $ingresos = Almaceningreso::orderBy('id','asc')->get();

    	return view('almacen.index',compact('ingresos'));
    }

    public function show($id){
    	return view('almacen.show');
    }

    public function create(){
        $clientes       = Cliente::pluck('razon_social','id');
        $productos      = Producto::orderBy('nombre','asc')->pluck('nombre','id');
        
    	return view('almacen.create',compact('clientes','productos'));
    }

    public function store(Request $request){
    	
        $ingreso = Almaceningreso::create($request->except(['aprobacion']));

        if($request->input('aprobacion') == 1){
            $ingreso->id_usuario_aprobacion = Auth::user()->id;
            $ingreso->fecha_aprobacion      = date("Y-m-d H:i:s");
            $ingreso->save();
        }

        return redirect('almacen')->with('message', __('panel.dataSaved'));
    }

    public function edit($id)
    {
        $id             = decrypt($id);
        $ingreso        = Almaceningreso::findOrFail($id);
        $clientes       = Cliente::pluck('razon_social','id');
        $productos      = Producto::orderBy('nombre','asc')->pluck('nombre','id');

        return view('almacen.edit', compact('ingreso','clientes','productos'));
    }

    public function update(Request $request, $id)
    {
        $id = decrypt($id);
        $ingreso = Almaceningreso::findOrFail($id);

        $ingreso->update($request->except(['aprobacion']));

        if($request->input('aprobacion') == 1){

            if(empty($ingreso->id_usuario_aprobacion)){
                $ingreso->id_usuario_aprobacion = Auth::user()->id;
                $ingreso->fecha_aprobacion      = date("Y-m-d H:i:s");
                $ingreso->save();
            }

        }else{
            $ingreso->id_usuario_aprobacion = NULL;
            $ingreso->fecha_aprobacion      = NULL;
            $ingreso->save();
        }

        return redirect('/almacen')->with('message', __('panel.dataSaved'));
    }

    public function apiGetFormproducto($form_id, $ingreso_id){
        $marca_veiculos     = Marcavehiculo::orderBy('nombre','asc')->pluck('nombre','id');
        $tipo_veiculos      = Tipovehiculo::orderBy('nombre','asc')->pluck('nombre','id');
        $proveedores        = Proveedor::orderBy('nombre','asc')->pluck('nombre','id');
        $procedencias       = Procedencia::orderBy('nombre','asc')->pluck('nombre','id');
        $variaciones        = Productovariacion::orderBy('nombre','asc')->pluck('nombre','id');

        if($ingreso_id > 0 && $ingreso_id != ''){

            $ingreso        = Almaceningreso::findOrFail($ingreso_id);
            $form = view('almacen.partials.form_' . $form_id, compact('ingreso','marca_veiculos','tipo_veiculos','proveedores','procedencias','variaciones'))->render();
            return json_encode(array('status' => 1, 'data' => $form ));
        
        }else{
            
            $form = view('almacen.partials.form_' . $form_id, compact('marca_veiculos','tipo_veiculos','proveedores','procedencias','variaciones'))->render();
            return json_encode(array('status' => 1, 'data' => $form ));
        
        }

    }
}
