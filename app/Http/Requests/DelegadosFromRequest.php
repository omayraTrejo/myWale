<?php

namespace Elecciones2020\Http\Requests;

use Elecciones2020\Http\Requests\Request;

class DelegadosFromRequest extends Request
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
            'Nombre_delegado'=>'required|max:50',
            'cedula'=>'required',
            'correo'=>'required|max:50',
            'idPartido'=>'required',
            'idMesa'=>'required'
        ];
    }
}
