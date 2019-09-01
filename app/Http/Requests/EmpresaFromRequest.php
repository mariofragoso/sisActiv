<?php

namespace sisActiv\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpresaFromRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'Nombre'=>'required',
            'Sucursal'=>'required',
            'Imagen'=>'mimes:jpeg,bmp,png',
            'Dirección'=>'max:256',
            'Telefono'=>'max:256',
            'Telefono2'=>'max:256',
            'C_P'=>'max:256',
            'Municipio'=>'max:256',
            'Correo'=>'max:256',
            'Contacto'=>'max:256',
            'Pagina_web'=>'max:256',
            'Identificacion	'=>'max:256'

        ];
    }
}
