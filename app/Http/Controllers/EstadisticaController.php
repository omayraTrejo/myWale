<?php

namespace Elecciones2020\Http\Controllers;

use Illuminate\Http\Request;

use Elecciones2020\Http\Requests;

use Elecciones2020\totaldevotos;
use Illuminate\Support\Facades\Redirect;
use Elecciones2020\Http\Requests\totalvotosFromRequest;
use DB;
class EstadisticaController extends Controller
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
            $categorias=DB::table('totaldevotos as vo')
            ->join('partido as a' , 'a.idpartido','=','vo.idPartido')
            ->select('vo.idtotalDevotos','a.sigla', 'vo.cantidatotal','a.imagen')
            ->where('a.sigla','LIKE','%'.$query.'%')
            ->orderBy('vo.idtotalDevotos','Desc')
            ->paginate(9);
            return view('votosGenerales.cantidadVotos.index',["categorias"=>$categorias,"searchText"=>$query]);
        }
    }
    public function create()
    {
       
    }
    public function store (totalvotosFromRequest $request)
    {
        

    }
    public function show($id)
    {
      
    }
    public function edit($id)
    {
        
    }
    public function update(totalvotosFromRequest $request,$id)
    {
    }
    public function destroy($id)
    {
    }


}
