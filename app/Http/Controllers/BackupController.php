<?php

namespace sisActiv\Http\Controllers;

use Illuminate\Http\Request;

class BackupController extends Controller
{
    public function __construct(){
    }
    public function index(){
        return view('configurar.backup.index');
    }
    public function create(){
        return view('configurar.backup.create');
    }
    public function show(){
        return view('configurar.backup.index');
    }
    public function update( ){
        return view('configurar.backup.index');
    }
    public function destroy(){
        return view('configurar.backup.index');
    }
}
