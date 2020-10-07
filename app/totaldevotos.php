<?php

namespace Elecciones2020;

use Illuminate\Database\Eloquent\Model;

class totaldevotos extends Model
{
    protected $table='totaldevotos';

    protected $primaryKey='idtotalDevotos';

    public $timestamps=false;


    protected $fillable =[
    	'idpartido',
    	'cantidadtotal',
    	'imagen'
    ];

    protected $guarded =[

    ];
}
