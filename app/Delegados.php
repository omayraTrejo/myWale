<?php

namespace Elecciones2020;

use Illuminate\Database\Eloquent\Model;

class Delegados extends Model
{
    
    protected $table='delegado';

    protected $primaryKey='iddelegado';

    public $timestamps=false;


    protected $fillable =[
    	'Nombre_delegado',
    	'cedula',
    	'correo',
    	'idMesa',
    	'idpartido' ,
    	'estado'  
    ];

    protected $guarded =[

    ];

}
