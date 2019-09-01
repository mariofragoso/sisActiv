<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Route::resource('administrador/departamento','DepartamentoController');
Route::resource('administrador/personal','PersonalController');
Route::resource('administrador/usuarios','UsuariosController');
Route::resource('almacen/consumible','ConsumibleController');
Route::resource('almacen/equipos','EquiposController');
Route::resource('almacen/producto','ProductoController');
Route::resource('almacen/tipo','TipoController');
Route::resource('compras/ordenes','TipoController');
Route::resource('compras/proveedores','ProveedoresController');
Route::resource('configurar/asignacion','AsignacionController');
Route::resource('configurar/backup','BackupController');
Route::resource('configurar/bitacoraacciones','BitacoraaccionesController');
Route::resource('principal/empresas','EmpresaController');
Route::resource('administrador/departamento/{id}','DepartamentoController');






