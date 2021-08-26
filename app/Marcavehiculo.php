<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marcavehiculo extends Model
{
    use HasFactory;

    protected $table = 'marca_vehiculo';

    protected $fillable = [
    	'nombre'
    ];

}
