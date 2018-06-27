
<div class="row">  

 <div class="col-md-12">

      <div class="box box-primary">
                        
            <div class="box-header">
                <h3 class="box-title">Agregar P.I.D.A</h3> </div>

           <!-- /.box-header  class="form-horizontal form_entrada" enctype="multipart/form-data" 


                if(quien=="f_agregar_proyectos" ){ var varurl="agregar_proyectos_usuario";  var divresul="notificacion_resul_fapr"; rs=true; }




            beforeSend: function(){
              $("#"+divresul+"").html($("#cargador_empresa").html());                
            },
            //una vez finalizado correctamente
         success: function(data){
              $("#"+divresul+"").html(data);
              $("#fotografia_usuario").attr('src', $("#fotografia_usuario").attr('src') + '?' + Math.random() );  

                 if(rs ){
                         $('#'+nombreform+'').trigger("reset");
                         mostrarseccion(seccion_sel);
                        }             
            },
            //si ha ocurrido un error
            error: function(data){
               alert("ha ocurrido un error") ;
                
            }

    });
        

irarriba();

});






public function form_editar_investigacion($id)
    {
        $usuario=\Auth::user();
        $nom=$usuario->proyectos()->take(1);
$nu=\Auth::user();
       return view("formularios.edipi")
         ->with("usuario",$usuario)
                  ->with("nu",$nu)

                  ->with("nom",$nom);
    }

            -->
                        <div id="capa_b" class="div_modab" ></div>

                                 <div id="capa_vadil" class="div_moda" ></div>
         <script>
var span = document.getElementsByClassName("clos")[0];
span.onclick = function() {
    capa_para_vadil.style.display = "none";
        capa_vadil.style.display = "none";


}
</script>

            <form  id="f_agregar_proyectos"  method="post"  action="agregar_proyectos_usuario" class="formarchivo"  enctype="multipart/form-data"> 
                 <input type="hidden" name="id_usuario" value="<?= $nu->id ?>">   
                 <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
               <div class="box-body ">

<div id="capa_para_b" class="div_contenib" ><h2>¿Guardar esta investigación?</h2> <button type="submit" class="btn btn-default cls" title="Guardar" style="font-weight: bold;">Aceptar</button><div class="btn btn-default cl" style="font-weight: bold;"> Cancelar</div> </div>
                                                        <div id="capa_para_vadil" class="div_contenid" ><span class="glyphicon glyphicon-remove clos"></span> <div id="notificacion_resul_fapr"></div> </div>
                              <label for="titulo"></label>
                             <input type="text" class="form-control" id="titulo" name="titulo" placeholder="(Aqui va el titulo)" style="text-align: center; color: #0099ff; font-size: x-large; font-weight: bold;">

<p style="text-align: center; border-width: 1px; border-style: solid; background: #66cccc; font-weight: bold;" >Datos Personales</p>

                           <div class="form-group col-xs-3">
<h4 style=" font-weight: bold;" >Nombres y Apellidos </h4>


                             <p type="text" class="form-control" id="" name="" value=""> <input type="hidden" id="nya" name="nya" value="<?= $nu->nombres ?> <?= $nu->apellidos ?>"><?= $nu->nombres ?> <?= $nu->apellidos ?></p>                                                                          </div> 

                           <div class="form-group col-xs-3">
<h4 style=" font-weight: bold;" >Cedula</h4>

                             <p type="text" class="form-control" id="" name="" value=""><?= $nu->cedula ?></p>                                                                             </div> 

                           <div class="form-group col-xs-3">
<h4 style=" font-weight: bold;" >Email</h4>

                             <p type="text" class="form-control" id="" name="" value=""><?= $nu->email ?></p>                                             </div> 
                                                                     <div class="form-group col-xs-3">
<h4 style=" font-weight: bold;" >Telefono</h4>

                             <p type="text" class="form-control" id="" name="" value=""><?= $nu->telefono ?></p>                                                      </div>        

                                                              <div class="form-group col-xs-6">
<h4 style=" font-weight: bold;" >Escalafón/ Dedicación</h4>

                             <p type="text" class="form-control" ><input type="hidden" id="esde" name="esde" value="<?= $nu->tema1 ?> / <?= $nu->tema2 ?>"><?= $nu->tema1 ?> / <?= $nu->tema2 ?></p>
                                                      </div> 

                                                        <div class="form-group col-xs-6">
<h4 style=" font-weight: bold;" >Área académica de inscripción</h4>

                             <p type="text" class="form-control" id="" name="" value=""><input type="hidden" name="tema3" id="tema3" value="<?= $nu->tema3 ?>"><?= $nu->tema3 ?></p>
                                                                                 </div> 

  <div class="form-group col-xs-6">
<h4 style=" font-weight: bold;" >PFG</h4>
  <?php    foreach($pf as $pfg){  ?>

<?php if($pfg->id==$nu->tema5){ ?>




                             <p type="text" class="form-control" id="" name="" value=""><input type="hidden" id="pfg" name="pfg" value="<?= $nu->tema5 ?>"><?= $pfg->nombre ?></p>
                                 <?php }?>
        <?php }?>
                                                                                 </div> 
                                                                                   <div class="form-group col-xs-6">
<h4 style=" font-weight: bold;" >Nucleo Academico</h4>

                             <p type="text" class="form-control" id="" name="" value=""><?= $nu->delnucleo->nombre;  ?></p>

                                                                                 </div> 
                                                                                          

                                                                                                 <div class="form-group col-xs-12">
<h4 style=" font-weight: bold;" ><span style="color: red; font-size: 190% font-weight: bold;">*</span>Objetivo Estratégico</h4>

                             <input type="text" class="form-control" id="objetivoestrategico" name="objetivoestrategico" value="<?= $usuario->objetivoestrategico ?>" style="background: #66cccc; ">
                                                                                 </div> 

  <div class="form-group col-xs-12">
<h4 style=" font-weight: bold;" ><span style="color: red; font-size: 190%  font-weight: bold;">*</span>Vinculación</h4>

                                             <textarea class="form-control" rows="3" id="vinculacion"  name="vinculacion" style=" border-width: 1px; border-style: solid;   resize: none;" placeholder =""><?= $usuario->vinculacion ?></textarea>

                       </div> 

                                                                              



  
                           <div class="form-group col-xs-12">
                              <input type="hidden" class="form-control" id="nucleo" name="nucleo" value="<?=  $nu->nucleo;  ?>" >
                         </div>
                                                  <div class="form-group col-xs-12">
                              <input type="hidden" class="form-control" id="info1" name="info1" value="99" >
                         </div>

                             </div>



               <div class="box-footer col-xs-12" align="center">
<label class="btn btn-default " >
 <label for="archivo" onclick="PDF"> </label> <i class="glyphicon glyphicon-file" ></i>
                            <input type="file" class="form-control" id="file" name="file" style="display: none;" >
</label>
                             <div id="myBtn" class="btn btn-default" title="Guardar"><i class="glyphicon glyphicon-hdd"></i></div>
               </div>
             
            </form>
            <div style="font-weight: bold;">Los titulos o campos que esten marcados con (<span style="color: red; font-size: 190%">*</span>) son requeridos.</div>
        </div>


 </div>

               <script>
                var btn = document.getElementById("myBtn");
btn.onclick = function() {
    capa_b.style.display = "block";
        capa_para_b.style.display = "block";
}
var span = document.getElementsByClassName("cl")[0];
span.onclick = function() {
    capa_para_b.style.display = "none";
        capa_b.style.display = "none";

}
var span = document.getElementsByClassName("cls")[0];
span.onclick = function() {
    capa_para_b.style.display = "none";
        capa_b.style.display = "none";

}
</script>
   <script>
    autosize(document.querySelectorAll('textarea'));
  </script>



 <!--
  <script type="text/javascript">
  $('#txtarea').wysihtml5();
</script>
        $usuario=User::all();
       $proyectos= $usuario->proyectos();
       $rutaarchivos= "../storage/archivos/";

       return view("formularios.form_proyectos_usuario")
       ->with("usuario",$usuario)
       ->with("proyectos",$proyectos) 
       ->with("rutaarchivos",$rutaarchivos);

 <div class=" col-xs-12" style="background-color:rgb(229, 245, 253);" >
 <label for="apellido">Archivo a subir (Formato: PDF) </label>
 </div>