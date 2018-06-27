
<div class="row">  

 <div class="col-md-11">

      <div class="box box-primary">
                        
            <div class="box-header">
                <h3 class="box-title">Continuar P.I.D.A</h3> </div>

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

            -->
         <div id="notificacion_resul_edi"></div>

            <form  id="edi_proyectos"  method="post"  action="editar_pida" class="formarchivo"  enctype="multipart/form-data"> 
                 <input type="hidden" name="id_pi" value="<?= $pro->id ?>">   
                 <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 

               <div class="box-body ">


                              <label for="titulo"></label>
                             <input type="text" class="form-control" id="titulo" name="titulo" value="<?= $pro->titulo ?>" style="text-align: center; color: #0099ff; font-size: x-large; font-weight: bold;" required="">

<p style="text-align: center; border-width: 1px; border-style: solid; background: #66cccc; font-weight: bold;" >Datos Personales</p>

                           <div class="form-group col-xs-3">
<h4 style=" font-weight: bold;" >Nombres y Apellidos </h4>


                             <p type="text" class="form-control" id="" name="" value=""> <input type="hidden" id="nya" name="nya"><?= $nu->nombres ?> <?= $nu->apellidos ?></p>                                                                          </div> 

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

                             <p type="text" class="form-control" ><input type="hidden" id="esde" name="esde" value=" <?= $pro->esde ?>"><?= $pro->esde ?></p>
                                                      </div> 

                                                        <div class="form-group col-xs-6">
<h4 style=" font-weight: bold;" >Área académica de inscripción</h4>

                             <p type="text" class="form-control" id="" name="" value=""><input type="hidden" name="tema3" id="tema3" value="<?= $pro->aai ?>"><?= $pro->aai ?></p>
                                                                                 </div> 

  <div class="form-group col-xs-6">
<h4 style=" font-weight: bold;" >PFG</h4>
  <?php    foreach($pf as $pfg){  ?>

<?php if($pfg->id==$pro->pfg){ ?>
                             <p type="text" class="form-control" id="" name="" value=""><input type="hidden" id="pfg" name="pfg" value="<?= $pro->pfg ?>"><?= $pfg->nombre ?></p>
                                     <?php }?>
        <?php }?>

                                                                                 </div> 
                                                                                   <div class="form-group col-xs-6">
<h4 style=" font-weight: bold;" >Nucleo Academico</h4>
                                                          <?php foreach($nucle as $nucleo){  ?>

                                                                                          <?php if($pro->nucleo==$nucleo->id){  ?>

                             <p type="text" class="form-control" id="" name="" value=""><?= $nucleo->nombre;  ?></p>
                                <?php } ?>
                                <?php } ?>

                                                                                 </div> 
                                                                                          

                                                                                                 <div class="form-group col-xs-12">
<h4 style=" font-weight: bold;" >Objetivo Estratégico</h4>

                             <input type="text" class="form-control" id="objetivoestrategico" name="objetivoestrategico" value="<?= $pro->objetivoestrategico ?>" style="background: #66cccc; ">
                                                                                 </div> 

  <div class="form-group col-xs-12">
<h4 style=" font-weight: bold;" >Vinculacion</h4>

                                             <textarea class="form-control" rows="3" id="vinculacion"  name="vinculacion" style=" border-width: 1px; border-style: solid;   resize: none;" placeholder =""><?= $pro->vinculacion ?></textarea>

                       </div> 

<?php foreach($investigaciones as $usuari){ ?>
  <?php  if($pro->id==$usuari->idpro){   ?>

                                                                               <div class="form-group col-xs-4">

                     <textarea readonly id="txtarea" class="form-control" rows="3"   id="info1"  name="info1"  style=" resize: none;" placeholder="" ><?= $usuari->descripcion ?></textarea>
                       </div>

   <div class="form-group col-xs-8">
                      <textarea readonly class="form-control" rows="3"   id="inf1"  name="inf1" style=" resize: none;" placeholder="" ><?= $usuari->objetivo ?></textarea>
                    </br>
                                           <div class="col-xs-4"><b>Fecha de inicio: </b><?=  $usuari->fecha;  ?></div>
                                           <div class="col-xs-4"><b>Fecha Final: </b><?=  $usuari->fechaini;  ?></div>
                                           <div class="col-xs-4"><b>Prorroga: </b><?=  $usuari->fepro;  ?></div>

                       </div>


                                <?php } ?>

                                <?php } ?>

<div class="form-group col-xs-12">
                              <input type="hidden" class="form-control" id="info1" name="info1" value="97" >
                         </div>

                           <div class="form-group col-xs-12">
                              <input type="hidden" class="form-control" id="nucleo" name="nucleo" value="<?=  $nu->nucleo;  ?>" >
                         </div>
                             </div>



               <div class="box-footer col-xs-12" align="center">
<label class="btn btn-default " >
 <label for="archivo" onclick="PDF"> </label> <i class="glyphicon glyphicon-file" ></i>
                            <input type="file" class="form-control" id="file" name="file" style="display: none;" >
</label>
               <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-hdd"></i></button>
               </div>
             
            </form>
        </div>


 </div>

   <script>
    autosize(document.querySelectorAll('textarea'));
  </script>


 <!--
<script type="text/javascript">
  $('#txtarea').wysihtml5();
</script>
        $pro=User::all();
       $proyectos= $usuario->proyectos();
       $rutaarchivos= "../storage/archivos/";

       return view("formularios.form_proyectos_usuario")
       ->with("usuario",$usuario)
       ->with("proyectos",$proyectos) 
       ->with("rutaarchivos",$rutaarchivos);

 <div class=" col-xs-12" style="background-color:rgb(229, 245, 253);" >
 <label for="apellido">Archivo a subir (Formato: PDF) </label>
 </div>