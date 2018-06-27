<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Redirect;

class UsuarioRequest extends Request
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
                        'nombres' => 'required',
                        'cedula' => 'required|numeric',
                        'apellidos' => 'required',
                        'nucleo',
                        'ciudad' => 'Alpha',
                        'institucion' => 'Alpha',
                         'ocupacion' => 'Alpha',
                        'stadus',
                        'fecha_n',
                        'fecha1',
                        'fecha2',
                        'fecha3',
                        'tema1',
                        'tema2',
                        'tema3',
                        'tema4',
                        'tema5',
                        'tema6',
                        'tema7',
                        'tema8',
                        'tema9',
                        'tema10',
                        'tema11',
                        'tema12',
                        'tema13',
                        'tema14',
                        'tema15',
                                  ];
    }


       public function messages()
    {
        return [
            
            'nombres.required' =>  'Ingresar Nombres es obligatorio',
            'cedula.required' =>  'Ingresar Cédula es obligatorio',
            'cedula.numeric' =>  'La Cédula solo puede tener numeros',
            'apellidos.required' =>  'Ingresar Apellidos es obligatorio',
            'nucleo.required' =>  'el nucleo es un campo obligatorio',
            'ciudad.required' =>  'Ingresar una ciudad es obligatorio',
            'ciudad.alpha' =>  'la ciudad no puede contener numeros en su nombre',
            'email.required' =>  'Ingresar un email es obligatorio',
            'email.email' =>  'el email debe tener un formato valido',
            'institucion.required' =>  'Ingresar una institucion es obligatorio',
            'ocupacion.required' =>  'Ingresar la ocupacion es obligatorio',
            'tipousuario.numeric' =>  'Ingresar un tipo de usuario valido ides entre 1 y 2',
          
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
