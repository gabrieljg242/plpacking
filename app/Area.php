<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $table = 'areas';

    protected $fillable = [
    	'nombre','status'
    ];

    public function cargos(){
    	return $this->hasMany(Cargo::class, 'area_id','id');
    }
}
