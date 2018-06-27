function irarriba(){
$('html, body').animate({scrollTop:0}, 300);
}

function cargarformulario(arg){
//funcion que carga todos los formularios del sistema
 
		if(arg==1){ var url = "form_nuevo_usuario"; }
    if(arg==2){ var url = "form_cargar_datos_usuarios";  }
    if(arg==3){ var url = "form_enviar_correo";  }
    if(arg==4){ var url = "form_publicaciones_usuario";  }
    if(arg==5){ var url = "form_proyectos_usuario";  }
    if(arg==6){ var url = "form_nueva_investigaciones";  }
    if(arg==7){ var url = "form_perful";  }

    //if(arg==7){ var url = "form_editar_investigaciones";  }



		$("#contenido_principal").html($("#cargador_empresa").html());   
		$.get(url,function(resul){
      $("#contenido_principal").html(resul);
    })
        

}


function cargarlistado(listado,tipo){

    //funcion para cargar los diferentes  en general
if(listado==1){ var url = "usuprin"; }
if(listado==2){ var url = "listado_publicaciones/0"; }
if(listado==3){ var url = "reportes"; }
if(listado==4){ var url = "listado_graficas"; }
if(listado==5){ var url = "listado_investigaciones/0"; }
if(listado==6){ var url = "listado_proyectos/0"; }
if(listado==7){ var url = "reporte"; }
if(listado==8){ var url = "listado_usuarios"; }
if(listado==9){ var url =  "lista1"; }
if(listado==10){ var url = "lista2"; }
if(listado==11){ var url = "lista3"; }
if(listado==12){ var url = "lista4"; }
if(listado==13){ var url = "lista5"; }
if(listado==14){ var url = "lista6/"+tipo+""; }
if(listado==15){ var url = "pida"; }
if(listado==16){ var url = "seccionp"; }
if(listado==17){ var url = "perfil_usuario"; }
if(listado==18){ var url = "menu"; }
if(listado==19){ var url = "lisacin"; }
if(listado==20){ var url = "lisina"; }
if(listado==21){ var url = "listacolev"; }
if(listado==22){ var url = "newob"; }
if(listado==23){ var url = "listaacpi"; }
if(listado==24){ var url = "listainacpi"; }







$("#contenido_principal").html($("#cargador_empresa").html());
$.get(url,function(resul){

  $("#contenido_principal").html(resul); 
})

}

function cargarlistado1(listado){
    //funcion para cargar los diferentes  en general
if(listado==1){ var url = "perfilad1"; }
$("#contenido_principal").html($("#cargador_empresa").html());
$.get(url,function(resul){
  $("#contenido_principal").html(resul); 
})

}

function cargarlistado2(listado){

    //funcion para cargar los diferentes  en general

if(listado==1){ var url = "perfilad2"; }



$("#contenido_principal").html($("#cargador_empresa").html());
$.get(url,function(resul){

  $("#contenido_principal").html(resul); 
})

}
function cargarlistado3(listado){

    //funcion para cargar los diferentes  en general

if(listado==1){ var url = "perfilad3"; }



$("#contenido_principal").html($("#cargador_empresa").html());
$.get(url,function(resul){

  $("#contenido_principal").html(resul); 
})

}
function cargarlistado4(listado){

    //funcion para cargar los diferentes  en general

if(listado==1){ var url = "perfilad4"; }



$("#contenido_principal").html($("#cargador_empresa").html());
$.get(url,function(resul){

  $("#contenido_principal").html(resul); 
})

}
function cargarlistado5(listado){

    //funcion para cargar los diferentes  en general

if(listado==1){ var url = "perfilad5"; }



$("#contenido_principal").html($("#cargador_empresa").html());
$.get(url,function(resul){

  $("#contenido_principal").html(resul); 
})

}
function cargarlistado6(listado){

    //funcion para cargar los diferentes  en general

if(listado==1){ var url = "perfilad6"; }



$("#contenido_principal").html($("#cargador_empresa").html());
$.get(url,function(resul){

  $("#contenido_principal").html(resul); 
})

}



 $(document).on("submit",".form_entrada",function(e){

//funcion para atrapar los formularios y enviar los datos

       e.preventDefault();
        
        $('html, body').animate({scrollTop: '0px'}, 200);
        
        var formu=$(this);
        var quien=$(this).attr("id");
        var rs=false; //leccion 10
        var seccion_sel=  $("#seccion_seleccionada").val();


        if(quien=="f_nuevo_usuario"){ var varurl="agregar_nuevo_usuario"; var divresul="notificacion_resul_fanu";  rs=true;}
        if(quien=="f_editar_usuario"){ var varurl="editar_usuario"; var divresul="notificacion_resul_feu"; }
         if(quien=="f_cambiar_password"){ var varurl="cambiar_password"; var divresul="notificacion_resul_fcp"; }
                  if(quien=="edi_obj"){ var varurl="edit_obj"; var divresul="notificacion_obj_edit"; }

         if(quien=="nuevo_obj"){ var varurl="agregar_obj"; var divresul="notificacion_obj"; rs=true;}

        if(quien=="f_agregar_educacion"){ var varurl="agregar_educacion_usuario"; var divresul="notificacion_resul_faedu";  rs=true; }  //leccion 10

   
        $("#"+divresul+"").html($("#cargador_empresa").html());

              $.ajax({

                    type: "POST",
                    url : varurl,
                    datatype:'json',

                    data : formu.serialize(),

                    success : function(resul){
                        $("#"+divresul+"").html(resul);
                        if(rs ){$('#'+quien+'').trigger("reset");}
                        if(quien=="f_agregar_educacion"){ mostrarficha1(usuario_sel);}
                        
                    },
      
                     error: function(data){

                     var lista_errores="";
                     var errors = $.parseJSON(data.responseText);
                     var titulo="<br/><div class='rechazado'><label style='color:#FA206A'>Datos Necesario</label><ul>";
                      $.each(errors,function(index, value) {
                             lista_errores+='<li style="color:#FA206A;" >'+value+'</li>';
                      })
                     var footer="</ul></div>";
                     var htmlmensaje= titulo+lista_errores+ footer;
                     
                     $("#"+divresul+"").html(htmlmensaje); 
                    
      
                    }




                });
irarriba();

})



  


$(document).on("click",".pagination li a",function(e){
//para que la pagina se cargen los elementos
 e.preventDefault();
 var url =$( this).attr("href");
 $("#contenido_principal").html($("#cargador_empresa").html());
 $.get(url,function(resul){
    $("#contenido_principal").html(resul); 
 })

})


  //leccion 7 
function mostrarficha(id_usuario,tipo) {
  //funcion para mostrar y etditar la informacion del usuario
 
  $("#usuario_seleccionado").val(id_usuario,id_info,id_edu); // leccion10
  $("#capa_modal").show();
  $("#capa_para_edicion").show();
  if(tipo==1){var url = "info_datos_usuario/"+id_info+""; }
  if(tipo==2){ var url = "form_educacion_usuario/"+id_edu+""; }
  if(tipo==3){ var url = "form_editar_usuario/"+id_usuario+""; }
  $("#contenido_capa_edicion").html($("#cargador_empresa").html());  //leccion 10
  $.get(url,function(resul){
  $("#contenido_capa_edicion").html(resul);  //leccion 10
  })
irarriba();
}

function mostrarficha0(id_info) {
  //funcion para mostrar y etditar la informacion del usuario
 
  $("#usuario_seleccionado").val(id_info); // leccion10
  $("#capa_modal").show();
  $("#capa_para_edicion").show();
  var url = "info_datos_usuario/"+id_info+"";
  $("#contenido_capa_edicion").html($("#cargador_empresa").html());  //leccion 10
  $.get(url,function(resul){
  $("#contenido_capa_edicion").html(resul);  //leccion 10
  })
irarriba();
}
function mostrarficha1(id_edu) {
  //funcion para mostrar y etditar la informacion del usuario
 
  $("#usuario_seleccionado").val(id_edu); // leccion10
  $("#capa_modal").show();
  $("#capa_para_edicion").show();
var url = "form_educacion_usuario/"+id_edu+"";
  $("#contenido_capa_edicion").html($("#cargador_empresa").html());  //leccion 10
  $.get(url,function(resul){
  $("#contenido_capa_edicion").html(resul);  //leccion 10
  })
irarriba();
}
function mostrarficha2(id_usuario) {
  //funcion para mostrar y etditar la informacion del usuario
 
  $("#usuario_seleccionado").val(id_usuario); // leccion10
  $("#capa_modal").show();
  $("#capa_para_edicion").show();
  var url = "form_editar_usuario/"+id_usuario+"";
  $("#contenido_capa_edicion").html($("#cargador_empresa").html());  //leccion 10
  $.get(url,function(resul){
  $("#contenido_capa_edicion").html(resul);  //leccion 10
  })
irarriba();
}
function mostrarficha3(id_ue) {
  //funcion para mostrar y etditar la informacion del usuario
 
  $("#usuario_seleccionado").val(id_ue); // leccion10
  $("#capa_modal").show();
  $("#capa_para_edicion").show();
  var url = "form_editar_investigaciones/"+id_ue+"";
  $("#contenido_capa_edicion").html($("#cargador_empresa").html());  //leccion 10
  $.get(url,function(resul){
  $("#contenido_capa_edicion").html(resul);  //leccion 10
  })
irarriba();
}
function mostrarficha4(id_pe) {
  //funcion para mostrar y etditar la informacion del usuario
 
  $("#usuario_seleccionado").val(id_pe); // leccion10
  $("#capa_modal").show();
  $("#capa_para_edicion").show();
  var url = "perfil_usuario/"+id_pe+"";
  $("#contenido_capa_edicion").html($("#cargador_empresa").html());  //leccion 10
  $.get(url,function(resul){
  $("#contenido_capa_edicion").html(resul);  //leccion 10
  })
irarriba();
}

function mostrarficha5(id_pi) {
  //funcion para mostrar y etditar la informacion del usuario
 
  $("#usuario_seleccionado").val(id_pi); // leccion10
  $("#capa_modal").show();
  $("#capa_para_edicion").show();
  var url = "editpi/"+id_pi+"";
  $("#contenido_capa_edicion").html($("#cargador_empresa").html());  //leccion 10
  $.get(url,function(resul){
  $("#contenido_capa_edicion").html(resul);  //leccion 10
  })
irarriba();
}

function mostrarficha6(idinves) {
  //funcion para mostrar y etditar la informacion del usuario
 
  $("#usuario_seleccionado").val(idinves); // leccion10
  $("#capa_modal").show();
  $("#capa_para_edicion").show();
  var url = "newob/"+idinves+"";
  $("#contenido_capa_edicion").html($("#cargador_empresa").html());  //leccion 10
  $.get(url,function(resul){
  $("#contenido_capa_edicion").html(resul);  //leccion 10
  })
irarriba();
}
function mostrarficha7(idobj) {
  //funcion para mostrar y etditar la informacion del usuario
 
  $("#usuario_seleccionado").val(idobj); // leccion10
  $("#capa_modal").show();
  $("#capa_para_edicion").show();
  var url = "edit_newob/"+idobj+"";
  $("#contenido_capa_edicion").html($("#cargador_empresa").html());  //leccion 10
  $.get(url,function(resul){
  $("#contenido_capa_edicion").html(resul);  //leccion 10
  })
irarriba();
}
function mostrarficha8(idre) {
  //funcion para mostrar y etditar la informacion del usuario
 
  $("#usuario_seleccionado").val(idre); // leccion10
  $("#capa_modal").show();
  $("#capa_para_edicion").show();
  var url = "reporteinv/"+idre+"";
  $("#contenido_capa_edicion").html($("#cargador_empresa").html());  //leccion 10
  $.get(url,function(resul){
  $("#contenido_capa_edicion").html(resul);  //leccion 10
  })
irarriba();
}

function mostrarficha9(idfinal) {
  //funcion para mostrar y etditar la informacion del usuario
 
  $("#usuario_seleccionado").val(idfinal); // leccion10
  $("#capa_modal").show();
  $("#capa_para_edicion").show();
  var url = "inv_nofinal/"+idfinal+"";
  $("#contenido_capa_edicion").html($("#cargador_empresa").html());  //leccion 10
  $.get(url,function(resul){
  $("#contenido_capa_edicion").html(resul);  //leccion 10
  })
irarriba();
}
$(document).on("click",".div_modal",function(e){
 //funcion para ocultar las capas modales
 $("#capa_modal").hide();
 $("#capa_para_edicion").hide();
 $("#contenido_capa_edicion").html("");  //leccion 10

})  
$(document).on("click",".div_moda",function(e){
 //funcion para ocultar las capas modales
 $("#capa_vadil").hide();
 $("#capa_para_vadil").hide();
 $("#contenido_capa_edicion").html("");  //leccion 10

}) 
$(document).on("click",".div_modab",function(e){
 //funcion para ocultar las capas modales
 $("#capa_b").hide();
 $("#capa_para_b").hide();
 $("#contenido_capa_edicion").html("");  //leccion 10

}) 

$(document).on("submit",".formarchivo",function(e){


        e.preventDefault();
        var formu=$(this);
        var nombreform=$(this).attr("id");
        var rs=false; //leccion 10
        var seccion_sel=  $("#seccion_seleccionada").val();

        if(nombreform=="f_subir_imagen" ){ var miurl="subir_imagen_usuario";  var divresul="notificacion_resul_fci";   }
                if(nombreform=="pausar" ){ var miurl="pausa";    }
        if(nombreform=="f_residuo" ){ var miurl="residuo";  var divresul="notificacion_resul_fei"; rs=false; }

        if(nombreform=="edi_proyectos" ){ var miurl="editar_pida";  var divresul="notificacion_resul_edi"; rs=true; }
         if(nombreform=="nuevo_comentario"){ var miurl="agregar_comentario"; var divresul="comentariosn";   }

        if(nombreform=="f_agregar_proyectos" ){ var miurl="agregar_proyectos_usuario";  var divresul="notificacion_resul_fapr"; rs=true; }
        if(nombreform=="f_cargar_datos_usuarios" ){ var miurl="cargar_datos_usuarios";  var divresul="notificacion_resul_fcdu"; rs=true; }
        if(nombreform=="f_agregar_publicacion" ){ var miurl="agregar_publicacion_usuario";  var divresul="notificacion_resul_fap"; rs=true; }
        if(nombreform=="f_nueva_investigacion" ){ var miurl="agregar_investigaciones_usuario";  var divresul="notificacion_resul_fai"; rs=true; }          
          if(nombreform=="f_editar_investigacion" ){ var miurl="editar_investigaciones";  var divresul="notificacion_resul_fei";   }
    if(nombreform=="f_enviar_correo" ){ var miurl="enviar_correo";  var divresul="contenido_principal";   }

        //información del formulario
        var formData = new FormData($("#"+nombreform+"")[0]);

        //hacemos la petición ajax   

        $.ajax({

            url: miurl,  
            type: 'POST',
     
            // Form data
            //datos del formulario
                dataType: "html",
            data: formData,
            //necesario para subir archivos via ajax
            cache: false,
            contentType: false,
            processData: false,
            //mientras enviamos el archivo


      
 
            beforeSend: function(){

              $("#"+divresul+"").html($("#cargador_empresa").html());                
            },
            //una vez finalizado correctamente

         success: function(data){

              $("#"+divresul+"").html(data);
                      $("#capa_vadil").show();
                      $("#capa_para_vadil").show();
              $("#fotografia_usuario").attr('src', $("#fotografia_usuario").attr('src') + '?' + Math.random() );  
                        if(rs ){$('#'+nombreform+'').trigger("reset");}
                        if(nombreform=="f_agregar_proyectos"){ var url = "form_proyectos_usuario/" }
                        if(nombreform=="f_nueva_investigacion"){ var url = "form_nueva_investigaciones_usuario/" }
                        if(nombreform=="f_editar_investigacion"){ var url = "listado_investigaciones/" }

                        
                    },

            //si ha ocurrido un error



error: function(data){

                     var lista_errores="";
                     var errors = $.parseJSON(data.responseText);
                      $("#capa_vadil").show();
                      $("#capa_para_vadil").show();
                     var titulo="<br/><div class='rechazado'><label >Aun tiene que rellenar algunos campos necesarios.</label><ul>";
                      $.each(errors,function(index, value) {
                             lista_errores+='<li style="color:#FA206A;">'+value+'</li>';
                      })
                     var footer="</ul></div>";
                     var htmlmensaje= titulo+lista_errores+ footer;
                     
                     $("#"+divresul+"").html(htmlmensaje); 
                    
      
                    }

    });

irarriba();

});

//leccion  10
 function mostrarseccion(id_usuario,arg){
    var id_usuario=$("#usuario_seleccionado").val();

  $("#seccion_seleccionada").val(arg);
  if(arg==1){ var url = "form_editar_usuario/"+id_usuario+""; }
  if(arg==2){ var url = "form_educacion_usuario/"+id_usuario+""; }
  //if(arg==3){ var url = "form_publicaciones_usuario/"+id_usuario+""; } //leccion 11
  //if(arg==4){ var url = "form_proyectos_usuario/"+id_usuario+""; } //leccion 11
 // if(arg==5){ var url = "form_nueva_investigaciones_usuario/"+id_usuario+""; }

  $("#contenido_capa_edicion").html($("#cargador_empresa").html());
  $.get(url,function(resul){
  $("#contenido_capa_edicion").html(resul);
  })
}



//leccion 16
function mostrarseccionSTD(arg){
  var id_usuario=$("#usuario_seleccionado").val(); 
  $("#seccion_seleccionada").val(arg);
  if(arg==1){ var url = "info_datos_usuario/"+id_usuario+""; }
  $("#contenido_capa_edicion").html($("#cargador_empresa").html());
  $.get(url,function(resul){
  $("#contenido_capa_edicion").html(resul);
  })

}


function borrareducacion(arg){
     confirmar=confirm("�Borrar?"); 
if (confirmar)
  var url="borrar_educacion/"+arg+"" ;
  var divresul="notificacion_resul_edu";
  $("#"+divresul+"").html($("#cargador_empresa").html());

  $.get(url,function(resul){
    $("#"+divresul+"").html(resul);
    cargarlistado(17,1);
  })

}


function mostrardiv_investigaciones(arg){
  $("#des").hide();
  if(arg==2){ $("#des").show();  } 

}

function mostrardiv_face(arg){
  $("#estados").hide();
  $("#estad2").hide();
  $("#fa3").hide();
  $("#fa4").hide();

  if(arg==2){ $("#estados").show();  }
  if(arg==3){ $("#estad2").show();  } 
  if(arg==4){ $("#fa3").show();  } 
  if(arg==5){ $("#fa4").show();  } 


}
function mostrardiv_investigacione(arg){
  $("#deso").hide();
  if(arg==2){ $("#deso").show();  } 

}
function mostrardiv_forma(arg){
  $("#forma1").hide();
  if(arg==2){ $("#forma1").show(); } 

}

function mostrardiv_fac(arg){
    $("#estados").hide();
    $("#estad2").hide();
    $("#fa3").hide();
    $("#fa4").hide();

  if(arg==2){ $("#estados").show();  }
  if(arg==3){ $("#estad2").show();  } 
  if(arg==4){ $("#fa3").show();  } 
  if(arg==5){ $("#fa4").show();  } 

}

function mostrardiv_publicaciones(arg){
  $("#info_libro").hide();
  $("#info_revista").hide();
  if(arg==5){ $("#info_libro").show(); $("#info_revista").hide();  } 
  if(arg==4){ $("#info_libro").hide(); $("#info_revista").show();  } 

}

function borrarpublicacion(arg){
   confirmar=confirm("�Borrar?"); 
if (confirmar)
  var url="borrar_publicacion/"+arg+"" ;
  var divresul="notificacion_resul_fapu";
  $("#"+divresul+"").html($("#cargador_empresa").html());

  $.get(url,function(resul){
    $("#"+divresul+"").html(resul);
 cargarlistado(2,1);}) 

}
function borrarcom(arg){
   confirmar=confirm("�Borrar?"); 
if (confirmar)
  var url="borrar_publicacion/"+arg+"" ;
  var divresul="notificacion_resul_fapu";
  $("#"+divresul+"").html($("#cargador_empresa").html());

  $.get(url,function(resul){
    $("#"+divresul+"").html(resul);
 cargarlistado(1,1);
}) 

}


function borrarproyecto(arg){
  var url="borrar_proyecto/"+arg+"" ;
  var divresul="notificacion_resul_faprd";
  $("#"+divresul+"").html($("#cargador_empresa").html());



  $.get(url,function(resul){
    $("#"+divresul+"").html(resul);
  cargarlistado(6,1);
  })

}


function borrarinvestigacion(arg){
       confirmar=confirm("�Borrar?"); 
if (confirmar)
  var url="borrar_investigacion/"+arg+"" ;
  var divresul="notificacion_resul_faprp";
  $("#"+divresul+"").html($("#cargador_empresa").html());

  $.get(url,function(resul){
    $("#"+divresul+"").html(resul);
    cargarlistado(5,1);
  })

}


function borrarusuario(arg){
     confirmar=confirm("Desea Borrar este Usuario?"); 
if (confirmar)
var url="borrar_usuario/"+arg+"" ;
var divresul="notificacion_resul_fapu";
$("#"+divresul+"").html($("#cargador_empresa").html());

$.get(url,function(resul){
  $("#"+divresul+"").html(resul);
  cargarlistado(8,1);
})
}




function buscarusuario(){

  var nucleo=$("#select_filtro_nucleo").val();
  var dato=$("#dato_buscado").val();
      if(dato == "")
    {  
      var url="buscar_usuarios/"+nucleo+"";
    }
    else
    {
      var url="buscar_usuarios/"+nucleo+"/"+dato+"";
    }
      $("#contenido_principal").html($("#cargador_empresa").html());  
 $.get(url,function(resul){
    $("#contenido_principal").html(resul);  
  })

}

function buscarusuarioline(){

  var lineas=$("#lineal").val();

      var url="usuariosline/"+lineas+"";

      $("#contenido_principal").html($("#cargador_empresa").html());  
 $.get(url,function(resul){
    $("#contenido_principal").html(resul);  
  })

}
//leccion 13

$(document).on("change",".email_archivo",function(e){
   
    var miurl="cargar_archivo_correo";
   // var fileup=$("#file").val();
    var divresul="texto_notificacion";

    var data = new FormData();
    data.append('file', $('#file')[0].files[0] );
 

   
    console.log(data);


  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('#_token').val()
        }
    });


     $.ajax({
            url: miurl,  
            type: 'POST',
     
            // Form data
            //datos del formulario
            data: data,
            //necesario para subir archivos via ajax
            cache: false,
            contentType: false,
            processData: false,
            //mientras enviamos el archivo
            beforeSend: function(){
              $("#"+divresul+"").html($("#cargador_empresa").html());                
            },
            //una vez finalizado correctamente
            success: function(data){
              var codigo='<div class="mailbox-attachment-info"><a href="#" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i>'+ data +'</a><span class="mailbox-attachment-size"> </span></div>';
              $("#"+divresul+"").html(codigo);
                        
            },
            //si ha ocurrido un error
            error: function(data){
               $("#"+divresul+"").html(data);
                
            }
        });



});


