<?php

namespace sisActiv\Http\Controllers;

use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function __construct(){

    }
    public function index(){
        return view('administrador.personal.index');

    }
    public function create(){
        return view('administrador.personal.create');

    }
    public function show(){

    }
    public function update( ){

    }
    public function destroy(){

    }
}
