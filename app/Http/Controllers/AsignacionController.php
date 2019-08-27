<?php

namespace sisActiv\Http\Controllers;

use Illuminate\Http\Request;

class AsignacionController extends Controller
{
    public function __construct(){
    }
    public function index(){
        return view('configurar.asignacion.index');
    }
    public function create(){
        return view('configurar.asignacion.create');
    }
    public function show(){
        return view('configurar.asignacion.index');
    }
    public function update( ){
        return view('configurar.asignacion.index');

    }
    public function destroy(){
        return view('configurar.asignacion.index');

    }
}
