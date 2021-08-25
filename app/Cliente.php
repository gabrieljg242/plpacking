<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';

    protected $fillable = [
    	'tipo_nacionalidad',
    	'tipo_cliente',
    	'razon_social',
    	'rubros',
    	'nombre_comercial',
    	'sector',
    	'ruc_dni',
    	'condicion_pago',
    	'direccion_fiscal',
    	'alerta_vencimiento',
    	'evaluacion_cliente',
    	'nombre_contacto',
    	'cargo',
    	'telefono_contacto',
    	'email_contacto',
    	'celular_contacto',
    	'fecha_nacimiento',
    	'codigo_cliente'
    ];

}
