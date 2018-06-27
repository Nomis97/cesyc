<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Redirect;

class comen extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
      * @param  array  $errors
     * @return \Symfony\Component\HttpFoundation\Response
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

                        'resu' => 'required',
                        'obj' => 'required',


                                  ];
    }


       public function messages()
    {
        return [
            
            'resu.required' =>  'El campo Resumen no puede estar vacio',
                        'obj.required' =>  'El campo Objetivo no puede estar vacio',

          
               ];
    }



     /**
     * Get the proper failed validation response for the request.
     *
     * @param  array  $errors
     * @return \Symfony\Component\HttpFoundation\Response
     
    public function response(array $errors)
    {
        
        return Redirect::to("/mostrar_errores")
                                        ->withInput($this->except($this->dontFlash))
                                        ->withErrors($errors, $this->errorBag);
    }
    */







}
