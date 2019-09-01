<?php

namespace sisActiv\Http\Controllers;

use Illuminate\Http\Request;
use sisActiv\Empresa;
use sisActiv\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use sisActiv\Http\Requests\DepartamentoFormRequest;
use DB;
use sisActiv\Departamento;

class DepartamentoController extends Controller
{
    public function __construct(){

    }
    public function index(Request $request, $id){

            /*$query=trim($request->get('searchText'));
            $departamentos=DB::table('Departamento')
                ->where('Nombre', 'LIKE', '%'.$query.'%')
                ->orderBy('iddepartamento','desc')
                ->paginate(7);*/
        $departamentos=DB::table('Departamento')
            ->where('idempresa','=', $id)
            ->orderBy('iddepartamento','desc')
            ->paginate(7);
            return view('administrador.departamento.index',["departamentos"=>$departamentos,'id'=>$id]);

            /**$empresas=DB::table('Empresa')
            ->where('Nombre', 'LIKE', '%'.$query.'%')
            ->orderBy('idempresa','desc')
            ->paginate(7);
            return view('principal.empresas.index',["empresas"=>$empresas,"searchText"=>$query]);***/

    }
    public function create($id){
        $empresa=DB::table('Empresa')->where('idempresa','=',$id)->first();
        return view('administrador.departamento.create',['empresa'=>$empresa]);
    }
    public function store($id,DepartamentoFormRequest $request){
        $departamentos = new Departamento();
        $departamentos->Nombre=$request->get('Nombre');
        $departamentos->Descripcion=$request->get('Descripcion');
        $departamentos->Identificacion=$request->get('Identificacion');
        $departamentos->idempresa=$request->get('idempresa');
        $departamentos->save();
        return Redirect::to('administrador/departamento/'.$id);

    }
    public function show($id){
        return view("administrador.departamento.show",["departamentos"=>Departamento::findOrFail($id)]);

    }
    public function edit(){
    }

    public function update(){

    }
    public function destroy($id){
        $departamentos=DB::table('Departamento')->where('iddepartamento','=',$id)->delete();
        return Redirect::to('administrador/departamento');

    }
}
