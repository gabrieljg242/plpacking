<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procedencia extends Model
{
    use HasFactory;

    protected $table = 'procedencias';

    protected $fillable = [
    	'nombre'
    ];

}
