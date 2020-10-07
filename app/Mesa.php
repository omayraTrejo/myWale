<?php

namespace Elecciones2020;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    protected $table='mesa';

    protected $primaryKey='idMesa';

    public $timestamps=false;


    protected $fillable =[
    	'codigo_Mesa'
    	'NumeroDeMesa',
    	'Recinto',
    	'Municipio',
    	'Provincia',
    	'departamento'
    ];
}
