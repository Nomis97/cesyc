<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Redirect;

class editinvRequest extends Request
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

                        'face_investigacion' => 'required_if:estado_investigacion,2',
                        'face2' => 'required_with:face3',
                        'face3' => 'required_with:face4',

              ];
    }


       public function messages()
    {
        return [

           
                         'face_investigacion.required_if' =>  'Llene aunque sea el campo "fase 1".',
                         'face2.required_with' =>  'Antes de llenar el campo "fase 3", llene el campo "fase 2".',
                         'face3.required_with' =>  'Antes de llenar el campo "fase 4", llene el campo "fase 3".',
                         
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
