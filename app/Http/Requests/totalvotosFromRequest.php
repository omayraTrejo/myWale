<?php

namespace Elecciones2020\Http\Requests;

use Elecciones2020\Http\Requests\Request;

class totalvotosFromRequest extends Request
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
            'idPartido'=>'required',
            'cantidatotal'=>'required',
            'imagen'=>'mimes:jpeg,bmp,jpg,JPG,png'
           
        ];
    }
}
