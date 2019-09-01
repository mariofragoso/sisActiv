<?php

namespace sisActiv\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function __construct(){

    }
    public function index(){

        return view('administrador.usuarios.index');

    }
    public function create(){
        return view('administrador.usuarios.create');

    }
    public function show(){
        return view('administrador.usuarios');
    }
    public function update( ){
        return view('administrador.usuarios');

    }
    public function destroy(){
        return view('administrador.usuarios');

    }
}
