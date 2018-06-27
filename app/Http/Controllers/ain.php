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
use App\Proyectos;
use App\Investigaciones;
use App\Nucleo;
use DB;

use Carbon\Carbon;



class ain extends Controller
{
    
        public function __construct()
    {
        $this->middleware('auth');
                Carbon::setLocale('es');

    }


    
            //leccion 11
    public function acpi(){
      $usua=User::all();

            $inv=Investigaciones::get();

               $usuarios=User::whereExists(function ($query) {
                $query->select(DB::raw(1))
                      ->from('proyectos')
                      ->whereRaw('proyectos.idUsuario = users.id');
            })
            ->orderBy('nombres', 'asc')->get();

            $nucleos=Nucleo::all();

       return view("listados.listaacpi")
              ->with("nucleos",$nucleos)
              ->with("inv",$inv)
              ->with("usua",$usua)

         ->with("usuarios",$usuarios);
    }    

    public function inacpi(){
      $usua=User::all();

            $inv=Investigaciones::get();

               $usuarios=User::whereNotExists(function ($query) {
                $query->select(DB::raw(1))
                      ->from('proyectos')
                      ->whereRaw('proyectos.idUsuario = users.id');
            })
            ->orderBy('nombres', 'asc')->get();

            $nucleos=Nucleo::all();

       return view("listados.listainacpi")
              ->with("nucleos",$nucleos)
              ->with("inv",$inv)
              ->with("usua",$usua)

         ->with("usuarios",$usuarios);
    }
    public function acin(){
      $usua=User::all();

            $inv=Investigaciones::get();

               $usuarios=User::whereExists(function ($query) {
                $query->select(DB::raw(1))
                      ->from('investigaciones')
                      ->whereRaw('investigaciones.idUsuario = users.id');
            })
            ->orderBy('nombres', 'asc')->get();

            $nucleos=Nucleo::all();

       return view("listados.lisacin")
              ->with("nucleos",$nucleos)
              ->with("inv",$inv)
              ->with("usua",$usua)

         ->with("usuarios",$usuarios);
    }



        public function ina(){
               $usuario=User::whereExists(function ($query) {
                $query->select(DB::raw(1))
                      ->from('investigaciones')
                      ->whereRaw('investigaciones.idUsuario = users.id');
            })
            ->orderBy('nombres', 'asc')->get();
            $pro=proyectos::all();


               $usuarios=User::whereNotExists(function ($query) {
                $query->select(DB::raw(1))
                      ->from('proyectos')
                      ->whereRaw('proyectos.idUsuario = users.id');
            })
            ->orderBy('nombres', 'asc')->get();
$nucleos=Nucleo::all();

       return view("listados.lisina")

              ->with("nucleos",$nucleos)
         ->with("usuario",$usuario)
         ->with("pro",$pro)

         ->with("usuarios",$usuarios);
    }
  }