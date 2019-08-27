<?php

namespace sisActiv\Http\Controllers;

use Illuminate\Http\Request;

class TipoController extends Controller
{
    public function __construct(){

    }
    public function index(){
        return view('almacen.tipo.index');

    }
    public function create(){
        return view('almacen.tipo.create');

    }
    public function show(){
        return view('almacen.tipo');
    }
    public function update( ){
        return view('almacen.tipo');

    }
    public function destroy(){
        return view('almacen.tipo');

    }
}
