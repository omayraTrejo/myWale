<?php

namespace Elecciones2020\Http\Controllers;

use Illuminate\Http\Request;

use Elecciones2020\Http\Requests;
use Elecciones2020\Departamento;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Elecciones2020\Http\Requests\DepartamentoFromRequest;
use DB;
class ControllerDepartamento extends Controller
{
    
    public function __construct()
    {

    }


    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $departamento=DB::table('departamento')
            ->where('NombreDepartamento','LIKE','%'.$query.'%')
            ->where('condicion','=','1')
            ->orderBy('idpartamento','Asc')
            ->paginate(10);
            return view('departamentolista.ListaDepartamento.index',["departamento"=>$departamento,"searchText"=>$query]);
        }
    }
    public function create()
    {
        return view("departamentolista.ListaDepartamento.create");
    }

    public function store (DepartamentoFromRequest $request)
    {
        $departamento=new Departamento;
        $departamento->NombreDepartamento=$request->get('NombreDepartamento');
        $departamento->Descripcion=$request->get('Descripcion');
        $departamento->condicion = '1';
        $departamento->save();
        return Redirect::to('departamentolista/ListaDepartamento');

    }
    public function show($id)
    {
        return view("departamentolista.ListaDepartamento.show",["departamento"=>Departamento::findOrFail($id)]);
    }

    public function edit($id)
    {
        return view("departamentolista.ListaDepartamento.edit",["departamento"=>Departamento::findOrFail($id)]);
    }

    public function update(DepartamentoFromRequest $request,$id)
    {
    	$departamento = Departamento::findOrFail($id);
        $departamento->NombreDepartamento=$request->get('NombreDepartamento');
        $departamento->Descripcion=$request->get('Descripcion');
        $departamento->condicion='1';
        
        $departamento->update();
        return Redirect::to('departamentolista/ListaDepartamento');
    }
    public function destroy($id)
    {
        $departamento=Partido::findOrFail($id);
        $departamento->condicion='0';
        $departamento->update();
        return Redirect::to('departamento/ListaDepartamento');
    }

}
