<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Redirect;

class Requestregis extends Request
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
                'apellidos' => 'required',
        'cedula' => 'required|unique:users,cedula|numeric',
        'email' => 'required|email|unique:users,email',
        'nucleo' => 'required',
        'password' => 'required|confirmed',
        'password_confirmation' => 'required',

              ];
    }


       public function messages()
    {
        return [
            
                        'nombres.required' =>  'Ingresar Nombres es obligatorio',
                         'apellidos.required' =>  'Ingresar Apellidos es obligatorio',
                         'cedula.required' =>  'Ingresar su Cedula es obligatorio',
                          'cedula.numeric' =>  'El campo cedula tiene que ser solo numerico',
                         'cedula.unique' =>  'Esta cedula ya exite en la base de datos',
                         'email.required' =>  'Ingresar su correo es obligatorio',
                         'email.unique' =>  'Este correo ya existe en la base de datos',
                         'nucleo.required' =>  'el descripcion es un campo obligatorio',
                         'password.required' =>  'Ingresar una contraseña',
                         'password_confirmation.required' =>  'Confirme la contraseña',
                         'password.confirmed' =>  'La contraseña no es igual',

                        
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
