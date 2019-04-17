<?php namespace App\Http\Controllers;

use App\User;
use App\Investigaciones;
use App\Proyectos;
use DB;
class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
       $usuarioactual=\Auth::user();
 $inves=Investigaciones::where('noti', 0)->count();
  $proy= Proyectos::select('titulo', 'created_at', 'idUsuario', 'pclave', 'id', 'ruta');
$indu=user::select('nombres');
  $inve=Investigaciones::union($proy)->select('titulo', 'created_at', 'idUsuario', 'pclave', 'id', 'ruta')->orderBy('created_at', 'desc')->get();

         $rutaarchivos= "../storage/archivos/";

		return view('home')->with("usuario",  $usuarioactual)
		->with("inves", $inves)
				->with("inve", $inve)
				->with("rutaarchivos", $rutaarchivos);
	}
    public function noti(){

Investigaciones::where('noti', 0)
->update(['noti' => 1]);

    }
}