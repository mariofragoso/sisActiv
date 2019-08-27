<?php

namespace sisActiv\Http\Controllers;

use Illuminate\Http\Request;
use sisActiv\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use sisActiv\Http\Requests\DepartamentoFormRequest;
use DB;

class DepartamentoController extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
        if ($request){
            $query=trim($request->get('searchText'));
            $departamentos=DB::table('Departamento as d')
                ->join('Empresa as e', 'd.iddepartamento','=','e.idempresa')
                ->select('d.Nombre','d.Descripcion')
                ->where('d.Nombre', 'LIKE', '%'.$query.'%')
                ->orderBy('iddepartamento','desc')
                ->paginate(7);
            return view('administrador.departamento.index',["departamentos"=>$departamentos,"searchText"=>$query]);

            /**$empresas=DB::table('Empresa')
            ->where('Nombre', 'LIKE', '%'.$query.'%')
            ->orderBy('idempresa','desc')
            ->paginate(7);
            return view('principal.empresas.index',["empresas"=>$empresas,"searchText"=>$query]);***/
        }
    }
    public function create(){
        return view('principal.empresas.create');
    }
    public function store(){
    }
    public function show(){
    }
    public function edit(){
    }

    public function update(){

    }
    public function destroy(){

    }
}
