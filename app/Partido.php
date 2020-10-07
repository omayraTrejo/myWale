<?php

namespace Elecciones2020;

use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
   protected $table='partido';

    protected $primaryKey='idpartido';

    public $timestamps=false;


    protected $fillable =[
    	'Nombre',
    	'sigla',
    	'imagen',
    	'condicion'
    ];
}
