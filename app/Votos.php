<?php

namespace Elecciones2020;

use Illuminate\Database\Eloquent\Model;

class Votos extends Model
{
    protected $table='votosdespartamentales';

    protected $primaryKey='idvotosDespartamentales';

    public $timestamps=false;


    protected $fillable =[
    	'cantidadVotos',
    	'despartamento',
    	'idPartido'
    ];

    protected $guarded =[

    ];

}
