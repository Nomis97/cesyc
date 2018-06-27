<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Redirect;

class Pidarequest extends Request
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
                        'titulo' => 'required',

            'objetivoestrategico' => 'required',
                        'vinculacion' => 'required',
                                ];
    }
           public function messages()
    {
        return [
                         'titulo.required' => 'Es necesario un titulo',

             'objetivoestrategico.required' => 'Llene el campo Objetivo Estratégico',
                          'vinculacion.required' => 'Llene el campo vinculación',

];
}
}
