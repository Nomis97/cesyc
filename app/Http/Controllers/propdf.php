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
use App\coment;
use App\Investigaciones;
use App\pfg;
use App\esta;
use App\lineas;

use PDF;


class propdf extends Controller
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
      public function crear_pida($pida,$id)
    {
$nucle=Nucleo::all();
$pf=pfg::all();

$inv=coment::orderBy('id', 'desc')->get();

        $usuario=Proyectos::find($id);
                $contador=count($usuario);

        $pdf = \App::make('dompdf.wrapper');
$pdf = PDF::loadView('pdf.pida', ['usuario' => $usuario],  ['inv' => $inv, 'nucle' => $nucle, 'pf' => $pf]);
        $pdf->setPaper('A4', 'landscape');

        if($pida==1){return $pdf->stream('reporte');}
        if($pida==2){return $pdf->download('reporte.pdf'); }

    }
          public function crear_inv($inv,$id)
    {
             $usuarios=\Auth::user();


        $estad=esta::all();

                        $tiposinves=TipoInvestigaciones::all();
        $rei=Investigaciones::find($id);


        $usuariosn=user::all();
        $usuarioi=\Auth::user();
        $linea=lineas::all();

        $pdf = \App::make('dompdf.wrapper');
$pdf = PDF::loadView('reporte.reporteinvpdf', ['usuarios' => $usuarios],  ['rei' => $rei, 'usuariosn' => $usuariosn, 'linea' => $linea]);
        $pdf->setPaper('A4', 'landscape');

        if($inv==1){return $pdf->stream('reporte');}
        if($inv==2){return $pdf->download('reporte.pdf'); }

    }
}