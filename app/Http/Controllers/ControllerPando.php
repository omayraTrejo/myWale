<?php

namespace Elecciones2020\Http\Controllers;

use Illuminate\Http\Request;

use Elecciones2020\Http\Requests;
use Elecciones2020\Votos;
use Illuminate\Support\Facades\Redirect;
use Elecciones2020\Http\Requests\VotosFromRequest;
use DB;


class ControllerPando extends Controller
{
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $pando=DB::table('votosdespartamentales as vo')
            ->join('partido as a' , 'a.idpartido','=','vo.idPartido')
            ->select('vo.idvotosDespartamentales','a.Nombre','a.sigla', 'vo.cantidadVotos' ,'vo.departamento')
            ->where('vo.departamento','LIKE','%'.$query.'%')
            ->where('vo.departamento','=','PANDO')
            ->orderBy('vo.idvotosdespartamentales','desc')
            ->paginate(7);
            return view('departamento.PANDO.index',["pando"=>$pando,"searchText"=>$query]);
        }
    }
    public function create()
    {
        
    }
    public function store (CategoriaFormRequest $request)
    {
        

    }
    public function show($id)
    {
        
    }
    public function edit($id)
    {
        
    }
    public function update(CategoriaFormRequest $request,$id)
    {
        
    }
    public function destroy($id)
    {
    }
}
