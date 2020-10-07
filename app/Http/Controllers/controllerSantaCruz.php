<?php

namespace Elecciones2020\Http\Controllers;

use Illuminate\Http\Request;

use Elecciones2020\Http\Requests;

use Elecciones2020\Votos;
use Illuminate\Support\Facades\Redirect;
use Elecciones2020\Http\Requests\VotosFromRequest;
use DB;

class controllerSantaCruz extends Controller
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
            $santaCruz=DB::table('votosdespartamentales as vo')
            ->join('partido as a' , 'a.idpartido','=','vo.idPartido')
            ->select('vo.idvotosDespartamentales','a.Nombre','a.sigla', 'vo.cantidadVotos' ,'vo.departamento')
            ->where('vo.departamento','LIKE','%'.$query.'%')
            ->where('vo.departamento','=','SANTA CRUZ')
            ->orderBy('vo.idvotosdespartamentales','Asc')
            ->paginate(7);
            return view('departamento.SANTA CRUZ.index',["santaCruz"=>$santaCruz,"searchText"=>$query]);
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
