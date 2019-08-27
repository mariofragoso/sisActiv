<?php

namespace sisActiv\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function __construct(){

    }
    public function index(){
        return view('almacen.producto.index');

    }
    public function create(){
        return view('almacen.producto.create');

    }
    public function show(){
        return view('almacen.producto');
    }
    public function update( ){
        return view('almacen.producto');

    }
    public function destroy(){
        return view('almacen.producto');

    }
}
