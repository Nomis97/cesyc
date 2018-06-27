                                                   <!-- 
              <?= $d=strtotime("-30 Minute");
               $formatted_dt1=Carbon\Carbon::parse(date("Y-m-d h:i:sa", $d));
$formatted_dt2=Carbon\Carbon::parse($inves->fecha); ?>  
        <?=  $date_diff=$formatted_dt1->diffInYears($formatted_dt2);   ?>
-->   
<?php  if($formatted_dt2 < $formatted_dt1 || $formatted_dt2 > $formatted_dt1){   ?>
                                                                <?php if($inves->estado==3 || $inves->estado==2 || $inves->estado==1){  ?>
<div class="row">  

 <div class="col-md-11">

      <div class="box box-primary">
                        
            <div class="box-header">
                <h3 class="box-title">Investigacion no culminada</h3>
            </div><!-- /.box-header      class="formarchivo"  enctype="multipart/form-data"    if(nombreform=="f_editar_investigacion" ){ var miurl="editar_investigaciones_usuario";  var divresul="notificacion_resul_fei"; rs=true;  }   -->
                 <input type="hidden" name="idfinal" value="<?= $inves->id; ?>"> 

<div class=" tools pull-right col-xs-3 ">
                              <label for="pais">Tipo de Investigacion</label>

                              
          <?php foreach($invesn as $tipo){  ?>
                                                                <?php if($tipo->id==$inves->idinves){  ?>
                                   <p value="<?= $tipo->id; ?>" > <b> Actual:</b> <?= $tipo->titulo; ?> </p>
                                <?php } ?>
                                <?php } ?>


                       </div>


               <div class="box-body ">
        <div class=" form-group col-xs-4 ">
                              <label for="pais">Linea</label>
                                <?php foreach($line as $tip){  ?>

                                <?php if($tip->id==$inves->lineas){  ?>
                                <p value="<?= $tip->id; ?>" ><b style="font-weight: bold;"> ACTUAL:</b> <?= $tip->nombrel; ?> </p>
                                                                                                   <?php } ?>
                                                                                                   <?php } ?>

                       </div>

                        <div class="form-group col-xs-12">
                              <label for="apellido">Titulo de la Investigacion</label>
                              <input type="text" class="form-control" id="titulo_investigacion" name="titulo_investigacion" value="<?= $inves->titulo; ?>" readonly="readonly">
                              <div id="mensaje1" class="errores">Titulo requerido</div>

                         </div>

                                                                                         

                                                                <?php if($inves->forma== 2){  ?>

                           <div class="form-group col-xs-12">
                              <p> <label for="apellido">Integrantes</label></p>

        <div class=" tools pull-right col-xs-2 ">
          <b>integrante 6</b>
                                <?php foreach($tou as $tip){  ?>
                                <?php if($tip->id==$inves->integrante6){  ?>
<p><?= $tip->nombres; ?>, <?= $tip->apellidos; ?></p>
                          <?php } ?>
                          <?php } ?>
                       </div>

        <div class=" tools pull-right col-xs-2 ">
          <b>integrante 5</b>
                                <?php foreach($tou as $tip){  ?>
                                <?php if($tip->id==$inves->integrante5){  ?>
<p><?= $tip->nombres; ?>, <?= $tip->apellidos; ?></p>
                          <?php } ?>
                          <?php } ?>
                       </div>      
        <div class=" tools pull-right col-xs-2 ">
          <b>integrante 4</b>
                                <?php foreach($tou as $tip){  ?>
                                <?php if($tip->id==$inves->integrante4){  ?>
<p><?= $tip->nombres; ?>, <?= $tip->apellidos; ?></p>
                          <?php } ?>
                          <?php } ?>
                       </div>
                                 <div class=" tools pull-right col-xs-2 ">
          <b>integrante 3</b>
                                <?php foreach($tou as $tip){  ?>
                                <?php if($tip->id==$inves->integrante3){  ?>
<p><?= $tip->nombres; ?>, <?= $tip->apellidos; ?></p>
                          <?php } ?>
                          <?php } ?>
                       </div>
                                <div class=" tools pull-right col-xs-2 ">
          <b>integrante 2</b>
                                <?php foreach($tou as $tip){  ?>
                                <?php if($tip->id==$inves->integrante2){  ?>
<p><?= $tip->nombres; ?>, <?= $tip->apellidos; ?></p>
                          <?php } ?>
                          <?php } ?>
                       </div>

                                <div class=" tools pull-right col-xs-2 ">
          <b>integrante 1</b>
                                <?php foreach($tou as $tip){  ?>
                                <?php if($tip->id==$inves->integrante1){  ?>
<p><?= $tip->nombres; ?>, <?= $tip->apellidos; ?></p>
                          <?php } ?>
                          <?php } ?>
                       </div>

                                                </div>  
                                                                                <?php } ?>

                           <div class="form-group col-xs-12">
                              <input type="hidden" class="form-control" id="nucleo" name="nucleo" value="<?=  $usuario->nucleo;  ?>" >
                         </div> 

                       <div class="form-group col-xs-12">
                       <label>Resumen</label>
                       <textarea readonly="readonly" class="form-control" rows="3" placeholder=" ..."  id="descripcion_investigacion"  name="descripcion_investigacion" ><?= $inves->descripcion; ?></textarea>
                       </div>

                       <div class="form-group col-xs-12">
                       <label>Objetivo</label>
                       <textarea readonly="readonly" class="form-control" rows="3" placeholder=" ..."  id="objetivo_investigacion"  name="objetivo_investigacion" ><?= $inves->objetivo; ?></textarea>
                       </div>

                                    <?php if($inves->estado == 2 && $inves->face4 != ""){  ?>
                         <div class="form-group col-xs-2">
<p class="tools pull-right"><b> Estado actual:</b> Culminado. </p>
                     <span  value="<?= $inves->estado; ?>"  ></span>


<p>

<div class="radio">
  <label><input type="radio" checked="checked" id="estado_investigacion" name="estado_investigacion" value="2"  onchange="mostrardiv_fac(this.value);">Desarrollo de fases culminado.</label>
</div>
</p>
</div>
                                <?php } ?>
                                    <?php if($inves->estado == 2 && $inves->face4 == ""){  ?>
                         <div class="form-group col-xs-2">
<p class="tools pull-right"><b> Estado actual:</b> Sin culminar. </p>
                     <span  value="<?= $inves->estado; ?>"  ></span>


<p>

<div class="radio">
  <label><input type="radio" checked="checked" id="estado_investigacion" name="estado_investigacion" value="2"  onchange="mostrardiv_fac(this.value);">Desarrollo de fases no culminado.</label>
</div>
</p>
</div>
                                <?php } ?>




                                                                                               <?php if($inves->estado == '2' || $inves->estado == '3'){?>
<div class=" col-xs-5"  >

                          <div class=" col-xs-12">
                              <label for="apellido">Fase 1</label>
                              <textarea type="text" readonly="readonly" class="form-control" id="face_investigacion" name="face_investigacion" value="" ><?=  $inves->face;  ?></textarea> 
                         </div>




                          <div class=" col-xs-12">
                              <label for="apellido">Fase 2</label>
                              <textarea type="text" readonly="readonly" class="form-control" id="face2" name="face2" value="" ><?=  $inves->face2;  ?></textarea> 
                         </div>
                         

</div>
       <div class=" col-xs-5"   >

                          <div class=" col-xs-12">
                              <label for="apellido">Fase 3</label>
                              <textarea type="text" readonly="readonly" class="form-control" id="face3" name="face3" value="" ><?=  $inves->face3;  ?></textarea> 
                         </div>




                          <div class=" col-xs-12">
                              <label for="apellido">Fase 4</label>
                              <textarea type="text" readonly="readonly" class="form-control" id="face4" name="face4" value="" ><?=  $inves->face4;  ?></textarea> 
                         </div>
                                                                                                    </div>

              

                                                                 <?php } ?>




               </div>
                                                      <?php if($inves->idinves == '2'){?>
<div class="col-xs-12" align="center">
                              <label for="apellido">Direccion de la comunidad:</label>
                              <textarea type="text" readonly="" class="form-control"><?=  $inves->lugar;  ?></textarea> 
                         </div>
                                                        <?php } ?>
        </div>
          

 </div>
</div>

  <script>
    autosize(document.querySelectorAll('textarea'));
  </script>
                                <?php } ?>
                                                                           <?php }?>
