<?php

namespace sisActiv;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected  $table='Empresa';
    protected $primaryKey="idempresa";

    public $timestamps=false;

    protected $fillable =[
        'Nombre',
        'Sucursal',
        'Imagen',
        'iddatos',
        'Identificacion'
    ];
    protected $guarded= [

    ];
}
