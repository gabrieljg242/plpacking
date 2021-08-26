<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Almaceningreso extends Model
{
    use HasFactory;

    protected $table = 'almacen_ingresos';

    protected $fillable = [
    	'cliente_id',
    	'producto_id',
    	'producto_variacion_id',
    	'marca_vehiculo_id',
    	'tipo_veiculo_id',
    	'proveedor_id',
    	'procedencia_id',
    	'id_usuario_aprobacion',
    	'fecha_ingreso',
    	'numero_guia',
    	'fecha_proceso',
    	'numero_jaba',
    	'peso_guia',
    	'placa_vehiculo',
    	'peso_planta',
    	'numero_trazabilidad',
    	'diferencia_peso',
    	'fecha_aprobacion',
        'porcentage_diferencia',
        'clp',
    	'upated_at',
    	'created_at'
    ];

    public function cargos(){
    	return $this->hasMany(Cargo::class, 'area_id','id');
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class,'cliente_id','id');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class,'id_usuario_aprobacion','id');
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class,'producto_id','id');
    }

    public function producto_variacion()
    {
        return $this->belongsTo(Producto::class,'producto_variacion_id','id');
    }

    public function procedencia()
    {
        return $this->belongsTo(Procedencia::class,'procedencia_id','id');
    }

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class,'proveedor_id','id');
    }
}
