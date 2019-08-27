<?php

namespace sisActiv\Http\Controllers;

use Illuminate\Http\Request;

class BitacoraaccionesController extends Controller
{
    public function __construct(){
    }
    public function index(){
        return view('configurar.bitacoraacciones.index');
    }
    public function create(){
        return view('configurar.bitacoraacciones.create');
    }
    public function show(){
        return view('configurar.bitacoraacciones.index');
    }
    public function update( ){
        return view('configurar.bitacoraacciones.index');
    }
    public function destroy(){
        return view('configurar.bitacoraacciones.index');
    }
}
