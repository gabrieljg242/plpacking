<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';

    protected $fillable = [
    	'nombre'
    ];


    public function variaciones(){
    	return $this->hasMany(Productovariacion::class, 'producto_id','id');
    }

}