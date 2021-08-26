<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Area;
use App\Almaceningreso;

class AreaController extends Controller
{

	public function createSelectCargos($data){
		$select = '<option value="">Seleccione</option>';
		foreach ($data as $key => $value) {
			$select .= '<option value="' . $value->id . '">' . $value->nombre . '</option>';
		}
		return $select;
	}

    public function getAreaCargos($id){

    	$getArea 	= Area::where('id',$id)->get();
		$area 		= Area::find($id);
		$select 	= $this->createSelectCargos($getArea->count() > 0 ? $area->cargos : array());
    	return json_encode(array('status' => 1, 'data' => $select));     		
    }
}
