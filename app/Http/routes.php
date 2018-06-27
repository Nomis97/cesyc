<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.

  Route::get('listado_graficas', 'GraficasController@index');
  Route::get('grafica_registros/{anio}/{mes}', 'GraficasController@registros_mes');
  Route::get('grafica_publicaciones', 'GraficasController@total_publicaciones');


|
*/

//rutas accessibles slo si el usuario no se ha logueado
Route::group(['middleware' => 'guest' ], function () {

	Route::get('login', 'Auth\AuthController@getLogin');
	Route::post('login', ['as' =>'login', 'uses' => 'Auth\AuthController@postLogin']); 
	// Registration routes...
	Route::get('registro', 'Auth\AuthController@getRegister');
	Route::post('register', ['as' => 'auth/register', 'uses' => 'Auth\AuthController@postRegister']);


Route::get('password','Auth\PasswordController@getEmail');
Route::post('password','Auth\PasswordController@postEmail');

Route::get('reset/{token}','Auth\PasswordController@getReset');
Route::post('reset','Auth\PasswordController@postReset');
});

//rutas accessibles solo si el usuario esta autenticado y ha ingresado al sistema
Route::group(['middleware' => 'auth'], function () {

  Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);


      Route::get('/', 'HomeController@index');
  Route::get('home', 'HomeController@index');
  
      Route::get('info_datos_usuario/{id}', 'UsuariosController@info_datos_usuario');

            Route::get('menu', 'UsuariosController@menu');
                        Route::get('usuprin/{page?}', 'UsuariosController@per_usu');

   Route::get('listado_graficas', 'GraficasController@index');
  Route::get('grafica_registros/{anio}/{mes}', 'GraficasController@registros_mes');
  Route::get('grafica_publicaciones', 'GraficasController@total_publicaciones');
  Route::get('grafica_nucleo', 'GraficasController@total_nucleo');
  Route::get('grafica_pfg', 'GraficasController@total_pfg');

  Route::get('listado_usuarios/{page?}', 'UsuariosController@listado_usuarios');


        Route::get('form_editar_usuario/{id}', 'UsuariosController@form_editar_usuario');

         Route::post('editar_usuario', 'UsuariosController@editar_usuario');
      Route::post('subir_imagen_usuario', 'UsuariosController@subir_imagen_usuario');

      Route::post('cambiar_password', 'UsuariosController@cambiar_password');

        Route::get('/mostrar_errores', 'UsuariosController@mostrar_errores');

               Route::get('listado_publicaciones/{id?}', 'PublicacionesController@listado_publicaciones');
  Route::get('descargar_publicacion/{id}', 'PublicacionesController@descargar_publicacion');

    Route::get('descargar_investigacion/{id}', 'InvestigacionesController@descargar_investigacion');
    Route::get('listado_proyectos/{id?}', 'ProyectosController@listado_proyectos');
        Route::get('pida', 'ProyectosController@pida');
                Route::get('seccionp', 'ProyectosController@spida');
                                Route::get('pp', 'ProyectosController@pp');
                                Route::get('perfil_usuario', 'UsuariosController@perfil_usuario');



      Route::get('listado_investigaciones/{id?}', 'InvestigacionesController@listado_investigaciones');
      Route::get('listacolev', 'InvestigacionesController@listacolev');

      Route::post('agregar_nuevo_usuario', 'UsuariosController@agregar_nuevo_usuario');
            Route::get('form_nuevo_usuario', 'UsuariosController@form_nuevo_usuario');




     
  Route::get('buscar_usuarios/{nucleo}/{dato?}', 'UsuariosController@buscar_usuarios');


  Route::get('usuariosline/{Lineas}/{dato?}', 'InvestigacionesController@usuariosline');


      Route::post('agregar_comentario', 'PublicacionesController@agregar_comentario');


      
      Route::get('form_educacion_usuario/{id}', 'EducacionController@form_educacion_usuario');
      Route::post('agregar_educacion_usuario', 'EducacionController@agregar_educacion');
      Route::get('borrar_educacion/{id}', 'EducacionController@borrar_educacion');

      //leccion 11
      Route::get('form_publicaciones_usuario', 'PublicacionesController@form_publicaciones_usuario');
      Route::post('agregar_publicacion_usuario', 'PublicacionesController@agregar_publicacion');
      Route::get('borrar_publicacion/{id}', 'PublicacionesController@borrar_publicacion');

      //leccion 11 repetida
    Route::get('form_proyectos_usuario', 'ProyectosController@form_proyectos_usuario');
    Route::post('agregar_proyectos_usuario', 'ProyectosController@agregar_proyectos_usuario');
    Route::get('editpi/{id}', 'ProyectosController@form_editar_proyecto');
        Route::post('editar_pida', 'ProyectosController@editar_pida');
    Route::get('borrar_proyecto/{id}', 'ProyectosController@borrar_proyecto');
    Route::get('form_nueva_investigaciones', 'InvestigacionesController@form_nueva_investigaciones');

    Route::get('form_nueva_investigaciones_usuario/{id}', 'InvestigacionesController@form_nueva_investigaciones_usuario');
    Route::post('agregar_investigaciones_usuario', 'InvestigacionesController@agregar_investigaciones_usuario');
    Route::get('borrar_investigacion/{id}', 'InvestigacionesController@borrar_investigacion');


        Route::get('newob/{id}', 'InvestigacionesController@obj');
    Route::post('agregar_obj', 'InvestigacionesController@agregar_obj');
        Route::get('edit_newob/{id}', 'InvestigacionesController@obj_edit');
    Route::post('edit_obj', 'InvestigacionesController@editar_objetivos');


    Route::post('editar_investigaciones', 'InvestigacionesController@editar_investigaciones');
        Route::post('residuo', 'InvestigacionesController@residuo');

        Route::get('reporteinv/{id}', 'InvestigacionesController@reinv');

    Route::get('form_editar_investigaciones/{id}', 'InvestigacionesController@form_editar_investigacion');
    Route::get('inv_nofinal/{id}', 'InvestigacionesController@investigacion_nofinal');

         Route::post('pausa', 'InvestigacionesController@pausa');

          Route::get('perfilad1', 'UsuariosController@per_ad1');
            Route::get('perfilad2', 'UsuariosController@per_ad2');
            Route::get('perfilad3', 'UsuariosController@per_ad3');
            Route::get('perfilad4', 'UsuariosController@per_ad4');
            Route::get('perfilad5', 'UsuariosController@per_ad5');
            Route::get('perfilad6', 'UsuariosController@per_ad6');

              Route::get('lista1/{page?}', 'UsuariosController@lista1');
  Route::get('lista2/{page?}', 'UsuariosController@lista2');
  Route::get('lista3/{page?}', 'UsuariosController@lista3');
  Route::get('lista4/{page?}', 'UsuariosController@lista4');
  Route::get('lista5/{page?}', 'UsuariosController@lista5');
  Route::get('lista6/{nucles}', 'UsuariosController@lista6');

            Route::get('crear_pida/{id}/{pida}', 'propdf@crear_pida');
            Route::get('crear_inv/{id}/{inv}', 'propdf@crear_inv');


});


//rutas accessibles solo para el usuario administrador

Route::group(['middleware' => 'usuarioAdmin'], function () {




});




Route::group(['middleware' => 'usuarioStandard'], function () {	
     






 

 });


Route::group(['middleware' => 'usuarioCoordinador'], function () { 

    Route::get('/getpdf', 'pdfusuController@getpdf');

    Route::get('reportes', 'PdfController@index');
  Route::get('reporte', 'pdfController@index');
    Route::get('reporte', 'pdfusuController@index');

          Route::get('crear_reporte_inve/{inve}/{id}', 'pdfusuController@crear_reporte_inve');

  Route::get('crear_reporte_pornucleo/{tipo}', 'PdfController@crear_reporte_pornucleo');
  Route::get('crear_reporte_usuario/{topo}', 'pdfController@crear_reporte_usuario');
  Route::get('crear_reporte_natil/{tapa}', 'pdfController@crear_reporte_natil');
    Route::get('crear_reporte_mp/{mp}', 'pdfController@crear_reporte_mp');
        Route::get('crear_reporte_jr/{jr}', 'pdfController@crear_reporte_jr');

    Route::get('crear_reporte_rm/{rm}', 'pdfController@crear_reporte_rm');

    Route::get('crear_reporte_hd/{hd}', 'pdfController@crear_reporte_hd');
        Route::get('crear_reporte_eg/{eg}', 'pdfController@crear_reporte_eg');

    Route::get('crear_reporte_pi1/{pi1}', 'pdfusuController@crear_reporte_pi1');
    Route::get('crear_reporte_pi2/{pi2}', 'pdfusuController@crear_reporte_pi2');
    Route::get('crear_reporte_pi3/{pi3}', 'pdfusuController@crear_reporte_pi3');
    Route::get('crear_reporte_pi4/{pi4}', 'pdfusuController@crear_reporte_pi4');
    Route::get('crear_reporte_pi5/{pi5}', 'pdfusuController@crear_reporte_pi5');
    Route::get('crear_reporte_pi6/{pi6}', 'pdfusuController@crear_reporte_pi6');


        Route::get('form_cargar_datos_usuarios', 'UsuariosController@form_cargar_datos_usuarios');
      Route::post('cargar_datos_usuarios', 'UsuariosController@cargar_datos_usuarios');





  Route::get('form_enviar_correo', 'CorreoController@crear');
  Route::post('enviar_correo', 'CorreoController@enviar');
  Route::post('cargar_archivo_correo', 'CorreoController@store');

      Route::get('borrar_usuario/{id}', 'UsuariosController@borrar_usuario');



    Route::get('lisacin', 'ain@acin');
    Route::get('lisina', 'ain@ina');
    Route::get('listaacpi', 'ain@acpi');
    Route::get('listainacpi', 'ain@inacpi');



 });






