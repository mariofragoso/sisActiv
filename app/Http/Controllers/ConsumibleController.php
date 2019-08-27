<?php

namespace sisActiv\Http\Controllers;

use Illuminate\Http\Request;

class ConsumibleController extends Controller
{
    public function __construct(){
    }
    public function index(){
        return view('almacen.consumible.index');
    }
    public function create(){
        return view('almacen.consumible.create');
    }
    public function show(){
        return view('almacen.consumible.index');
    }
    public function update( ){
        return view('almacen.consumible.index');
    }
    public function destroy(){
        return view('almacen.consumible.index');
    }
}
