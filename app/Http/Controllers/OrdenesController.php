<?php

namespace sisActiv\Http\Controllers;

use Illuminate\Http\Request;

class OrdenesController extends Controller
{
    public function __construct(){

    }
    public function index(){
        return view('compras.ordenes.index');

    }
    public function create(){
        return view('compras.ordenes.create');

    }
    public function show(){
        return view('compras.ordenes');
    }
    public function update( ){
        return view('compras.ordenes');

    }
    public function destroy(){
        return view('compras.ordenes');

    }
}
