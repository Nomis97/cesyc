<?php namespace App\Http\Controllers;

use App\User;
use Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Excel;
use App\Nucleo;
use App\pfg;
use App\Lineas;
use App\TipoUsuario;
use App\Educacion;
use App\TipoEducacion;
use App\Publicaciones;
use App\TipoPublicaciones;
use App\TipoInvestigaciones;
use App\Proyectos;
use App\Investigaciones;
use App\coment;
use Mail;
use App\Http\Requests\UsuarioRequest;
use Illuminate\Http\JsonResponse;
use Carbon\Carbon;


class UsuariosController extends Controller {

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
                        Carbon::setLocale('es');

	}


   public function form_nuevo_usuario()
	{
        

        $tiposusuario=TipoUsuario::all();
		return view('formularios.form_nuevo_usuario')->with("tiposusuario",$tiposusuario);
	}


	public function listado_usuarios()
    {
        $usuarioactual=\Auth::user();
        $usuarios= User::orderBy('id', 'desc')->where('tipoUsuario','1')->paginate(10);
                $pro= Proyectos::all();  

        $nucleos=Nucleo::all();
        return view('listados.listado_usuarios')
        ->with("nucleos", $nucleos )
                ->with("pro", $pro )

        ->with("usuarios", $usuarios )
        ->with("usuario_actual", $usuarioactual );     
	

}
 public function lista6($nucles)
    {
                $actual=\Auth::user();

        $usuarioactual=\Auth::user();
                $nucleo=\Auth::user();
                $nucle=$nucleo->name;

                if ($actual->tipoUsuario==3) {
        $usuarios= User::where('nucleo',$nucles)->paginate(10);
                }elseif ($actual->tipoUsuario==2 && $nucle!=0)
                 {$usuarios= User::where('nucleo',$nucle)->paginate(10);  
                 }else{$usuarios= User::paginate(10);}

        $nucleos=Nucleo::all();
        return view('listadonucleo.lista6')
        ->with("nucleos", $nucleos )
        ->with("usuarios", $usuarios )
        ->with("usuario_actual", $usuarioactual );     
    

}	//presenta el formulario para nuevo usuario
	public function agregar_nuevo_usuario(Request $request)
	{

        $data=$request->all();


        $reglas = array('nombres' => 'required',
        	            'apellidos' => 'required',
        	            'nucleo',
                        'cedula'=> 'required|Numeric',
        	            'ciudad' =>'Alpha',
        	            'email' => 'required|Email|Unique:users',
        	            'institucion' => 'Alpha',
        	            'ocupacion' => 'Alpha',
        	            'tipousuario' => 'required|Numeric|min:1|max:2',
        	            'password' => 'required|min:8',
                        'password_confirmation' => 'same:password|required_with:password',

        	            );
        $mensajes= array(
                    'nombres.required' =>  'Ingresar Nombres es obligatorio',
                        'nombres.Alpha' =>  'El campo nombres debe de tener solo letras',
        	             'apellidos.required' =>  'Ingresar Apellidos es obligatorio',
                         'cedula.required' =>  'Ingresar Cédula es obligatorio',
                         'cedula.numeric' =>  'La Cédula solo puede tener numeros',
        	             'nucleo.required' =>  'el nucleo es obligatorio',
        	             'ciudad.required' =>  'Ingresar una ciudad es obligatorio',
        	             'ciudad.alpha' =>  'la ciudad no puede contener numeros en su nombre',
        	             'email.required' =>  'El correo es Necesario',
        	             'email.email' =>  'el email debe tener un formato valido',
        	             'email.unique' =>  'El correo ya existe',
        	             'institucion.required' =>  'Ingresar una institucion es obligatorio',
        	             'ocupacion.required' =>  'Ingresar la ocupacion es obligatorio',
        	             'tipousuario.numeric' =>  'Ingresar un tipo de usuario valido ides entre 1 y 2',
        	             'password.required' =>  'La Contraseña es obligatorio',        	                     	             
        	             'password.min' =>  'En la Contraseña se requiere almenos 8 caracteres como minimo',
                         'password_confirmation.required_with' =>  'Repita la contraseña',
                            'password_confirmation.same' =>  'La contraseña no coincide',

        	             );
        

        $validacion = Validator::make($data, $reglas, $mensajes);
        
        if ($validacion->fails())
        {
			 $errores = $validacion->errors(); 
			 return new JsonResponse($errores, 422); 
	         /*return view("mensajes.msj_rechazado")->with("msj","Existen errores de validación")
			                                      ->with("errors",$errores);




        $input  = array('file' => $archivo) ;
        $reglas = array('file' => 'required|mimes:pdf|max:50000');  //recordar que para activar mimes se debe descomentar la linea de codigo  'extension=php_fileinfo.dll' del php.ini
        $validacion = Validator::make($input,  $reglas);
        if ($validacion->fails())
        {
          return view("mensajes.msj_rechazado")->with("msj","El archivo no es un pdf o es demasiado Grande para subirlo");
        }
        else
        {
            if($resul){            
                    return view("mensajes.msj_correcto")->with("msj","Proyecto Agregado Correctamente");   
            }
            else
            {            
                     return view("mensajes.msj_rechazado")->with("msj","hubo un error vuelva a intentarlo");  
            }

			                                      */ 			          
        }



      	$usuario= new User;
   
		$usuario->nombres  =  $data["nombres"];
		$usuario->apellidos=$data["apellidos"];
    $usuario->cedula=$data["cedula"];
		$usuario->nucleo=$data["nucleo"];
		$usuario->ciudad=$data["ciudad"];
		$usuario->email=$data["email"];
		$usuario->institucion=$data["institucion"];
		$usuario->ocupacion=$data["ocupacion"];
		$usuario->tipousUario=$data["tipousuario"];
		$usuario->password=bcrypt($data["password"]);

		$resul= $usuario->save();

		if($resul){
            
            return view("mensajes.msj_correcto")->with("msj","Usuario Registrado Correctamente");   
		}
		else
		{
             
            return view("mensajes.msj_rechazado")->with("msj","hubo un error vuelva a intentarlo");  

		}
	}


public function agregar_comentario(Request $request)
    {

        $data=$request->all();


        $reglas = array('stadus' => 'required',

                        );
        $mensajes= array('stadus.required' =>  'Necesario que Escriba algo',                                          
                         );
        

        $validacion = Validator::make($data, $reglas, $mensajes);
        if ($validacion->fails())
        {
             $errores = $validacion->errors(); 
             return new JsonResponse($errores, 422); 
             /*return view("mensajes.msj_rechazado")->with("msj","Existen errores de validación")
                                                  ->with("errors",$errores);




        $input  = array('file' => $archivo) ;
        $reglas = array('file' => 'required|mimes:pdf|max:50000');  //recordar que para activar mimes se debe descomentar la linea de codigo  'extension=php_fileinfo.dll' del php.ini
        $validacion = Validator::make($input,  $reglas);
        if ($validacion->fails())
        {
          return view("mensajes.msj_rechazado")->with("msj","El archivo no es un pdf o es demasiado Grande para subirlo");
        }
        else
        {
            if($resul){            
                    return view("mensajes.msj_correcto")->with("msj","Proyecto Agregado Correctamente");   
            }
            else
            {            
                     return view("mensajes.msj_rechazado")->with("msj","hubo un error vuelva a intentarlo");  
            }

                                                  */                      
        }



        $coment= new coment;
   
        $coment->stado  =  $data["stadus"];
        $coment->idusu  =  $data["id_con"];


        $resul= $coment->save();

        if($resul){
            
            return view("mensajes.msj_correcto")->with("msj","Publicado Correctamente");   
        }
        else
        {
             
            return view("mensajes.msj_rechazado")->with("msj","hubo un error vuelva a intentarlo");  

        }
    }

//leccion 7
			public function form_editar_usuario($id)
	{
		//funcion para cargar los datos de cada usuario en la ficha
		$usuario=User::find($id);
                $line=Lineas::all();
                $program=pfg::all();

		$contador=$usuario->count();
		$tiposusuario=TipoUsuario::all();
		
		if($contador>0){          
            return view("formularios.form_editar_usuario")
                   ->with("usuario",$usuario)
                                      ->with("line",$line)
                                      ->with("program",$program)

                   ->with("tiposusuario",$tiposusuario);   
		}
		else
		{            
            return view("mensajes.msj_rechazado")->with("msj","el usuario con ese id no existe o fue borrado");  
		}
	}

		public function editar_usuario(UsuarioRequest $request)
	{



       $data=$request->all();/*
        $reglas = array('nombres' => 'required',
        	            'apellidos' => 'required',
        	            'pais'=>   'required',
        	            'ciudad' => 'required|Alpha',
        	            'institucion' => 'required|Alpha',
        	            'ocupacion' => 'required|Alpha',
        	            'tipousuario' => 'required|Numeric|min:1|max:2',
        	            );
        $mensajes= array('nombres.required' =>  'Ingresar Nombres es obligatorio',
        	             'apellidos.required' =>  'Ingresar Apellidos es obligatorio',
        	             'pais.required' =>  'el pais es un campo obligatorio',
        	             'ciudad.required' =>  'Ingresar una ciudad es obligatorio',
        	             'ciudad.alpha' =>  'la ciudad no puede contener numeros en su nombre',
        	             'email.required' =>  'Ingresar un email es obligatorio',
        	             'email.email' =>  'el email debe tener un formato valido',
        	             'institucion.required' =>  'Ingresar una institucion es obligatorio',
        	             'ocupacion.required' =>  'Ingresar la ocupacion es obligatorio',
        	             'tipousuario.numeric' =>  'Ingresar un tipo de usuario valido ides entre 1 y 2',
        	             );
        

      
        $validacion = Validator::make($data, $reglas, $mensajes);
        if ($validacion->fails())
        {
			 
			 $errores = $validacion->errors();  
	         return view("mensajes.msj_rechazado")->with("msj","Existen errores de validación")
			                                      ->with("errores",$errores); 			          
        }*/

		
		
		$idUsuario=$data["id_usuario"];
		$usuario=User::find($idUsuario);
    $usuario->nombres  =  $data["nombres"];
		$usuario->apellidos=$data["apellidos"];
    $usuario->cedula=$data["cedula"];
                                              if($usuario->tipoUsuario == '1' ){


		$usuario->nucleo=$data["nucleo"];
		$usuario->ciudad=$data["ciudad"];
		$usuario->institucion=$data["institucion"];
		$usuario->ocupacion=$data["ocupacion"];
        $usuario->fecha_n=$data["fecha_n"];
                $usuario->telefono=$data["telefono"];
    $usuario->lineas=$data["lineal"];

    $usuario->fecha1=$data["fecha1"];
    $usuario->fecha2=$data["fecha2"];
    $usuario->fecha3=$data["fecha3"];
    $usuario->tema1=$data["tema1"];
    $usuario->tema2=$data["tema2"];
    $usuario->tema3=$data["tema3"];
    $usuario->tema4=$data["tema4"];
    $usuario->tema5=$data["tema5"];
    $usuario->tema6=$data["tema6"];
    $usuario->tema7=$data["tema7"];
    $usuario->tema8=$data["tema8"];
    $usuario->tema9=$data["tema9"];
    $usuario->tema10=$data["tema10"];
    $usuario->tema11=$data["tema11"];
    $usuario->tema12=$data["tema12"];
    $usuario->tema13=$data["tema13"];
    $usuario->tema14=$data["tema14"];
    $usuario->tema15=$data["tema15"];
                    }

    
		/*$usuario->tipoUsuario=$data["tipousuario"];*/
		$resul= $usuario->save();

		if($resul){            
            return view("mensajes.msj_correcto")->with("msj","Datos actualizados Correctamente");   
		}
		else
		{            
            return view("mensajes.msj_rechazado")->with("msj","hubo un error vuelva a intentarlo");  
		}
	}

//leccion 8
		public function subir_imagen_usuario(Request $request)
	{

	    $id=$request->input('id_usuario_foto');
		$archivo = $request->file('archivo');
        $input  = array('image' => $archivo) ;
        $reglas = array('image' => 'required|image|mimes:jpeg,jpg,bmp,png,gif|max:900');
        $validacion = Validator::make($input,  $reglas);
        if ($validacion->fails())
        {
          return view("mensajes.msj_rechazado")->with("msj","El archivo no es una imagen valida");
        }
        else
        {

	        $nombre_original=$archivo->getClientOriginalName();
			$extension=$archivo->getClientOriginalExtension();
			$nuevo_nombre="userimagen-".$id.".".$extension;
		    $r1=Storage::disk('fotografias')->put($nuevo_nombre,  \File::get($archivo) );
		    $rutadelaimagen="storage/fotografias/".$nuevo_nombre;
	    
		    if ($r1){

			    $usuario=User::find($id);
			    $usuario->imagenurl=$rutadelaimagen;
			    $r2=$usuario->save();
		        return view("mensajes.msj_correcto")->with("msj","Imagen agregada correctamente");
		    }
		    else
		    {
		    	return view("mensajes.msj_rechazado")->with("msj","no se cargo la imagen");
		    }

        }	

	}

	public function cambiar_password(Request $request){
        $email=$request->input("email_usuario");
        $usuariactual=\Auth::user();
        $cormail=\Auth::user()->email;
        $message='Contraseña cambiada exitosamente';
        if($usuariactual->email != $email ){
		
		$reglas = array('email_usuario' => 'required|Email|');
		$mensajes = array('email_usuario.unique' => 'El email ingresado ya esta en uso en la base de datos');
      $this->validate($request,$reglas, $mensajes);
           
         }

       

		$id=$request->input("id_usuario_password");
		$email=$request->input("email_usuario");
		$password=$request->input("password_usuario");
        
		$usuario=User::find($id);
	    $usuario->email=$email;
	    $usuario->password=bcrypt($password);
	    $r=$usuario->save();

	    if($r){
           return view("mensajes.msj_correcto")->with("msj","password actualizado");
           Mail::send('correo.correomail', function($msj){

$msj->subject($message);
$msj->to($cormail);
           }); 
	    }
	    else
	    {
	    	return view("mensajes.msj_rechazado")->with("msj","Error al actualizar el password");
	    }
	}

	//leccion 09

	public function form_cargar_datos_usuarios(){
       return view("formularios.form_cargar_datos_usuarios");
	}


    public function cargar_datos_usuarios(Request $request)
	{
       $archivo = $request->file('archivo');
       $nombre_original=$archivo->getClientOriginalName();
	   $extension=$archivo->getClientOriginalExtension();
       $r1=Storage::disk('archivos')->put($nombre_original,  \File::get($archivo) );
       $ruta  =  storage_path('archivos') ."/". $nombre_original;
       
       if($r1){
       	    $ct=0;
            Excel::selectSheetsByIndex(0)->load($ruta, function($hoja) {
		        
		        $hoja->each(function($fila) {
			        $usersemails=User::where("email","=",$fila->email)->first();
			        if(count( $usersemails)==0){
				      	$usuario=new User;
				        $usuario->nombres= $fila->nombres;
				        $usuario->apellidos= $fila->apellidos;
                       $usuario->cedula= $fila->cedula;
				        $usuario->email= $fila->email;
				        $usuario->telefono= $fila->telefono; //este campo llamado telefono se debe agregar en la base de datos c
				        $usuario->nucleo= $fila->nucleo;
                        $usuario->tipoUsuario= $fila->tipoUsuario;
                //$usuario->institucion= $fila->institucion;
				        //$usuario->ciudad= $fila->ciudad;
		                //$usuario->ocupacion= $fila->ocupacion;
		                $usuario->password= bcrypt($fila->password);
		                $usuario->save();
	                }
		     
		        });

            });

            return view("mensajes.msj_correcto")->with("msj"," Usuarios Cargados Correctamente");
    	
       }
       else
       {
       	    return view("mensajes.msj_rechazado")->with("msj","Error al subir el archivo");
       }

	}

public function borrar_usuario($id){

       $usuario=User::find($id);
       $resul=$usuario->delete();
        if($resul){            
            return view("mensajes.msj_correcto")->with("msj","Borrado correctamente");   
        }
        else
        {            
             return view("mensajes.msj_rechazado")->with("msj","hubo un error vuelva a intentarlo");  
        }

    }

		//leccion 10

	public function form_educacion_usuario(){
       return view("formularios.form_educacion_usuario");
	}


        //leccion 12
		public function buscar_usuarios($nucleo,$dato="")
    {
        
        $usuarioactual=\Auth::user();
        $usuarios= User::Busqueda($nucleo,$dato)->paginate(25);  
        $nucleos=Nucleo::all();
        $paissel=$nucleos->find($nucleo);
        return view('listados.listado_usuarios')
        ->with("nucleos", $nucleos )
        ->with("paissel", $paissel )
        ->with("usuarios", $usuarios )
        ->with("usuario_actual", $usuarioactual );       
	}



     //leccion 16


      	public function info_datos_usuario($id)
	{
		//uncion para cargar los datos de cada usuario en la ficha
		$usuario=User::find($id);
		$contador=count($usuario);
    $tiposusuario=TipoUsuario::all();
        $tiposeducacion=TipoEducacion::all();
                                $tiposinves=TipoInvestigaciones::all();

        $educacion= $usuario->educacion();
        $tipopublicaciones=TipoPublicaciones::all();
        $publicaciones= $usuario->publicaciones();
        $rutaarchivos= "../storage/archivos/";
        $proyectos= $usuario->proyectos();
        $rutaarchivos2= "../storage/archivos/";
        $investigaciones= $usuario->investigaciones();
        $rutaarchivos3= "../storage/archivos/";
		
		if($contador>0){          
            return view("standard.info_datos_usuario")
                   ->with("usuario",$usuario)
                   ->with("tiposusuario",$tiposusuario)
                    ->with("tiposeducacion",$tiposeducacion)
                   ->with("educacion",$educacion)
                    ->with("tipopublicaciones", $tipopublicaciones)
                    ->with("publicaciones",$publicaciones) 
                    ->with("rutaarchivos",$rutaarchivos)
                    ->with("proyectos",$proyectos) 
                    ->with("rutaarchivos2",$rutaarchivos2)
                    ->with("investigaciones",$investigaciones) 
                                                            ->with("tiposinves", $tiposinves)

                    ->with("rutaarchivos3",$rutaarchivos3); 

		}
		else
		{            
            return view("mensajes.msj_rechazado")->with("msj","el usuario con ese id no existe o fue borrado");  
		}
	}

 public function per_usu()

  {
    //uncion para cargar los datos de cada usuario en la ficha
    $usuario=User::all();

     $usuarios=\Auth::user();
          $usu=\Auth::user();

          $comen=coment::orderBy('id', 'desc')->get();

        $contador=$usuarios->count();
                $tiposeducacion=TipoEducacion::all();
        $tiposusuario=TipoUsuario::all();
                        $tiposinves=TipoInvestigaciones::all();
$publi=publicaciones::orderBy('id', 'desc')->paginate(10);
  $educacion= $usuarios->educacion();
        $tipopublicaciones=TipoPublicaciones::all();
        $publicaciones= $usuarios->publicaciones();
        $rutaarchivos= "../storage/archivos/";
        $proyectos= $usuarios->proyectos();
                $proyecto=proyectos::orderBy('id','desc')->paginate(4);

        $rutaarchivos2= "../storage/archivos/";
        $investigaciones= $usuarios->investigaciones();
        $investigacione=investigaciones::take(1)->get();
        $invest=investigaciones::orderBy('id','desc')->paginate(4);



           $d=strtotime("-30 Minute");
               $formatted_dt1=Carbon::parse(date("Y-m-d h:i:sa", $d));


        $infuco=investigaciones::where('estado', 1)->where('fecha', '>',$formatted_dt1);
        $incuco=investigaciones::where('estado', 2)->where('fecha', '>',$formatted_dt1);
        $incomco=investigaciones::where('estado', 3)->where('face4', '!=', "")->get();
        $inicomco=investigaciones::whereIn('estado', [1, 2])->where('face4', "")->where('fecha', '<',$formatted_dt1)->get();
        $u=\Auth::user();
$n=$u->name;
if ($n!=0) {
        $intoco=investigaciones::where('nucleo',$n);
        $pid=proyectos::where('nucleo',$n);
    }else{

        $intoco=investigaciones::all();
        $pid=proyectos::all();
        
    }


        $infu= \Auth::user()->investigaciones()->where('estado', 1)->where('fecha', '>',$formatted_dt1)->get();
        $incu= \Auth::user()->investigaciones()->where('estado', 2)->where('fecha', '>',$formatted_dt1)->get();
        $incom= \Auth::user()->investigaciones()->where('estado', 3)->where('face4', '!=', "")->get();
        $inicom= \Auth::user()->investigaciones()->whereIn('estado', [1, 2])->where('face4', "")->where('fecha', '<',$formatted_dt1)->get();
        $into= \Auth::user()->investigaciones()->get();

        $rutaarchivos3= "../storage/archivos/";

    if($contador>0){          

            return view("listados.usuprin")
                   ->with("usuarios",$usuarios)
                    ->with("tiposeducacion",$tiposeducacion)
                    ->with("usu",$usu)
                    ->with("tiposusuario",$tiposusuario)
                    ->with("educacion",$educacion)
                    ->with("tipopublicaciones", $tipopublicaciones)
                    ->with("publicaciones",$publicaciones) 
                    ->with("rutaarchivos",$rutaarchivos)
                    ->with("proyectos",$proyectos)
                    ->with("usuario",$usuario) 
                    ->with("invest",$invest) 
                    ->with("proyecto",$proyecto) 
                     ->with("comen",$comen) 
                    ->with("rutaarchivos2",$rutaarchivos2)
                    ->with("investigaciones",$investigaciones) 
                    ->with("investigacione",$investigacione) 
                    ->with("tiposinves", $tiposinves)
                    ->with("rutaarchivos3",$rutaarchivos3)
                    ->with("publi",$publi)

                    ->with("infuco",$infuco)
                    ->with("incuco",$incuco)
                    ->with("incomco",$incomco)
                    ->with("inicomco",$inicomco)
                    ->with("intoco",$intoco)

                    ->with("infu",$infu)
                    ->with("incu",$incu)
                    ->with("incom",$incom)
                    ->with("inicom",$inicom)
                    ->with("into",$into)
                    ->with("pid",$pid);

    }
  }


        public function menu()

  {
    //uncion para cargar los datos de cada usuario en la ficha
     $nucleo=nucleo::whereBetween('id', [1, 6])->get();



            return view("menus.menu")
                   ->with("nucleo",$nucleo); 
    
  }
 public function perfil_usuario()

  {
    //uncion para cargar los datos de cada usuario en la ficha
     $usuario=\Auth::user();
        $contador=$usuario->count();
                $tiposeducacion=TipoEducacion::all();
        $tiposusuario=TipoUsuario::all();
                        $tiposinves=TipoInvestigaciones::all();
        $lineau=\Auth::user();
        $linea=$lineau->lineasn;

  $educacion= $usuario->educacion();
        $tipopublicaciones=TipoPublicaciones::all();
        $publicaciones= $usuario->publicaciones();
        $rutaarchivos= "../storage/archivos/";
        $proyectos= $usuario->proyectos();
        $rutaarchivos2= "../storage/archivos/";
        $investigaciones= $usuario->investigaciones();
        $rutaarchivos3= "../storage/archivos/";

    if($contador>0){          

            return view("standard.perfil_usuario")
                   ->with("usuario",$usuario)
                                       ->with("tiposeducacion",$tiposeducacion)
                   ->with("tiposusuario",$tiposusuario)
                   ->with("educacion",$educacion)
                    ->with("tipopublicaciones", $tipopublicaciones)
                    ->with("publicaciones",$publicaciones) 
                    ->with("rutaarchivos",$rutaarchivos)
                    ->with("proyectos",$proyectos) 
                    ->with("rutaarchivos2",$rutaarchivos2)
                    ->with("investigaciones",$investigaciones) 
                                        ->with("tiposinves", $tiposinves)
                                        ->with("linea", $linea)

                    ->with("rutaarchivos3",$rutaarchivos3); 
    }
  }
          public function per_ad1()

  {
    //uncion para cargar los datos de cada usuario en la ficha
     $usuario=\Auth::user();
          $usuarios=\Auth::user();
     $usuarios1=User::where('name','1')->get();

        $contador=count($usuarios);
        $tiposusuario=TipoUsuario::all();
                $tiposinves=TipoInvestigaciones::all();
        $tipopublicaciones=TipoPublicaciones::all();
        $publicaciones= Publicaciones::where('nucleo','1')->get();
        $rutaarchivos= "../storage/archivos/";
        $proyectos= Proyectos::where('nucleo','1')->get();
        $rutaarchivos2= "../storage/archivos/";
        $investigaciones= Investigaciones::where('nucleo','1')->get();
        $rutaarchivos3= "../storage/archivos/";

    if($contador>0){          

            return view("peradm.perfilad1")
                   ->with("usuario",$usuario)
                                      ->with("usuarios1",$usuarios1)
                     ->with("usuarios",$usuarios)
                    ->with("tiposinves", $tiposinves)
                   ->with("tiposusuario",$tiposusuario)
                    ->with("tipopublicaciones", $tipopublicaciones)
                    ->with("publicaciones",$publicaciones) 
                    ->with("rutaarchivos",$rutaarchivos)
                    ->with("proyectos",$proyectos) 
                    ->with("rutaarchivos2",$rutaarchivos2)
                    ->with("investigaciones",$investigaciones) 
                    ->with("rutaarchivos3",$rutaarchivos3); 
    }
  }
          public function per_ad2()

  {
    //uncion para cargar los datos de cada usuario en la ficha
     $usuario=\Auth::user();
          $usuarios=\Auth::user();
     $usuarios2=User::where('name','2')->get();

        $contador=count($usuarios);
        $tiposusuario=TipoUsuario::all();
                $tiposinves=TipoInvestigaciones::all();
        $tipopublicaciones=TipoPublicaciones::all();
        $publicaciones= Publicaciones::where('nucleo','2')->get();
        $rutaarchivos= "../storage/archivos/";
        $proyectos= Proyectos::where('nucleo','2')->get();
        $rutaarchivos2= "../storage/archivos/";
        $investigaciones= Investigaciones::where('nucleo','2')->get();
        $rutaarchivos3= "../storage/archivos/";

    if($contador>0){          

            return view("peradm.perfilad2")
                   ->with("usuario",$usuario)
                     ->with("usuarios",$usuarios)
       ->with("usuarios2",$usuarios2)
                    ->with("tiposinves", $tiposinves)
                   ->with("tiposusuario",$tiposusuario)
                    ->with("tipopublicaciones", $tipopublicaciones)
                    ->with("publicaciones",$publicaciones) 
                    ->with("rutaarchivos",$rutaarchivos)
                    ->with("proyectos",$proyectos) 
                    ->with("rutaarchivos2",$rutaarchivos2)
                    ->with("investigaciones",$investigaciones) 
                    ->with("rutaarchivos3",$rutaarchivos3); 
    }
  }
          public function per_ad3()

  {
    //uncion para cargar los datos de cada usuario en la ficha
     $usuario=\Auth::user();
          $usuarios=\Auth::user();
     $usuarios3=User::where('name','3')->get();

        $contador=count($usuarios);
        $tiposusuario=TipoUsuario::all();
                $tiposinves=TipoInvestigaciones::all();
        $tipopublicaciones=TipoPublicaciones::all();
        $publicaciones= Publicaciones::where('nucleo','3')->get();
        $rutaarchivos= "../storage/archivos/";
        $proyectos= Proyectos::where('nucleo','3')->get();
        $rutaarchivos2= "../storage/archivos/";
        $investigaciones= Investigaciones::where('nucleo','3')->get();
        $rutaarchivos3= "../storage/archivos/";

    if($contador>0){          

            return view("peradm.perfilad3")
                   ->with("usuario",$usuario)
                     ->with("usuarios",$usuarios)
                                              ->with("usuarios3",$usuarios3)
            ->with("tiposinves", $tiposinves)
                   ->with("tiposusuario",$tiposusuario)
                    ->with("tipopublicaciones", $tipopublicaciones)
                    ->with("publicaciones",$publicaciones) 
                    ->with("rutaarchivos",$rutaarchivos)
                    ->with("proyectos",$proyectos) 
                    ->with("rutaarchivos2",$rutaarchivos2)
                    ->with("investigaciones",$investigaciones) 
                    ->with("rutaarchivos3",$rutaarchivos3); 
    }
  }
          public function per_ad4()

  {
    //uncion para cargar los datos de cada usuario en la ficha
     $usuario=\Auth::user();
          $usuarios=\Auth::user();
     $usuarios4=User::where('name','4')->get();

        $contador=count($usuarios);
        $tiposusuario=TipoUsuario::all();
                $tiposinves=TipoInvestigaciones::all();
        $tipopublicaciones=TipoPublicaciones::all();
        $publicaciones= Publicaciones::where('nucleo','4')->get();
        $rutaarchivos= "../storage/archivos/";
        $proyectos= Proyectos::where('nucleo','4')->get();
        $rutaarchivos2= "../storage/archivos/";
        $investigaciones= Investigaciones::where('nucleo','4')->get();
        $rutaarchivos3= "../storage/archivos/";

    if($contador>0){          

            return view("peradm.perfilad4")
                   ->with("usuario",$usuario)
                     ->with("usuarios",$usuarios)
                                                   ->with("usuarios4",$usuarios4)
       ->with("tiposinves", $tiposinves)
                   ->with("tiposusuario",$tiposusuario)
                    ->with("tipopublicaciones", $tipopublicaciones)
                    ->with("publicaciones",$publicaciones) 
                    ->with("rutaarchivos",$rutaarchivos)
                    ->with("proyectos",$proyectos) 
                    ->with("rutaarchivos2",$rutaarchivos2)
                    ->with("investigaciones",$investigaciones) 
                    ->with("rutaarchivos3",$rutaarchivos3); 
    }
  }
          public function per_ad5()

  {
    //uncion para cargar los datos de cada usuario en la ficha
     $usuario=\Auth::user();
          $usuarios=\Auth::user();
     $usuarios5=User::where('name','5')->get();

        $contador=count($usuarios);
        $tiposusuario=TipoUsuario::all();
                $tiposinves=TipoInvestigaciones::all();
        $tipopublicaciones=TipoPublicaciones::all();
        $publicaciones= Publicaciones::where('nucleo','5')->get();
        $rutaarchivos= "../storage/archivos/";
        $proyectos= Proyectos::where('nucleo','5')->get();
        $rutaarchivos2= "../storage/archivos/";
        $investigaciones= Investigaciones::where('nucleo','5')->get();
        $rutaarchivos3= "../storage/archivos/";

    if($contador>0){          

            return view("peradm.perfilad5")
                   ->with("usuario",$usuario)
                     ->with("usuarios",$usuarios)
                                      ->with("usuarios5",$usuarios5)

                    ->with("tiposinves", $tiposinves)
                   ->with("tiposusuario",$tiposusuario)
                    ->with("tipopublicaciones", $tipopublicaciones)
                    ->with("publicaciones",$publicaciones) 
                    ->with("rutaarchivos",$rutaarchivos)
                    ->with("proyectos",$proyectos) 
                    ->with("rutaarchivos2",$rutaarchivos2)
                    ->with("investigaciones",$investigaciones) 
                    ->with("rutaarchivos3",$rutaarchivos3); 
    }
  }
          public function per_ad6()

  {
    //uncion para cargar los datos de cada usuario en la ficha
     $usuario=\Auth::user();
          $usuarios=\Auth::user();
     $usuarios6=User::where('name','6')->get();

        $contador=count($usuarios);
        $tiposusuario=TipoUsuario::all();
                $tiposinves=TipoInvestigaciones::all();
        $tipopublicaciones=TipoPublicaciones::all();
        $publicaciones= Publicaciones::where('nucleo','6')->get();
        $rutaarchivos= "../storage/archivos/";
        $proyectos= Proyectos::where('nucleo','6')->get();
        $rutaarchivos2= "../storage/archivos/";
        $investigaciones= Investigaciones::where('nucleo','6')->get();
        $rutaarchivos3= "../storage/archivos/";

    if($contador>0){          

            return view("peradm.perfilad6")
                   ->with("usuario",$usuario)
                     ->with("usuarios",$usuarios)
                                                           ->with("usuarios6",$usuarios6)

                    ->with("tiposinves", $tiposinves)
                   ->with("tiposusuario",$tiposusuario)
                    ->with("tipopublicaciones", $tipopublicaciones)
                    ->with("publicaciones",$publicaciones) 
                    ->with("rutaarchivos",$rutaarchivos)
                    ->with("proyectos",$proyectos) 
                    ->with("rutaarchivos2",$rutaarchivos2)
                    ->with("investigaciones",$investigaciones) 
                    ->with("rutaarchivos3",$rutaarchivos3); 
    }
  }


	public function mostrar_errores(){
      
       return view("mensajes.msj_rechazado")->with("msj","Existen errores de validacion");

	}
	}



