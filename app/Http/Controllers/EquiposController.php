<?php

namespace sisActiv\Http\Controllers;

use Illuminate\Http\Request;

class EquiposController extends Controller
{
    public function __construct(){

    }
    public function index(){
        return view('almacen.equipos.index');

    }
    public function create(){
        return view('almacen.equipos.create');

    }
    public function show(){
        return view('almacen.equipos');
    }
    public function update( ){
        return view('almacen.equipos');

    }
    public function destroy(){
        return view('almacen.equipos');

    }
}
