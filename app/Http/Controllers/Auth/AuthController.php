<?php

namespace App\Http\Controllers\Auth;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\Http\Requests\Requestregis;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Session;
class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;


    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
        $this->middleware('guest', ['except' => 'getLogout']);
      
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
   


//login

       protected function getLogin()
    {
        return view("login");
    }


       

        public function postLogin(Request $request)
   {
    $this->validate($request, [
        'email' => 'required|exists:users',
        'password' => 'required',

    ]);



    $credentials = $request->only('email', 'password');

    if ($this->auth->attempt($credentials, $request->has('remember')))
    {

        $usuarioactual=\Auth::user();
       return view('home')->with("usuario",  $usuarioactual);
    }

    return redirect('login') 
    ->with('stado','Credenciales incorrectas.');

    }


//login

 //registro   


        protected function getRegister()
    {
        return view("registro");
    }


        

        protected function postRegister(Requestregis $request)

   {



    $data = $request;


    $user=new User;
    $user->nombres=$data['nombres'];
    $user->apellidos=$data['apellidos'];
    $user->email=$data['email'];
    $user->cedula=$data['cedula'];
    $user->nucleo=$data['nucleo'];
    $user->password=bcrypt($data['password']);
    $user->tipoUsuario=$data["tipousuario"];

    if($user->save()){

         return redirect('login')
         ->with('stado2','Se ha registrado correctamente.');
               
    }
   

   

}

//registro

protected function getLogout()

    {

        
        $this->auth->logout();

        Session::flush();

        return redirect('/login');

    }






}
