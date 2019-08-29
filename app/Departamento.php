<?php

namespace sisActiv;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected  $table='Departamento';
    protected $primaryKey="iddepartamento";

    public $timestamps=false;

    protected $fillable =[
        'Nombre',
        'Descripcion',
        'Identificacion'
    ];
    protected $guarded= [

    ];

}
