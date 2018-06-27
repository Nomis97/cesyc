<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Storage;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Publicaciones;
use App\TipoPublicaciones;
use Carbon\Carbon;

use App\Http\Requests\coment;
use Illuminate\Http\JsonResponse;


class PublicacionesController extends Controller
{
    
        public function __construct()
    {
        $this->middleware('auth');
                Carbon::setLocale('es');

    }


    
            //leccion 11

    public function form_publicaciones_usuario(){
     $usuarios=\Auth::user();
          $usuario=\Auth::user();

          $idt=Publicaciones::all();
$tipopublicaciones=TipoPublicaciones::all();
       return view("formularios.form_publicaciones_usuario")
         ->with("tipopublicaciones", $tipopublicaciones)
                  ->with("idt", $idt)
                  ->with("usuario",$usuario)
         ->with("usuarios",$usuarios);
    }
public function agregar_comentario(Request $request)
    {


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



        $coment= new Publicaciones;

                $coment->idUsuario= $request->input("id_con");
              $coment->idTipopublicacion= $request->input("tipo_publicacion");
        $coment->resumen=$request->input("stadus");


        $resul= $coment->save();

        if($resul){
            
            return view("mensajes.msj_correcto")->with("msj","Publicado Correctamente");   
        }
        else
        {
             
            return view("mensajes.msj_rechazado")->with("msj","hubo un error vuelva a intentarlo");  

        }
    }

 
    public function agregar_publicacion(Request $request ){
         //funcion para agregar la publicacion de cada usuario

      $archivo = $request->file('file');
            $ima = $request->file('ima');
      $input  = array('file' => $archivo) ;
       $reglas = array('file' => 'mimes:pdf|max:50000');  //recordar que para activar mimes se debe descomentar la linea de codigo  'extension=php_fileinfo.dll' del php.ini
        $validacion = Validator::make($input,  $reglas);
        if ($validacion->fails())
        {
          return view("mensajes.msj_rechazado")->with("msj","El archivo no es un pdf o es demasiado Grande para subirlo");
        }
        else
        {
      $publicacion= new Publicaciones;
           $publicacion->idUsuario= $request->input("id_usuario");
           $publicacion->idTipopublicacion= $request->input("tipo_publicacion");
           $publicacion->titulo=$request->input("titulo_publicacion");
                      $publicacion->resumen=$request->input("resu");

           $publicacion->autores=$request->input("autores_publicacion");
           $publicacion->universidad=$request->input("universidad_publicacion");
           $publicacion->anio=$request->input("anio_publicacion");
           $publicacion->pais=$request->input("pais_publicacion");
           $publicacion->revista=$request->input("revista_publicacion");
           $publicacion->volumen=$request->input("volumen_publicacion");
           $publicacion->numero=$request->input("numero_publicacion");
           $publicacion->pageI=$request->input("pageI_publicacion");
           $publicacion->pageF=$request->input("pageF_publicacion");
           $publicacion->volumenL=$request->input("vlibro_publicacion");
           $publicacion->numeroL=$request->input("nlibro_publicacion");
           $publicacion->ciudad=$request->input("ISBN_publicacion");
           $publicacion->edicion=$request->input("edicion_publicacion");
           $publicacion->editorial=$request->input("editorial_publicacion");
             $publicacion->nucleo=$request->input('nucleo');

if($archivo==""){$archivo=="";}else{
           $carpeta=$request->input("tipo_publicacion");
           $ruta=$carpeta."/".$request->input("id_usuarios")."_".$archivo->getClientOriginalName();
           $r1=Storage::disk('archivos')->put($ruta,  \File::get($archivo) );
           $publicacion->ruta=$ruta;
         }
           $resul= $publicacion->save();

if($ima==""){$ima=="";}else{
           $carpeta=$request->input("tipo_publicacion");
           $im=$carpeta."/".$request->input("id_usuarios")."_".$ima->getClientOriginalName();
           $r1=Storage::disk('fotografias')->put($im,  \File::get($ima) );
           $rutai="storage/fotografias/".$im;
           $publicacion->img=$rutai;
         }
           $resul= $publicacion->save();

          if($resul){            
              return view("mensajes.msj_correcto")->with("msj","Publicacion Agregada Correctamente");   
          }
          else
          {            
               return view("mensajes.msj_rechazado")->with("msj","hubo un error vuelva a intentarlo");  
          }

         }
    }
    
    public function borrar_publicacion($id){

       $publicacion=Publicaciones::find($id);
       $resul=$publicacion->delete();
        if($resul){            
            return view("mensajes.msj_correcto")->with("msj","Borrado correctamente");   
        }
        else
        {            
             return view("mensajes.msj_rechazado")->with("msj","hubo un error vuelva a intentarlo");  
        }

    }


       public function listado_publicaciones($id){
             $usuarios=\Auth::user();
                          $usuari=\Auth::user();
$usu=TipoPublicaciones::all();
         $publicaciones = $usuarios->publicaciones()->orderBy('id', 'desc')->paginate(25);
         $rutaarchivos= "../storage/archivos/";
         return view("listados.listado_publicaciones")
         ->with("publicaciones", $publicaciones)

         ->with("rutaarchivos", $rutaarchivos)
                  ->with("usu", $usu);      
      
       }

       public function descargar_publicacion($id){

         $publicacion=Publicaciones::find($id);
         $rutaarchivo= "../storage/archivos/".$publicacion->ruta;
         return response()->download($rutaarchivo);

       }


}