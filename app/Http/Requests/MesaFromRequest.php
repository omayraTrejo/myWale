<?php

namespace Elecciones2020\Http\Requests;

use Elecciones2020\Http\Requests\Request;

class MesaFromRequest extends Request
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
            'codigo_Mesa'=>'required',
            'NumeroDeMesa'=>'required',
            'Recinto'=>'required|max:50',
            'Municipio'=>'required|max:50',
            'provincia'=>'required|max:50',
            'departamento'=>'required|max:50',
           
        ];
    }
}
