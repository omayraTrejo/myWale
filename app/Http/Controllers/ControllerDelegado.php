<?php

namespace Elecciones2020\Http\Controllers;

use Illuminate\Http\Request;

use Elecciones2020\Http\Requests;
use Elecciones2020\Delegados;
use Illuminate\Support\Facades\Redirect;
use Elecciones2020\Http\Requests\DelegadosFromRequest;
use DB;

class ControllerDelegado extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        
    }
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $delegado=DB::table('delegado as p')
            ->join('mesa as m','p.idMesa','=','m.idMesa')
            ->join('partido as pa','p.idPartido','=','pa.idpartido')
            ->select('p.iddelegados','p.Nombre_delegado','p.cedula', 'p.correo',
            	'm.codigo_Mesa as idMesa' , 'pa.Nombre as idPartido')
            ->where('p.Nombre_delegado','LIKE','%'.$query.'%')
            ->where('p.estado','=','1')
            ->orderBy('p.iddelegados','desc')
            ->paginate(7);
            return view('delegado.Lista.index',["delegado"=>$delegado,"searchText"=>$query]);
        }
    }
    public function create()
    {
     
        $Mesa = DB::table('mesa')->where('condicion','=','1')->get();
        $Partido = DB::table('partido')->where('condicion','=','1')->get();
        return view("delegado.Lista.create",["Mesa"=>$Mesa , "Partido"=>$Partido]);
    }

    public function store (DelegadosFromRequest  $request)
    {
        $delegado=new Delegados;
        $delegado->Nombre_delegado=$request->get('Nombre_delegado');
        $delegado->cedula=$request->get('cedula');
        $delegado->correo=$request->get('correo');
        $delegado->idPartido=$request->get('idPartido');
        $delegado->idMesa=$request->get('idMesa');
        $delegado->estado ='1';
        $delegado->save();
        return Redirect::to('delegado/Lista');

    }

    public function show($id)
    {
        return view("delegado.Lista.show",["delegado"=>Delegados::findOrFail($id)]);
    }
    public function edit($id)
    {
        $delegado = Delegados::findOrFail($id);
        $mesa=DB::table('mesa')->where('condicion','=','1')->get();
        $Partido = DB::table('partido')->where('condicion','=','1')->get();
        return view("delegado.Lista.edit",["delegado"=>$delegado , "mesa" =>$mesa,"Partido" =>$Partido]);
    }
    public function update(DelegadosFromRequest  $request,$id)
    {
        $delegado=Delegados::findOrFail($id);
        $delegado->Nombre_delegado=$request->get('Nombre_delegado');
        $delegado->cedula=$request->get('cedula');
        $delegado->correo=$request->get('correo');
        $delegado->idPartido=$request->get('idPartido');
        $delegado->idMesa=$request->get('idMesa');
        $delegado->update();
        return Redirect::to('delegado/Lista');
    }
    public function destroy($id)
    {
        $delegado=Delegados::findOrFail($id);
        $delegado->estado='0';
        $delegado->update();
        return Redirect::to('delegado/Lista');
    }

    public function imprimir()
    {
        $pdf =PDF::loadView('jurado/lista/pdf',[]);
        return $pdf->download("documento.pdf");

    }
}
