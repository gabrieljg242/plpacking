<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productovariacion extends Model
{
    use HasFactory;

    protected $table = 'producto_variaciones';

    protected $fillable = [
    	'nombre'
    ];

}