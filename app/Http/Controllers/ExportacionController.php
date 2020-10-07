<?php

namespace Elecciones2020\Http\Controllers;

use Illuminate\Http\Request;

use Elecciones2020\Http\Requests;
use Elecciones2020\User;
use Elecciones2020\totaldevotos;
use Maatwebsite\Excel\Facades\Excel;
use DB;



class ExportacionController extends Controller
{

	/*IMPORTA DATOS EN EXCEL DE LA TABLA DE TOTAL_DE_VOTOS 
      IMPORTA DATOS EN PDF DE LA TABLA DE TOTAL_DE_VOTOS
	*/

    public function getExcel()
    {
    	$user=totaldevotos::all();
    	Excel::create('Export Data',function($excel)use($user){
    		    $excel->sheet('Sheet 1' , function($sheet)use($user){
    			$sheet->fromArray($user);
    			$sheet->cells('A1:E1',function($cells){
    			 $cells->setFont(array('bold'=>true));
    			 $cells->setAlignment('center');
    			});
    		});
    	})->export('xlsx');
     
    }


    /*IMPORTA DATOS EN EXCEL DE LA TABLA DE TOTAL_DE_VOTOS */

}
