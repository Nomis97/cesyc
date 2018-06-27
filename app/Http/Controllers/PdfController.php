<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\user;
use App\Nucleo;


class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("pdf.listado_reportes");
    }


      public function crearPDF($datos,$vistaurl,$tipo)
    {

        $data = $datos;
        $date = date('Y-m-d');
        $view =  \View::make($vistaurl, compact('data', 'date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        
        if($tipo==1){return $pdf->stream('reporte');}
        if($tipo==2){return $pdf->download('reporte.pdf'); }

    }


    public function crear_reporte_pornucleo($tipo){

     $vistaurl="pdf.reporte_por_nucleo";
     $nucleos=Nucleo::whereBetween('id', [1, 6])->get();
     
     return $this->crearPDF($nucleos, $vistaurl,$tipo);




    }

   public function crearpdf_usu($datos,$vistaurl,$topo)
    {

        $data = $datos;
        $date = date('Y-m-d');
        $view =  \View::make($vistaurl, compact('data', 'date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        
        if($topo==1){return $pdf->stream('reporte');}
        if($topo==2){return $pdf->download('reporte.pdf'); }

    }


    public function crear_reporte_usuario($topo){

     $vistaurl="pdf.reporte_de_usuarios";
     $usuario=User::all();
     
     return $this->crearPDF($usuario, $vistaurl,$topo);




    }

          public function crearpdf_natil($datos,$vistaurl,$tapa)
    {

        $data = $datos;
        $date = date('Y-m-d');
        $view =  \View::make($vistaurl, compact('data', 'date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        
        if($tapa==1){return $pdf->stream('reporte');}
        if($tapa==2){return $pdf->download('reporte.pdf'); }

    }


        public function crear_reporte_natil($tapa){

     $vistaurl="pdf.reporte_de_natil";
     $usuario=User::where('nucleo', '4')->get();

     return $this->crearPDF($usuario,$vistaurl,$tapa);




    }
              public function crearpdf_mp($datos,$vistaurl,$tapa)
    {

        $data = $datos;
        $date = date('Y-m-d');
        $view =  \View::make($vistaurl, compact('data', 'date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        
        if($mp==1){return $pdf->stream('reporte');}
        if($mp==2){return $pdf->download('reporte.pdf'); }

    }


        public function crear_reporte_mp($mp){

     $vistaurl="pdf.reporte_de_natil";
     $usuario=User::where('nucleo', '1')->get();

     return $this->crearPDF($usuario,$vistaurl,$mp);




    }
              public function crearpdf_jr($datos,$vistaurl,$tapa)
    {

        $data = $datos;
        $date = date('Y-m-d');
        $view =  \View::make($vistaurl, compact('data', 'date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        
        if($jr==1){return $pdf->stream('reporte');}
        if($jr==2){return $pdf->download('reporte.pdf'); }

    }


        public function crear_reporte_jr($jr){

     $vistaurl="pdf.reporte_de_natil";
     $usuario=User::where('nucleo', '2')->get();

     return $this->crearPDF($usuario,$vistaurl,$jr);




    }

        
              public function crearpdf_rm($datos,$vistaurl,$tapa)
    {

        $data = $datos;
        $date = date('Y-m-d');
        $view =  \View::make($vistaurl, compact('data', 'date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        
        if($rm==1){return $pdf->stream('reporte');}
        if($rm==2){return $pdf->download('reporte.pdf'); }

    }


        public function crear_reporte_rm($rm){

     $vistaurl="pdf.reporte_de_natil";
     $usuario=User::where('nucleo', '3')->get();

     return $this->crearPDF($usuario,$vistaurl,$rm);




    }
              public function crearpdf_hd($datos,$vistaurl,$tapa)
    {

        $data = $datos;
        $date = date('Y-m-d');
        $view =  \View::make($vistaurl, compact('data', 'date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        
        if($hd==1){return $pdf->stream('reporte');}
        if($hd==2){return $pdf->download('reporte.pdf'); }

    }


        public function crear_reporte_hd($hd){

     $vistaurl="pdf.reporte_de_natil";
     $usuario=User::where('nucleo', '5')->get();

     return $this->crearPDF($usuario,$vistaurl,$hd);




    }

public function crearpdf_eg($datos,$vistaurl,$tapa)
    {

        $data = $datos;
        $date = date('Y-m-d');
        $view =  \View::make($vistaurl, compact('data', 'date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        
        if($eg==1){return $pdf->stream('reporte');}
        if($eg==2){return $pdf->download('reporte.pdf'); }

    }


        public function crear_reporte_eg($eg){

     $vistaurl="pdf.reporte_de_natil";
     $usuario=User::where('nucleo', '6')->get();

     return $this->crearPDF($usuario,$vistaurl,$eg);




    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
