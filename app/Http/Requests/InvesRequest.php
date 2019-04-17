<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Redirect;

class InvesRequest extends Request
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
                        'lineal' => 'required|not_in:0',
                        'titulo_investigacion' => 'required',
                        'descripcion_investigacion' => 'required',
                        'tipo_investigacion' => 'required|not_in:0',
                        'objetivo_investigacion' => 'required',
                        'id_usuario1' => 'required_if:forma,2',
                        'face_investigacion' => 'required_if:estado_investigacion,2',
                        'face2' => 'required_with:face3',
                        'face3' => 'required_with:face4',
                        'fecha_investigacion' => 'required|date',
                        'f_investigacion' => 'required|date|after:fecha_investigacion',
                        'file' => 'required_if:estado_investigacion,3|mimes:pdf|max:50000',

              ];
    }


       public function messages()
    {
        return [
            'lineal.not_in' =>  'Seleccionar una linea.',
            'titulo_investigacion.required' =>  'Ingresa titulo es obligatorio.',
                        'titulo_investigacion.alpha_num' =>  'El titulo tiene que tener almenos un numero o una letra.',
            'descripcion_investigacion.required' =>  'El resumen es obligatorio.',
            'tipo_investigacion.not_in' =>  'Seleccionar un tipo de inv.',
            'objetivo_investigacion.required' =>  'El objetivo es necesario.',
                         'id_usuario1.required_if' =>  'Seleccione aunque sea un integrante "integrante 1".',
                         'face_investigacion.required_if' =>  'Llene aunque sea el campo "fase 1".',
                         'face2.required_with' =>  'Antes de llenar el campo "fase 3", llene el campo "fase 2".',
                         'face3.required_with' =>  'Antes de llenar el campo "fase 4", llene el campo "fase 3".',
                         'fecha_investigacion.required' =>  'La fecha de inicio es necesaria.',
                         'f_investigacion.required' =>  'Fecha de Culminación es necesaria.',
                         'fepro.required' =>  'La fecha de prorroga es necesario.',
                         'f_investigacion.after' =>  'No puedes definir una fecha antes de la fecha de inicio.',
                         'file.required_if' =>  'Si ya tiene una investigacion terminada, subala',

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
