<?php

namespace sisActiv\Http\Controllers;

use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    public function __construct(){

    }
    public function index(){
        return view('compras.proveedores.index');

    }
    public function create(){
        return view('compras.proveedores.create');

    }
    public function show(){
        return view('compras.proveedores');
    }
    public function update( ){
        return view('compras.proveedores');

    }
    public function destroy(){
        return view('compras.proveedores');

    }
}
