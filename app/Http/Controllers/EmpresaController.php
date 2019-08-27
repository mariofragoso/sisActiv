<?php

namespace sisActiv\Http\Controllers;

use Illuminate\Http\Request;

use sisActiv\Datos;
use sisActiv\Http\Requests;
use sisActiv\Empresa;
use Illuminate\Support\Facades\Redirect;
use sisActiv\Http\Requests\EmpresaFromRequest;
use DB;

class EmpresaController extends Controller
{
    public function __construct(){
    }
    public function index(Request $request){
        if ($request){
            $query=trim($request->get('searchText'));
            $empresas=DB::table('Empresa')
                ->where('Nombre', 'LIKE', '%'.$query.'%')
                ->orderBy('idempresa','desc')
                ->paginate(7);
            return view('principal.empresas.index',["empresas"=>$empresas,"searchText"=>$query]);
        }
    }
    public function create(){
        return view('principal.empresas.create');
    }
    public function store(EmpresaFromRequest $request){
        try{
            DB::beginTransaction();
            $datos = new Datos();
            $datos->Dirección=$request->get('Dirección');
            $datos->Telefono=$request->get('Telefono');
            $datos->Telefono2=$request->get('Telefono2');
            $datos->C_P=$request->get('C_P');
            $datos->Municipio=$request->get('Municipio');
            $datos->Correo=$request->get('Correo');
            $datos->Contacto=$request->get('Contacto');
            $datos->Pagina_web=$request->get('Pagina_web');
            $datos->save();

            $empresa=new Empresa();
            $empresa->iddatos = $datos->iddatos;
            $empresa->Nombre=$request->get('Nombre');
            $empresa->Sucursal=$request->get('Sucursal');
            $empresa->Imagen=$request->get('Imagen');
            $empresa->Identificacion=$request->get('Identificacion');

            $empresa->save();

            DB::commit();

        }catch(\Exception $e){
            DB::rollback();
            return Redirect::to('administrador/departamento');
        }
        return Redirect::to('principal/empresas');
    }
    public function show($id){
        return view("principal.empresas.show",["empresa"=>Empresa::findOrFail($id)]);
    }
    public function edit($id){
        return view("principal.empresas.edit",["empresa"=>Empresa::findOrFail($id)]);
    }
    public function update(EmpresaFromRequest $request,$id){
    }
    public function destroy($id){
        $empresas=DB::table('Empresa')->where('idempresa','=',$id)->delete();
        return Redirect::to('principal/empresas');
    }
}
