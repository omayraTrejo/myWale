<?php

namespace Elecciones2020\Http\Controllers;

use Illuminate\Http\Request;

use Elecciones2020\Http\Requests;

use Elecciones2020\Mesa;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Elecciones2020\Http\Requests\MesaFromRequest;
use DB;
use PDF;

class ControllerMesa extends Controller
{


    public function __construct()
    {

    }


    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $mesa=DB::table('mesa')
            ->where('codigo_Mesa','LIKE','%'.$query.'%')
            ->where('condicion','=','1')
            ->orderBy('idMesa','Desc')
            ->paginate(10);
            return view('mesa.ListaMesa.index',["mesa"=>$mesa,"searchText"=>$query]);
        }
    }

    public function imprimir(){
       $pdf =PDF::loadView('pdf/totaldevotos',[]);
        return $pdf->download("documento.pdf");

    } 

    public function create()
    {
        return view("mesa.ListaMesa.create");
    }

    public function store (PartidoFormRequest $request)
    {
        $partidos=new Partido;
        $partidos->Nombre=$request->get('Nombre');
        $partidos->Sigla=$request->get('sigla');
        
        if(Input::hasFile('imagen')){
        	$file = Input::file('imagen');
            $file->move(public_path().'/imagenes/partidos/',$file->getClientOriginalName());
            $partidos->Imagen =$file->getClientOriginalName();
        }

        $partidos->condicion = '1';
        $partidos->save();
        return Redirect::to('partido/ListaPartidos');

    }
    public function show($id)
    {
        return view("partido.ListaPartidos.show",["partidos"=>Partido::findOrFail($id)]);
    }
    public function edit($id)
    {
        return view("partido.ListaPartidos.edit",["partidos"=>Partido::findOrFail($id)]);
    }
    public function update(PartidoFormRequest $request,$id)
    {
    	$partidos = Partido::findOrFail($id);
        $partidos->Nombre=$request->get('Nombre');
        $partidos->Sigla=$request->get('sigla');
        $partidos->condicion='1';
        if(Input::hasFile('imagen')){
        	$file = Input::file('imagen');
            $file->move(public_path().'/imagenes/partidos/',$file->getClientOriginalName());
            $partidos->Imagen =$file->getClientOriginalName();
        }
        
        $partidos->update();
        return Redirect::to('partido/ListaPartidos');
    }
    public function destroy($id)
    {
        $partidos=Partido::findOrFail($id);
        $partidos->condicion='0';
        $partidos->update();
        return Redirect::to('partido/ListaPartidos');
    }

}
