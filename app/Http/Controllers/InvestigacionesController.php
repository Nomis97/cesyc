<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Storage;
use App\Http\Requests\editinvRequest;
use Illuminate\Support\Facades\Validator;
use App\Investigaciones;
use App\User;
use App\lineas;
use App\TipoInvestigaciones;
use App\esta;
use App\Proyectos;
use App\coment;
use App\residuo;

use App\Http\Requests\comen;

use App\Http\Requests\InvesRequest;

    use Carbon\Carbon;

class InvestigacionesController extends Controller
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
        public function form_nueva_investigaciones()
    {
       //presenta el formulario para agregar y los datos de los proyectos
              $usuarioactual=\Auth::user();

$usuario=\Auth::user();
$usuarin=\Auth::user();
$usuari=\Auth::user();
$usuar=\Auth::user();
$usuarline= User::get();  
$linea=lineas::all();
$pro=$usuari->Proyectos();
$inve=$usuar->Investigaciones();
$inv=proyectos::all();
$tou=User::orderBy('nombres', 'asc')->get();
$inves=TipoInvestigaciones::all();
       return view("formularios.form_nueva_investigaciones") 
->with("usuarline", $usuarline )
->with("linea",$linea)
->with('inves',$inves)
->with('pro',$pro)
->with('inv',$inv)
->with('inve',$inve)
->with('usuarin',$usuarin)

         ->with("usuario",$usuario)
          ->with("tou",$tou)     
             ->with("usuario_actual", $usuarioactual );       


    }
 public function usuariosline($lineas,$dato="")
    {
      $usuario=\Auth::user();
      $usuarin=\Auth::user();
      $inves=TipoInvestigaciones::all();
      $tou=User::orderBy('nombres', 'asc')->get();
      $usuarioactual=\Auth::user();
      $usuarline= User::Busqueda2($lineas,$dato)->get(); 
      $linea=lineas::all(); 
      $paissel=$linea->find($lineas);
        return view('formularios.form_nueva_investigaciones')
      ->with("linea", $linea )
      ->with("paissel", $paissel )
      ->with("usuarline", $usuarline )
      ->with("usuario",$usuario)
      ->with('inves',$inves)
      ->with("tou",$tou)     
      ->with('usuarin',$usuarin)
      ->with("usuario_actual", $usuarioactual );       
  }
   
    public function obj($id)
    {
       //presenta el formulario para agregar y los datos de los proyectos
$usuario=\Auth::user();
$usuari=\Auth::user();
$usuar=\Auth::user();
$line=lineas::all();
$pro=$usuari->Proyectos();
$inve=$usuar->Investigaciones();
$inv=proyectos::find($id);
$tou=User::orderBy('nombres', 'asc')->get();
$inves=TipoInvestigaciones::all();
       return view("formularios.newob") 
->with("line",$line)
 ->with('inves',$inves)
  ->with('pro',$pro)
  ->with('inv',$inv)
  ->with('inve',$inve)
         ->with("usuario",$usuario)
          ->with("tou",$tou);



    }
    
        public function agregar_obj(comen $request)
    {
       //presenta el formulario para agregar y los datos de los proyectos



             $obj= new coment; 
             $obj->idusu=$request->input('id_usuario');
             $obj->resumen=$request->input('resu');
             $obj->objetivo=$request->input('obj');
                          $obj->idpro=$request->input('idinves');

             
             $resul= $obj->save();
            if($resul){            
                    return view("mensajes.msj_correcto")->with("msj","Investigacion Agregado Correctamente");   
            }
            else
            {            
                     return view("mensajes.msj_rechazado")->with("msj","hubo un error vuelva a intentarlo");  
            }
        }

    public function obj_edit($id)
    {
       //presenta el formulario para agregar y los datos de los proyectos
$usuario=\Auth::user();
$usuari=\Auth::user();
$usuar=\Auth::user();

                $line=lineas::all();
                $pro=$usuari->Proyectos();
$inve=$usuar->Investigaciones();
$inv=proyectos::find($id);
        $obj=coment::find($id);


$tou=User::orderBy('nombres', 'asc')->get();
$inves=TipoInvestigaciones::all();
       return view("formularios.edit_newob") 
                                      ->with("line",$line)

 ->with('inves',$inves)
  ->with('pro',$pro)
  ->with('inv',$inv)
  ->with('inve',$inve)
  ->with('obj',$obj)

         ->with("usuario",$usuario)
          ->with("tou",$tou);



    }
 public function editar_objetivos(request $request)
    {




   $data=$request->all();
        
        $idUsuario=$data["id_usuario"];
             $obj= coment::find($idUsuario); 

             $obj->resumen=$request->input('resu');
             $obj->objetivo=$request->input('obj');
                          $obj->idpro=$request->input('idinves');

             $resul= $obj->save();
            if($resul){            
                    return view("mensajes.msj_correcto")->with("msj","Investigacion Actualizado Correctamente");   
            }
            else
            {            
                     return view("mensajes.msj_rechazado")->with("msj","hubo un error vuelva a intentarlo");  
            }
        }



        public function agregar_investigaciones_usuario(InvesRequest $request)
    {
       //presenta el formulario para agregar y los datos de los proyectos

        $archivo = $request->file('file');
 
             $investigacion= new Investigaciones; 
             $investigacion->idUsuario=$request->input('id_usuario');



             if($request->input('id_usuario1')  == "0" ){$investigacion->integrante1 == null;}else{
            
             $investigacion->integrante1=$request->input('id_usuario1');
              }

   if($request->input('id_usuario2')  == "0" ){$investigacion->integrante2 == null;}else{
            
             $investigacion->integrante2=$request->input('id_usuario2');
              }
                 if($request->input('id_usuario3')  == "0" ){$investigacion->integrante3 == null;}else{
            
             $investigacion->integrante3=$request->input('id_usuario3');
              }
                 if($request->input('id_usuario4')  == "0" ){$investigacion->integrante4 == null;}else{
            
             $investigacion->integrante4=$request->input('id_usuario4');
              }
                 if($request->input('id_usuario5')  == "0" ){$investigacion->integrante5 == null;}else{
            
             $investigacion->integrante5=$request->input('id_usuario5');
              }
                 if($request->input('id_usuario6')  == "0" ){$investigacion->integrante6 == null;}else{
            
             $investigacion->integrante6=$request->input('id_usuario6');
              }
                          $investigacion->act=$request->input('acti');

                          $investigacion->titulo=$request->input('titulo_investigacion');
             $investigacion->idinves= $request->input("tipo_investigacion");
             $investigacion->lineas= $request->input("lineal");

             $investigacion->descripcion=$request->input('descripcion_investigacion');
             $investigacion->objetivo=$request->input('objetivo_investigacion');
             $investigacion->estado=$request->input('estado_investigacion');
             $investigacion->fechaini=$request->input('fecha_investigacion');
             $investigacion->fecha=$request->input('f_investigacion');
             $investigacion->lugar=$request->input('lugar_investigacion');
             $investigacion->face=$request->input('face_investigacion');
                          $investigacion->face2=$request->input('face2');
             $investigacion->face3=$request->input('face3');
             $investigacion->face4=$request->input('face4');
             $investigacion->forma=$request->input('forma');

             $investigacion->nucleo=$request->input('nucleo');
                          $investigacion->pause=$request->input('pause');
                          $investigacion->pclave="Investigacion";

             if($archivo==""){$archivo=="";}else{

             $carpeta="investigaciones";
             $ruta=$carpeta."/".$request->input("id_usuario")."_".$archivo->getClientOriginalName();
             $r1=Storage::disk('archivos')->put($ruta,  \File::get($archivo) );
             $investigacion->ruta=$ruta;
             }
             $resul= $investigacion->save();
            if($resul){            
                    return view("mensajes.msj_correcto")->with("msj","Investigacion Agregado Correctamente");   
            }
            else
            {            
                     return view("mensajes.msj_rechazado")->with("msj","hubo un error vuelva a intentarlo");  
            }
        

    }

public function form_editar_investigacion($id)
    {
        //funcion para cargar los datos de cada usuario en la ficha investigaciones_idusuario_foreign
             $usuarios=\Auth::user();

        $investigaciones= $usuarios->investigaciones();

        $inves=Investigaciones::find($id);
                $line=lineas::all();
                $usuar=User::all();

$tou=User::orderBy('nombres', 'asc')->get();
$usuario=\Auth::user();
$invesn=TipoInvestigaciones::all();

$estad=esta::all();



            return view("formularios.form_editar_investigaciones")
                                      ->with("line",$line)
          ->with("tou",$tou)
          ->with("usuar",$usuar)

         ->with("usuario",$usuario)
         ->with("invesn",$invesn)
         ->with("estad",$estad)
         ->with("investigaciones",$investigaciones)

                               ->with("inves",$inves);

}
public function investigacion_nofinal($id)
    {
        //funcion para cargar los datos de cada usuario en la ficha investigaciones_idusuario_foreign
             $usuarios=\Auth::user();

        $investigaciones= $usuarios->investigaciones();

        $inves=Investigaciones::find($id);
                $line=lineas::all();
$tou=User::orderBy('nombres', 'asc')->get();
$usuario=\Auth::user();
$invesn=TipoInvestigaciones::all();

$estad=esta::all();



            return view("formularios.inv_nofinal")
                                      ->with("line",$line)
          ->with("tou",$tou)

         ->with("usuario",$usuario)
         ->with("invesn",$invesn)
         ->with("estad",$estad)
         ->with("investigaciones",$investigaciones)

                               ->with("inves",$inves);

}
        public function editar_investigaciones(editinvRequest $request)
    {



        $archivo = $request->file('file');
        $input  = array('file' => $archivo) ;
        $reglas = array('file' => 'mimes:pdf|max:50000');
        $mensajes =  array('file');  //recordar que para activar mimes se debe descomentar la linea de codigo  'extension=php_fileinfo.dll' del php.ini
        $validacion = Validator::make($input,  $reglas, $mensajes);
        if ($validacion->fails())
        {
                   $errores = $validacion->errors();  

          return view("mensajes.msj_rechazado")->with("msj","Debe de subir un archivo o no es un archivo PDF")->with("errores",$errores);
        }
        else
        {

   $data=$request->all();
        
        $idUsuario=$data["id_ue"];
             $investigacion= Investigaciones::find($idUsuario); 



            
             $investigacion->integrante1=$request->input('id_usuario1');
                            

            
             $investigacion->integrante2=$request->input('id_usuario2');

            
             $investigacion->integrante3=$request->input('id_usuario3');
            
             $investigacion->integrante4=$request->input('id_usuario4');
            
             $investigacion->integrante5=$request->input('id_usuario5');
            
             $investigacion->integrante6=$request->input('id_usuario6');

                          $investigacion->titulo=$request->input('titulo_investigacion');
             $investigacion->idinves= $request->input("tipo_investigacion");
             $investigacion->lineas= $request->input("lineal");
             $investigacion->fechaini=$request->input('fecha_investigacion');
             $investigacion->fecha=$request->input('f_investigacion');
             $investigacion->descripcion=$request->input('descripcion_investigacion');
             $investigacion->objetivo=$request->input('objetivo_investigacion');
             $investigacion->estado=$request->input('estado_investigacion');
             $investigacion->lugar=$request->input('lugar_investigacion');
             $investigacion->face=$request->input('face_investigacion');
                                       $investigacion->face2=$request->input('face2');
             $investigacion->face3=$request->input('face3');
             $investigacion->face4=$request->input('face4');
             $investigacion->forma=$request->input('forma');
             $investigacion->nucleo=$request->input('nucleo');
$investigacion->pause=$request->input('pauser');

             if($archivo==""){$archivo=="";}else{

             $carpeta="investigaciones";
             $ruta=$carpeta."/".$request->input("id_ue")."_".$archivo->getClientOriginalName();
             $r1=Storage::disk('archivos')->put($ruta,  \File::get($archivo) );
             $investigacion->ruta=$ruta;
             }
             $resul= $investigacion->save();
            if($resul){            
                    return view("mensajes.msj_correcto")->with("msj","Investigacion Actualizado Correctamente");   
            }
            else
            {            
                     return view("mensajes.msj_rechazado")->with("msj","hubo un error vuelva a intentarlo");  
            }
        }
}
     public function pausa(request $request)
    {




   $data=$request->all();
        
$idUsuario=$data["id_pau"];
$investigacion= Investigaciones::find($idUsuario);  
$investigacion->pause=$request->input('pauser');
$investigacion->save();


        
}
     public function listado_investigaciones(request $request, $id){
             $usuarios=\Auth::user();

             $nucle=\Auth::user();
             $nucleo=$nucle->name;

        $estad=esta::all();

                        $tiposinves=TipoInvestigaciones::all();
        $investigaciones= $usuarios->investigaciones()->orderBy('id', 'desc')->where('forma','1')
        ->paginate(10);

        $usuariosn=user::all();
        $usuarioi=\Auth::user();
        $linea=lineas::all();

        if (\Auth::user()->name !=0) {
        $invt=Investigaciones::orderBy('id', 'desc')->where('nucleo',$nucleo)->paginate(10);
        }else{
                  $invt=Investigaciones::orderBy('id', 'desc')->paginate(10);

        }
         $rutaarchivos= "../storage/archivos/";

         return view("listados.listado_investigaciones")
         ->with("rutaarchivos", $rutaarchivos)
                  ->with("nucleo", $nucleo)
                             ->with("investigaciones",$investigaciones)
                              ->with("usuariosn",$usuariosn)
                              ->with("usuarios",$usuarios)
                              ->with("linea", $linea)
                              ->with("usuarioi",$usuarioi)  
                              ->with("invt",$invt)  
                              ->with("estad",$estad)
                              ->with("tiposinves", $tiposinves);      
       }
       public function residuo(Request $request)
    {
       //presenta el formulario para agregar y los datos de los proyectos
 
             $resi= new residuo; 
             $resi->idinves=$request->input('id_inv');
                          $resi->descripcion=$request->input('descrip');
                          $resi->integrante=$request->input('integrante');
                          $resi->fecha=$request->input('fecha');
             $resul= $resi->save();
            if($resul){            
                    return view("mensajes.msj_correcto")->with("msj","Investigacion Agregado Correctamente");   
            }
            else
            {            
                     return view("mensajes.msj_rechazado")->with("msj","hubo un error vuelva a intentarlo");  
            }
        

    }
 public function reinv($id){
             $usuarios=\Auth::user();


        $estad=esta::all();

                        $tiposinves=TipoInvestigaciones::all();
        $rei=Investigaciones::find($id);


        $usuariosn=user::all();
        $usuarioi=\Auth::user();
        $linea=lineas::all();
        $invt=Investigaciones::orderBy('id', 'desc')->paginate(10);

        $resi=residuo::all();

         $rutaarchivos= "../storage/archivos/";
         return view("reporte.reporteinv")
         ->with("rutaarchivos", $rutaarchivos)
                             ->with("rei",$rei)
                             ->with("resi",$resi)
                              ->with("usuariosn",$usuariosn)
                              ->with("usuarios",$usuarios)
                              ->with("linea", $linea)
                              ->with("usuarioi",$usuarioi)  
                              ->with("invt",$invt)  
                              ->with("estad",$estad)
                              ->with("tiposinves", $tiposinves);      
       }
       //
public function listacolev(){

        $usuarios=\Auth::user();
        $estad=esta::all();
        $usu=\Auth::user();
        $usuariosn=user::all();
        $usuarioi=\Auth::user();
        $usuar=\Auth::user();
        $inu=investigaciones::
        // join('users', function($join){
        //   $join->on('investigaciones.idUsuario', "=", 'users.id')->orOn('investigaciones.integrante1', "=", 'users.id')
        //   ->orOn('investigaciones.integrante2', "=", 'users.id')
        //   ->orOn('investigaciones.integrante3', "=", 'users.id')
        //   ->orOn('investigaciones.integrante4', "=", 'users.id')
        //   ->orOn('investigaciones.integrante5', "=", 'users.id')
        //   ->orOn('investigaciones.integrante6', "=", 'users.id');
        // })
        where('idUsuario', '=', $usuarios->id)
        ->where('forma','2')
        ->orWhere('integrante1',$usuarios->id)
        ->orWhere('integrante2',$usuarios->id)
        ->orWhere('integrante3',$usuarios->id)
        ->orWhere('integrante4',$usuarios->id)
        ->orWhere('integrante5',$usuarios->id)
        ->orWhere('integrante6',$usuarios->id)
        ->paginate(10);
        $linea=lineas::get();
         $rutaarchivos= "../storage/archivos/";
         return view("listados.listacolev")
         ->with("rutaarchivos", $rutaarchivos)
                              ->with("usuariosn",$usuariosn)
                              ->with("usuarios",$usuarios)
                              ->with("linea", $linea)
                              ->with("usuarioi",$usuarioi) 
                              ->with("inu",$inu)  
                              ->with("estad",$estad);      

       }
       public function descargar_investigacion($id){

         $investigaciones=Investigaciones::find($id);
         $rutaarchivo= "../storage/archivos/".$investigaciones->ruta;
         return response()->download($rutaarchivo);

       }



    public function borrar_investigacion($id){

       $investigaciones=Investigaciones::find($id);
       $resul=$investigaciones->delete();
        if($resul){            
            return view("mensajes.msj_correcto")->with("msj","Borrado correctamente");   
        }
        else
        {            
             return view("mensajes.msj_rechazado")->with("msj","hubo un error vuelva a intentarlo");  
        }

    }

}