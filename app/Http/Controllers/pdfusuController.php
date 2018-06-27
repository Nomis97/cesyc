<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\user;
use App\Nucleo;
use App\TipoUsuario;
use App\Educacion;
use App\TipoEducacion;
use App\Publicaciones;
use App\TipoPublicaciones;
use App\TipoInvestigaciones;
use App\Proyectos;
use App\Investigaciones;
use PDF;


class pdfusuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
  
                return view("listados.listado_usuarios");

    
}
      public function crearpdf_inv($datos,$vistaurl,$inve)
    {

        $data = $datos;
        $date = date('Y-m-d');
        $view =  \View::make($vistaurl, compact('data', 'date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        
        if($inve==1){return $pdf->stream('reporte');}
        if($inve==2){return $pdf->download('reporte.pdf'); }

    }


    public function crear_reporte_inve($inve,$id){

     $vistaurl="pdf.reporte_de_inve";
        $usuario=User::find($id);
                $contador=count($usuario);

            if($contador>0){          

     return $this->crearpdf_inv($usuario, $vistaurl,$inve);
}
}


          public function crearpdf_pi1($datos,$vistaurl,$pi1)
    {

        $data = $datos;
        $date = date('Y-m-d');
        $view =  \View::make($vistaurl, compact('data', 'date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        
        if($pi1==1){return $pdf->stream('reporte');}
        if($pi1==2){return $pdf->download('reporte.pdf'); }

    }


    public function crear_reporte_pi1($pi1){

     $vistaurl="pdf.reporte_de_pi1";
        $usuario=Proyectos::where('nucleo','1')->get();
    

     return $this->crearpdf_pi1($usuario, $vistaurl,$pi1);
}
         public function crearpdf_pi2($datos,$vistaurl,$pi2)
    {

        $data = $datos;
        $date = date('Y-m-d');
        $view =  \View::make($vistaurl, compact('data', 'date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        
        if($pi2==1){return $pdf->stream('reporte');}
        if($pi2==2){return $pdf->download('reporte.pdf'); }

    }


    public function crear_reporte_pi2($pi2){

     $vistaurl="pdf.reporte_de_pi2";
        $usuario=Proyectos::where('nucleo','2')->get();
    

     return $this->crearpdf_pi2($usuario, $vistaurl,$pi2);
}         public function crearpdf_pi3($datos,$vistaurl,$pi3)
    {

        $data = $datos;
        $date = date('Y-m-d');
        $view =  \View::make($vistaurl, compact('data', 'date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        
        if($pi3==1){return $pdf->stream('reporte');}
        if($pi3==2){return $pdf->download('reporte.pdf'); }

    }


    public function crear_reporte_pi3($pi3){

     $vistaurl="pdf.reporte_de_pi3";
        $usuario=Proyectos::where('nucleo','3')->get();
    

     return $this->crearpdf_pi3($usuario, $vistaurl,$pi3);
}         public function crearpdf_pi4($datos,$vistaurl,$pi4)
    {

        $data = $datos;
        $date = date('Y-m-d');
        $view =  \View::make($vistaurl, compact('data', 'date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        
        if($pi4==1){return $pdf->stream('reporte');}
        if($pi4==2){return $pdf->download('reporte.pdf'); }

    }


    public function crear_reporte_pi4($pi4){

     $vistaurl="pdf.reporte_de_pi4";
        $usuario=Proyectos::where('nucleo','4')->get();
    

     return $this->crearpdf_pi4($usuario, $vistaurl,$pi4);
}         public function crearpdf_pi5($datos,$vistaurl,$pi5)
    {

        $data = $datos;
        $date = date('Y-m-d');
        $view =  \View::make($vistaurl, compact('data', 'date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        
        if($pi5==1){return $pdf->stream('reporte');}
        if($pi5==2){return $pdf->download('reporte.pdf'); }

    }


    public function crear_reporte_pi5($pi5){

     $vistaurl="pdf.reporte_de_pi5";
        $usuario=Proyectos::where('nucleo','5')->get();
    

     return $this->crearpdf_pi5($usuario, $vistaurl,$pi5);
}         public function crearpdf_pi6($datos,$vistaurl,$pi6)
    {

        $data = $datos;
        $date = date('Y-m-d');
        $view =  \View::make($vistaurl, compact('data', 'date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        
        if($pi6==1){return $pdf->stream('reporte');}
        if($pi6==2){return $pdf->download('reporte.pdf'); }

    }


    public function crear_reporte_pi6($pi6){

     $vistaurl="pdf.reporte_de_pi6";
        $usuario=Proyectos::where('nucleo','6')->get();
    

     return $this->crearpdf_pi6($usuario, $vistaurl,$pi6);
}

    }
