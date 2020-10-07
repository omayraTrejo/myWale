<?php

namespace Elecciones2020;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table='departamento';

    protected $primaryKey='idpartamento';

    public $timestamps=false;


    protected $fillable =[
    	'NombreDepartamento',
    	'Descripcion',
    	'condicion'
    ];

    protected $guarded =[

    ];
}
