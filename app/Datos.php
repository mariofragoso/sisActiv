<?php

namespace sisActiv;

use Illuminate\Database\Eloquent\Model;

class Datos extends Model
{
    protected  $table='Datos';
    protected $primaryKey="iddatos";

    public $timestamps=false;

    protected $fillable =[
        'Nombre',
        'A_Paterno',
        'A_Materno',
        'Dirección',
        'Numero',
        'Telefono',
        'Telefono2	',
        'C_P',
        'Municipio',
        'Correo',
        'Contacto',
        'Pagina_web'


    ];
    protected $guarded= [

    ];
}
