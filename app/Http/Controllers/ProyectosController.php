<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\TipoUsuario;
use App\Http\Controllers\Controller;
use Storage;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;
use App\Proyectos;
use App\User;
use App\Nucleo;
use App\pfg;
use App\Investigaciones;
    use Carbon\Carbon;
use App\comenta;
use App\Http\Requests\Pidarequest;

use Session;

class ProyectosController extends Controller
{


        public function __construct()
    {
                Carbon::setLocale('es');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function form_proyectos_usuario()
    {
       //presenta el formulario para agregar y los datos de los proyectos
  
$usuario=\Auth::user();
        $nom=$usuario->proyectos()->take(1);
$nu=\Auth::user();
$pf=pfg::all();

       return view("formularios.form_proyectos_usuario")
         ->with("usuario",$usuario)
                  ->with("nu",$nu)
                  ->with("pf",$pf)

                  ->with("nom",$nom);

    }



        public function agregar_proyectos_usuario(Pidarequest $request)
    {
       //presenta el formulario para agregar y los datos de los proyectos





       // $usuario->nucleo=$data["nucleo"];

        $archivo = $request->file('file');


             $proyecto= new Proyectos; 
             $proyecto->idUsuario=$request->input('id_usuario');
             $proyecto->nya=$request->input('nya');
             $proyecto->titulo=$request->input('titulo');
             $proyecto->pfg=$request->input('pfg');
             $proyecto->esde=$request->input('esde');
             $proyecto->vinculacion=$request->input('vinculacion');
             $proyecto->info1=$request->input('info1');

                          $proyecto->aai=$request->input('tema3');

             $proyecto->objetivoestrategico=$request->input('objetivoestrategico');
             $proyecto->nucleo=$request->input('nucleo');
             if($archivo==""){$archivo=="";}else{
             $carpeta="proyectos";
             $ruta=$carpeta."/".$request->input("id_usuario")."_".$archivo->getClientOriginalName();
             $r1=Storage::disk('archivos')->put($ruta,  \File::get($archivo) );
             $proyecto->ruta=$ruta;
             }
             $resul= $proyecto->save();
               if($resul){            
                    return view("mensajes.msj_correcto")->with("msj","Proyecto Agregado Correctamente");   
            }
            else
            {            
                     return view("mensajes.msj_rechazado")->with("msj","hubo un error vuelva a intentarlo");  
            }
    
}
public function form_editar_proyecto($id)
    {
        $nucle=Nucleo::all();
             $usuarios=\Auth::user();

        $investigaciones= $usuarios->investigaciones()->orderBy('id', 'desc')->get();

        $pf=pfg::all();


        $pro=Proyectos::find($id);
        $usuario=\Auth::user();
        $nom=$usuario->proyectos()->orderBy('id', 'desc')->paginate(1);
$nu=\Auth::user();
       return view("formularios.editpi")
         ->with("usuario",$usuario)
                                 ->with("pf",$pf)

                  ->with("nu",$nu)
                  ->with("pro",$pro)
                           ->with("nucle",$nucle)
                             ->with("investigaciones",$investigaciones)

                  ->with("nom",$nom);
    }

public function editar_pida(Request $request)
    {
       //presenta el formulario para agregar y los datos de los proyectos

$archivo = $request->file('file');
        $input  = array('file' => $archivo) ;
        $reglas = array('file' => 'mimes:pdf|max:50000'
        );
                $mensajes= array('file.required' => 'El archivo es requerido');
          //recordar que para activar mimes se debe descomentar la linea de codigo  'extension=php_fileinfo.dll' del php.ini
        $validacion = Validator::make( $input,  $reglas, $mensajes);
        if ($validacion->fails())
        {
       $errores = $validacion->errors();  
                        return view("mensajes.msj_rechazado")->with("msj","Es necesario llenar los siquiente campo:")

                                                  ->with("errores",$errores);

        }
        else
        {





       // $usuario->nucleo=$data["nucleo"];


$data=$request->all();
        
        $idUsuario=$data["id_pi"];
             $proyecto= Proyectos::find($idUsuario); 

             $proyecto->titulo=$request->input('titulo');
             $proyecto->pfg=$request->input('pfg');
             $proyecto->esde=$request->input('esde');
             $proyecto->vinculacion=$request->input('vinculacion');
             $proyecto->fechaini=$request->input('fechaini');
             $proyecto->fechafina=$request->input('fechafina');
                          $proyecto->aai=$request->input('tema3');

             $proyecto->fepro=$request->input('fepro');

             $proyecto->pclave="Proyecto";
             $proyecto->fechafina2=$request->input('fechafina2');
             $proyecto->fepro=$request->input('fepro');

             $proyecto->fechaini3=$request->input('fechaini3');
             $proyecto->fechafina3=$request->input('fechafina3');
             $proyecto->fepro3=$request->input('fepro3');

             $proyecto->fechaini4=$request->input('fechaini4');
             $proyecto->fechafina4=$request->input('fechafina4');
             $proyecto->fepro4=$request->input('fepro4');

             $proyecto->fechaini5=$request->input('fechaini5');
             $proyecto->fechafina5=$request->input('fechafina5');
             $proyecto->fepro5=$request->input('fepro5');

             $proyecto->fechaini6=$request->input('fechaini6');
             $proyecto->fechafina6=$request->input('fechafina6');
             $proyecto->fepro6=$request->input('fepro6');

             $proyecto->fechaini7=$request->input('fechaini7');
             $proyecto->fechafina7=$request->input('fechafina7');
             $proyecto->fepro7=$request->input('fepro7');

             $proyecto->fechaini8=$request->input('fechaini8');
             $proyecto->fechafina8=$request->input('fechafina8');
             $proyecto->fepro8=$request->input('fepro8');

             $proyecto->fechaini9=$request->input('fechaini9');
             $proyecto->fechafina9=$request->input('fechafina9');
             $proyecto->fepro9=$request->input('fepro9');

             $proyecto->fechaini10=$request->input('fechaini10');
             $proyecto->fechafina10=$request->input('fechafina10');
             $proyecto->fepro10=$request->input('fepro10');


             $proyecto->info1=$request->input('info1');
             $proyecto->info2=$request->input('info2');
             $proyecto->info3=$request->input('info3');
             $proyecto->info4=$request->input('info4');
             $proyecto->info5=$request->input('info5');
             $proyecto->info6=$request->input('info6');
             $proyecto->info7=$request->input('info7');
             $proyecto->info8=$request->input('info8');
             $proyecto->info9=$request->input('info9');
             $proyecto->info10=$request->input('info10');

             $proyecto->inf1=$request->input('inf1');
             $proyecto->inf2=$request->input('inf2');
             $proyecto->inf3=$request->input('inf3');
             $proyecto->inf4=$request->input('inf4');
             $proyecto->inf5=$request->input('inf5');
             $proyecto->inf6=$request->input('inf6');
             $proyecto->inf7=$request->input('inf7');
             $proyecto->inf8=$request->input('inf8');
             $proyecto->inf9=$request->input('inf9');
             $proyecto->inf10=$request->input('inf10');
             $proyecto->objetivoestrategico=$request->input('objetivoestrategico');
             $proyecto->nucleo=$request->input('nucleo');
             if($archivo==""){$archivo=="";}else{
             $carpeta="proyectos";
             $ruta=$carpeta."/".$request->input("id_usuario")."_".$archivo->getClientOriginalName();
             $r1=Storage::disk('archivos')->put($ruta,  \File::get($archivo) );
             $proyecto->ruta=$ruta;
             }
             $resul= $proyecto->save();
               if($resul){            
                    return view("mensajes.msj_correcto")->with("msj","Proyecto Agregado Correctamente");   
            }
            else
            {            
                     return view("mensajes.msj_rechazado")->with("msj","hubo un error vuelva a intentarlo");  
            }
}
    
}
       public function listado_proyectos($id){

         $nucle=Nucleo::all();
                      $nucleos=\Auth::user();
             $nucleo=$nucleos->name;
         $pf=pfg::all();
                 if (\Auth::user()->name !=0) {
        $proyectos=Proyectos::orderBy('id', 'desc')->where('nucleo',$nucleo)->paginate(10);
        }else{
                  $proyectos=Proyectos::orderBy('id', 'desc')->paginate(10);

        }
         $rutaarchivos= "../storage/archivos/";
         return view("listados.listado_proyectos")
         ->with("proyectos", $proyectos)
         ->with("nucle",$nucle)
                  ->with("pf",$pf)

         ->with("rutaarchivos", $rutaarchivos);      
       }
  public function pida(){
$nucle=Nucleo::all();
$pf=pfg::all();
$usuarios=\Auth::user();
$obj= $usuarios->comentarios()->orderBy('id', 'desc')->get();
$nu=\Auth::user();
$usuario=\Auth::user();
$nom=$usuario->proyectos()->orderBy('id', 'desc')->paginate(1);

         return view("listados.pida")
                        ->with("nu",$nu)
                        ->with("pf",$pf)
                        ->with("nucle",$nucle)
                        ->with("obj",$obj)
                        ->with("usuario",$usuario)
                        ->with("nom",$nom);

       }
       public function spida(){
$nucle=Nucleo::all();
             $usuarios=\Auth::user();

        $obj= $usuarios->comentarios()->orderBy('id', 'desc')->get();
$pf=pfg::all();

$usuario=\Auth::user();
        $nom=$usuario->proyectos()->orderBy('id', 'desc')->paginate(1);

        $usuar=\Auth::user();

$usuari=\Auth::user();
        $pro=$usuari->proyectos();
         return view("listados.seccionp")
                           ->with("usuario",$usuario)
                                                   ->with("pf",$pf)

                                                      ->with("nucle",$nucle)
                             ->with("obj",$obj)
->with("pro",$pro)
->with("usuar",$usuar)

                           ->with("nom",$nom);

       }
        public function borrar_proyecto($id){

       $proyecto=Proyectos::find($id);
       $resul=$proyecto->delete();
        if($resul){            
            return view("mensajes.msj_correcto")->with("msj","Proyecto Borrado correctamente");   
        }
        else
        {            
             return view("mensajes.msj_rechazado")->with("msj","hubo un error vuelva a intentarlo");  
        }

    }

    
}
