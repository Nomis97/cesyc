
<?php if(Auth::user()->tipoUsuario == "3") {?> 
                       <script>
var span = document.getElementsByClassName("clos")[0];
span.onclick = function() {
    capa_para_vadil.style.display = "none";
        capa_vadil.style.display = "none";


}
</script>
 <!-- 
              <?= $d=strtotime("-30 Minute");
               $formatted_dt1=Carbon\Carbon::parse(date("Y-m-d h:i:sa", $d));
$formatted_dt2=Carbon\Carbon::parse($inves->fecha); ?>  
        <?=  $date_diff=$formatted_dt1->diffInYears($formatted_dt2);   ?>
-->   
<?php  if($formatted_dt2 > $formatted_dt1){   ?>
                                                                <?php if($inves->estado==2 || $inves->estado==1){  ?>
<div class="row">  

 <div class="col-md-11">

      <div class="box box-primary">
                        
<!-- /.box-header      class="formarchivo"  enctype="multipart/form-data"    if(nombreform=="f_editar_investigacion" ){ var miurl="editar_investigaciones_usuario";  var divresul="notificacion_resul_fei"; rs=true;  }   -->
                                 <div id="capa_vadil" class="div_mod" ></div>
                                             <div id="capa_cd" class="div_modav" ></div>

                                 <script>
    function cargarfe(arg){

if(arg==1) {
  $('.fe1').val($('.fe2').val());

    capa_cd.style.display = "block";
        capa_para_cd.style.display = "block";

}
}
var span = document.getElementsByClassName("closet")[0];
span.onclick = function() {
    capa_para_cd.style.display = "none";
        capa_cd.style.display = "none";

}
var span = document.getElementsByClassName("closete")[0];
span.onclick = function() {
    capa_para_cd.style.display = "none";
        capa_cd.style.display = "none";

}
$( ".gua" ).click(function() {
  $( ".subir" ).submit();
});

</script>
<form  id="f_residuo"  method="post"  action="residuo" class="formarchivo"  enctype="multipart/form-data">
              <div id="capa_para_cd" class="div_conteniv">
                                 <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 

            <input type="hidden" id="id_inv" name="id_inv" value="<?=  $inves->id;  ?> "> 
                        <input type="hidden" id="fecha" name="fecha" value="<?=  $formatted_dt1; ?>"> 
                        <input type="hidden" id="integrante" name="integrante" class="field2"> 

  <h2>Desea cambiar la fecha?</h2> 
<b>De: <?=  $inves->fecha; ?></b> - <b>A: <input type="text" readonly="" class="fe1" name="descrip" id="descrip" ></b>
<br>
<br>
  <button type="submit" class="btn btn-default closet gua"  title="Guardar" style="font-weight: bold;">Aceptar</button>
  <a class="btn btn-default closete" title="Cancelar" style="font-weight: bold;" style="color: black;">Cancelar</a>

</div>   
</form>
            <form  id="f_editar_investigacion"  method="post"  action="editar_investigaciones" class="formarchivo forma subir"  enctype="multipart/form-data">                                            

            <div class="box-header">
                <h3 class="box-title">Editar Investigacion</h3>
            </div>
              <div id="capa_para_vadil" class="div_contenid" ><span class="glyphicon glyphicon-remove clos"></span> <div id="notificacion_resul_fei"></div> </div>

               
                 <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                 <input type="hidden" name="id_ue" value="<?= $inves->id; ?>"> 

        <div class=" tools pull-right col-xs-3 ">
                              <label for="pais">Tipo de Investigacion</label>
    <br>
                              
          <?php foreach($invesn as $tipo){  ?>
                                                                <?php if($tipo->id==$inves->idinves){  ?>
                                   <input type="hidden" id="tipo_investigacion" name="tipo_investigacion" value="<?= $tipo->id; ?>" > Actual: <?= $tipo->titulo; ?> 
                                <?php } ?>
                                <?php } ?>


                       </div>


               <div class="box-body ">
        <div class=" form-group col-xs-4 ">
                              <h4 style="font-weight: bold;" for="pais">Linea</h4>
                            

                                <?php foreach($line as $tip){  ?>
                                <?php if($tip->id==$inves->lineas){  ?>
                                <input type="hidden" class="col-md-11" id="lineal" name="lineal" readonly="" value="<?= $tip->id; ?>"><?= $tip->nombrel; ?>
                                                                                                   <?php } ?>
                                                                                                   <?php } ?>
                       </div>


                        <div class="form-group col-xs-12">
                              <label for="apellido">Titulo de la Investigacion</label><br>
                              <input readonly="" type="hidden" class="form-control" id="titulo_investigacion" name="titulo_investigacion" value="<?= $inves->titulo; ?>"><?= $inves->titulo; ?>
                              <div id="mensaje1" class="errores">Titulo requerido</div>

                         </div>

                                                                                         

                                                                <?php if($inves->forma== 2){  ?>

                           <div class="form-group col-xs-12">
                              <p> <label for="apellido">Integrantes</label></p>

        <div class=" tools pull-right col-xs-2 ">
          <b>integrante 6</b> <br>

                                <?php foreach($tou as $tip){  ?>
                                <?php if($tip->id==$inves->integrante6){  ?>

<input type="hidden" id="id_usuario6" name="id_usuario6"  id="demo6" value="<?= $inves->integrante6; ?>" ><?= $tip->nombres; ?>, <?= $tip->apellidos; ?>
                            <?php } ?>
                                <?php } ?>
                                                                        

                       </div>

        <div class=" tools pull-right col-xs-2 ">
          <b>integrante 5</b> <br>

                                <?php foreach($tou as $tip){  ?>
                                <?php if($tip->id==$inves->integrante5){  ?>

<input type="hidden" id="id_usuario5" name="id_usuario5"  id="demo6" value="<?= $inves->integrante5; ?>" ><?= $tip->nombres; ?>, <?= $tip->apellidos; ?>
                            <?php } ?>
                                <?php } ?>
                                                                        

                       </div>       
        <div class=" tools pull-right col-xs-2 ">
          <b>integrante 4</b> <br>

                                <?php foreach($tou as $tip){  ?>
                                <?php if($tip->id==$inves->integrante4){  ?>

<input type="hidden" id="id_usuario4" name="id_usuario4"  id="demo4" value="<?= $inves->integrante4; ?>" ><?= $tip->nombres; ?>, <?= $tip->apellidos; ?>
                            <?php } ?>
                                <?php } ?>                                        
                       </div>
                                       <div class=" tools pull-right col-xs-2 ">
          <b>integrante 3</b> <br>

                                <?php foreach($tou as $tip){  ?>
                                <?php if($tip->id==$inves->integrante3){  ?>

<input type="hidden" id="id_usuario3" name="id_usuario3"  id="demo3" value="<?= $inves->integrante3; ?>" ><?= $tip->nombres; ?>, <?= $tip->apellidos; ?>
                            <?php } ?>
                                <?php } ?>
                                                                        

                       </div>
                                <div class=" tools pull-right col-xs-2 ">
          <b>integrante 2</b> <br>

                                <?php foreach($tou as $tip){  ?>
                                <?php if($tip->id==$inves->integrante2){  ?>

<input type="hidden" id="id_usuario2" name="id_usuario2"  id="demo2" value="<?= $inves->integrante2; ?>" ><?= $tip->nombres; ?>, <?= $tip->apellidos; ?>
                            <?php } ?>
                                <?php } ?>
                                                                        

                       </div>      

                                <div class=" tools pull-right col-xs-2 ">
          <b>integrante 1</b> <br>

                                <?php foreach($tou as $tip){  ?>
                                <?php if($tip->id==$inves->integrante1){  ?>

<input type="hidden" id="id_usuario1" name="id_usuario1"  id="demo1" value="<?= $inves->integrante1; ?>" ><?= $tip->nombres; ?>, <?= $tip->apellidos; ?>
                            <?php } ?>
                                <?php } ?>
                                                                        

                       </div>

                                                </div>  
                                                                                <?php } ?>


<!-- <script>
function myFunction() {
    var st = document.getElementById("demo").innerHTML; 
    var re = st.replace('<?= $tip->nombres; ?>, <?= $tip->apellidos; ?>', '');
    document.getElementById("demo").innerHTML = re;
}
</script>-->

                           <div class="form-group col-xs-12">
                              <input type="hidden" class="form-control" id="nucleo" name="nucleo" value="<?=  $usuario->nucleo;  ?>" >
                         </div> 

                       <div class="form-group col-xs-12">
                       <label>Resumen</label>
                       <textarea readonly="" class="form-control" rows="3" placeholder=" ..."  id="descripcion_investigacion"  name="descripcion_investigacion" ><?= $inves->descripcion; ?></textarea>
                       </div>

                       <div class="form-group col-xs-12">
                       <label>Objetivo</label>
                       <textarea readonly="" class="form-control" rows="3" placeholder=" ..."  id="objetivo_investigacion"  name="objetivo_investigacion" ><?= $inves->objetivo; ?></textarea>
                       </div>


  
                         <div class="form-group col-xs-2">
                                    <?php if($inves->estado == 2 || $inves->estado == 3 || $inves->estado == 4){  ?>
<p class="tools pull-right"><b> Estado actual:</b> En Curso </p>
                     <span  value="<?= $inves->estado; ?>"  ></span>

                                <?php } ?>
                                                                    <?php if($inves->estado == 5){  ?>
<p class="tools pull-right"><b> Estado actual:</b> Finalizado </p>
                     <span  value="<?= $inves->estado; ?>"  ></span>

                                <?php } ?>



                                                    <?php if($inves->estado == '1'){?>

<p>Cambiar estado

<div class="radio">
  <label><input type="radio" checked="checked" id="estado_investigacion" name="estado_investigacion" value="1"  onchange="mostrardiv_fac(this.value);">Proyecto iniciado</label>
</div>
</p>
                                <?php } ?>
                                                    <?php if($inves->estado == '2'){?>

<p>Cambiar estado

<div class="radio">
  <label><input type="radio" checked="checked" id="estado_investigacion" name="estado_investigacion" value="2"  onchange="mostrardiv_fac(this.value);">Desarrollo de fases</label>
</div>
</p>
                                <?php } ?>

                                                    <?php if($inves->estado == '3'){?>

<p>Cambiar estado

<div class="radio">
  <label><input type="radio" checked="checked" id="estado_investigacion" name="estado_investigacion" value="3"  onchange="mostrardiv_fac(this.value);">Culminado/Entrega</label>
</div>
</p>
                                <?php } ?>

</div>
                                                    <?php if($inves->pause == 0){?>

   <div class="form-group col-xs-9">
                                </br>
                                                         <div class="form-group col-xs-6">
                             <label for="apellido">Fecha de Inicio</label>
                              <input type="text" readonly="readonly" class="form-control" id="fecha_investigacion" name="fecha_investigacion" value="<?=  $inves->fechaini;  ?>">
                         </div>

                           <div class="form-group col-xs-6">
                             <label for="apellido">Fecha de Culminación</label>
                              <input readonly="" type="date" class="form-control" id="f_investigacion" name="f_investigacion" value="<?=  $inves->fecha;  ?>">
                         </div>
                       </div>  
                                <?php } ?>
                                                    <?php if($inves->forma == 2 && $inves->pause == 1){?>

   <div class="form-group col-xs-9">
                                </br>
                                                         <div class="form-group col-xs-6">
                             <label for="apellido">Fecha de Inicio</label>
                              <input type="text" readonly="readonly" class="form-control" id="fecha_investigacion" name="fecha_investigacion" value="<?=  $inves->fechaini;  ?>">
                         </div>

                           <div class="form-group col-xs-6">
                             <label for="apellido">Fecha de Culminación</label>
                              <input type="date" class="form-control fe2" id="f_investigacion" name="f_investigacion" value="<?=  $inves->fecha;  ?>">
                              <br>
                              <div href="#" class="btn btn-warning" onclick="cargarfe(1);">Modificar fecha.</div>

                         </div>
                       </div>  
                                <?php } ?>
                                                    <?php if($inves->forma == 1 && $inves->pause == 1){?>

   <div class="form-group col-xs-9">
                                </br>
                                                         <div class="form-group col-xs-6">
                             <label for="apellido">Fecha de Inicio</label>
                              <input type="text" readonly="readonly" class="form-control" id="fecha_investigacion" name="fecha_investigacion" value="<?=  $inves->fechaini;  ?>">
                         </div>

                           <div class="form-group col-xs-6">
                             <label for="apellido">Fecha de Culminación</label>
                              <input type="date" class="form-control" id="f_investigacion" name="f_investigacion" value="<?=  $inves->fecha;  ?>">
                         </div>
                       </div>  
                                <?php } ?>
             <input type="hidden" id="forma" name="forma" value="<?=  $inves->forma;  ?>">



                                                                                               <?php if($inves->estado == '1'){?>


<div class=" col-xs-10" id="estados"  style="display:none;" >

<div class=" col-xs-5"  >

                          <div class=" col-xs-12">
                              <label for="apellido">Fase 1</label>
                              <textarea readonly="" type="text" class="form-control" id="face_investigacion" name="face_investigacion" value="" ><?=  $inves->face;  ?></textarea> 
                         </div>




                          <div class=" col-xs-12">
                              <label for="apellido">Fase 2</label>
                              <textarea readonly="" type="text" class="form-control" id="face2" name="face2" value="" ><?=  $inves->face2;  ?></textarea> 
                         </div>
                         

</div>
       <div class=" col-xs-5"   >

                          <div class=" col-xs-12">
                              <label for="apellido">Fase 3</label>
                              <textarea readonly="" type="text" class="form-control" id="face3" name="face3" value="" ><?=  $inves->face3;  ?></textarea> 
                         </div>




                          <div class=" col-xs-12">
                              <label for="apellido">Fase 4</label>
                              <textarea readonly="" type="text" class="form-control" id="face4" name="face4" value="" ><?=  $inves->face4;  ?></textarea> 
                         </div>
                                                                                                    </div>



</div>
        
                                <?php } ?>


                                                                                               <?php if($inves->estado == '2'){?>
<div class=" col-xs-5"  >

                          <div class=" col-xs-12">
                              <label for="apellido">Fase 1</label>
                              <textarea readonly="" type="text" class="form-control" id="face_investigacion" name="face_investigacion" value="" ><?=  $inves->face;  ?></textarea> 
                         </div>




                          <div class=" col-xs-12">
                              <label for="apellido">Fase 2</label>
                              <textarea readonly="" type="text" class="form-control" id="face2" name="face2" value="" ><?=  $inves->face2;  ?></textarea> 
                         </div>
                         

</div>
       <div class=" col-xs-5"   >

                          <div class=" col-xs-12">
                              <label for="apellido">Fase 3</label>
                              <textarea readonly="" type="text" class="form-control" id="face3" name="face3" value="" ><?=  $inves->face3;  ?></textarea> 
                         </div>




                          <div class=" col-xs-12">
                              <label for="apellido">Fase 4</label>
                              <textarea readonly="" type="text" class="form-control" id="face4" name="face4" value="" ><?=  $inves->face4;  ?></textarea> 
                         </div>
                                                                                                    </div>

              

                                                                 <?php } ?>

                                                                      <?php if($inves->estado == '3'){?>
<div class=" col-xs-5"  >

                          <div class=" col-xs-12">
                              <label for="apellido">Fase 1</label>
                              <textarea readonly="" type="text" readonly="" class="form-control" id="face_investigacion" name="face_investigacion" value="" ><?=  $inves->face;  ?></textarea> 
                         </div>




                          <div class=" col-xs-12">
                              <label for="apellido">Fase 2</label>
                              <textarea readonly="" type="text" readonly="" class="form-control" id="face2" name="face2" value="" ><?=  $inves->face2;  ?></textarea> 
                         </div>
                         

</div>
       <div class=" col-xs-5"   >

                          <div class=" col-xs-12">
                              <label for="apellido">Fase 3</label>
                              <textarea readonly="" type="text" readonly="" class="form-control" id="face3" name="face3" value="" ><?=  $inves->face3;  ?></textarea> 
                         </div>
                         


                          <div class=" col-xs-12">
                              <label for="apellido">Fase 4</label>
                              <textarea readonly="" type="text" readonly="" class="form-control" id="face4" name="face4" value="" ><?=  $inves->face4;  ?></textarea> 
                         </div>
</div>                    
              

                                                                 <?php } ?>
                                              <?php if($inves->idinves == '2'){?>


                       <div class=" col-xs-12" id="deso" >

                          <div class=" col-xs-12">
                              <label for="apellido">Direccion de la comunidad</label>
                              <textarea readonly="" type="text" class="form-control" id="lugar_investigacion" name="lugar_investigacion" value="" ><?=  $inves->lugar;  ?></textarea> 
                         </div>

</div>
                                <?php } ?>


               </div>

            </form>
        </div>
          

 </div>
</div>

  <script>
    autosize(document.querySelectorAll('textarea'));
  </script>
                                <?php } ?>
                                                                           <?php }?>

 <?php }?>
<!-- *************************************stylo************************************* -->
<style type="text/css">
  .switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input {display:none;}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
<!-- *************************************Aqui es la funcion del primer ususario************************************* -->

                                  <?php if(Auth::user()->tipoUsuario == '1' ) {?>


                                                                                            <!-- 
              <?= $d=strtotime("-30 Minute"); 
               $formatted_dt1=Carbon\Carbon::parse(date("Y-m-d h:i:sa", $d));
$formatted_dt2=Carbon\Carbon::parse($inves->fecha); ?>  <br>
        <?=  $date_diff=$formatted_dt1->diffInYears($formatted_dt2);   ?>
-->   
 <br>
                     <script>
</script>
<script type="text/javascript">
function cTriga(clickedid) {
fal = document.getElementById(clickedid).checked;
if (fal == false){
       var bax= confirm("Quieres seguir la INV?");
        if (bax){
                                  $('.forma').submit();
}else{
document.getElementById(clickedid).checked = true;
}
     }else {
     tru = document.getElementById(clickedid).checked;
if (tru == true){
       var box= confirm("Quieres pausar la INV?");
        if (box){
                                  $('.forma').submit();
       } else{
           document.getElementById(clickedid).checked = false;
         }
            
      }
     
     }
     }
</script>
<?php  if($formatted_dt2 > $formatted_dt1){   ?>
                                                                <?php if($inves->estado==2 || $inves->estado==1){  ?>




<div class="row">  

 <div class="col-md-11">

      <div class="box box-primary">
                        
<!-- /.box-header      class="formarchivo"  enctype="multipart/form-data"    if(nombreform=="f_editar_investigacion" ){ var miurl="editar_investigaciones_usuario";  var divresul="notificacion_resul_fei"; rs=true;  }   -->
            <div id="capa_cd" class="div_modav" ></div>

                                 <div id="capa_vadil" class="div_mod" ></div>
                     <script>
var span = document.getElementsByClassName("clos")[0];
span.onclick = function() {
    capa_para_vadil.style.display = "none";
        capa_vadil.style.display = "none";


}

var span = document.getElementsByClassName("cls")[0];
span.onclick = function() {
    capa_para_cd.style.display = "none";
        capa_cd.style.display = "none";

}
    $(".Butn").click(function(){
        $(".clear").empty();
    });
</script>



            <form  id="f_residuo"  method="post"  action="residuo" class="formarchivo"  enctype="multipart/form-data">
              <div id="capa_para_cd" class="div_conteniv">
                                 <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 

            <input type="hidden" id="id_inv" name="id_inv" value="<?=  $inves->id;  ?> "> 
                        <input type="hidden" id="fecha" name="fecha" value="<?=  $formatted_dt1; ?>"> 
                        <input type="hidden" id="integrante" name="integrante" class="field2"> 

  <h2>Motivo.</h2> 

                              <textarea type="text" class="form-control clear" id="descrip" name="descrip" placeholder="Motivo..." rows="10"></textarea> 
<br>
  <button type="submit" class="btn btn-default cls Butn other" id="botones" title="Guardar" style="font-weight: bold;">Aceptar</button>

</div>   
</form>
            <form  id="f_editar_investigacion"  method="post"  action="editar_investigaciones" class="formarchivo forma target"  enctype="multipart/form-data">                                
              <?php  if($inves->estado==2 || $inves->estado==1 && $formatted_dt2 > $formatted_dt1){   ?>
                            <?php  if($inves->forma==2){   ?>

                                                                    <?php  if($inves->pause==0){   ?>

                                                                <h5 style="font-weight: bold;">Pausar investigación</h5>
                                                                <label class="switch">
  <input type="checkbox" value="1" id="<?= $inves->id; ?>" onchange="cTriga('<?= $inves->id; ?>')" name="pauser">
  <span class="slider round"></span>
</label>
                                <?php } ?>
                                                                        <?php  if($inves->pause==1){   ?>



<h5 style="font-weight: bold;">Quitar pausa</h5>


<label class="switch">
  <input type="checkbox" value="0" id="<?= $inves->id; ?>" onchange="cTriga('<?= $inves->id; ?>')" checked="checked" name="pauser">
  <span class="slider round"></span>
</label>
            <?php }?>
                                <?php } ?>
                                <?php } ?>

            <div class="box-header">
                <h3 class="box-title">Editar Investigacion</h3>
            </div>
              <div id="capa_para_vadil" class="div_contenid" ><span class="glyphicon glyphicon-remove clos"></span> <div id="notificacion_resul_fei"></div> </div>

               
                 <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                 <input type="hidden" name="id_ue" value="<?= $inves->id; ?>"> 

        <div class=" tools pull-right col-xs-3 ">
                              <label for="pais">Tipo de Investigacion</label>
                               <select id="tipo_investigacion" name="tipo_investigacion" class="form-control" onchange="mostrardiv_investigacione(this.value);" >
                              
          <?php foreach($invesn as $tipo){  ?>
                                                                <?php if($tipo->id==$inves->idinves){  ?>
                                   <option value="<?= $tipo->id; ?>" > Actual: <?= $tipo->titulo; ?> </option>
                                <?php } ?>
                                <?php } ?>

                                <?php foreach($invesn as $tipo){  ?>
                                   <option value="<?= $tipo->id; ?>" > <?= $tipo->titulo; ?> </option>
                                
                                <?php } ?>
                                
                               </select>
                       </div>


               <div class="box-body ">
        <div class=" form-group col-xs-4 ">
                              <label for="pais">Linea</label>
                               <select id="lineal" name="lineal" class="form-control lin">
                                <?php foreach($line as $tip){  ?>

                                <?php if($tip->id==$inves->lineas){  ?>
                                <option value="<?= $tip->id; ?>"  ><b style="font-weight: bold;"> ACTUAL:</b> <?= $tip->nombrel; ?> </option>
                                                                                                   <?php } ?>
                                                                                                   <?php } ?>

                               </select>
                       </div>

                        <div class="form-group col-xs-12">
                              <label for="apellido">Titulo de la Investigacion</label>
                              <input type="text" class="form-control" id="titulo_investigacion" name="titulo_investigacion" value="<?= $inves->titulo; ?>">
                              <div id="mensaje1" class="errores">Titulo requerido</div>

                         </div>

                                                                                         

                                                                <?php if($inves->forma== 2){  ?>

                           <div class="form-group col-xs-12">
                              <p> <label for="apellido">Integrantes</label></p>

        <div class=" tools pull-right col-xs-2 ">
          <b>integrante 6</b>

                               <select id="id_usuario6" name="id_usuario6" class="form-control city"  >
                                                                <?php if($inves->integrante6== 0){  ?>

<option value="0" >--</option>
                                <?php } ?>
                                <?php foreach($tou as $tip){  ?>
                                <?php if($tip->id==$inves->integrante6){  ?>

<option  id="demo6" class="field7" value="<?= $inves->integrante6; ?>" ><?= $tip->nombres; ?>, <?= $tip->apellidos; ?></option>
<script>
    function cargar6(arg){

if(arg==1) {
  $('.field2').val($('.field7').val()); 
          confirmar=confirm("Desea borrar a <?= $tip->nombres; ?>?"); 
 
if (confirmar == true){
    capa_cd.style.display = "block";
        capa_para_cd.style.display = "block";
        var st = document.getElementById("demo6").innerHTML; 
        var str = document.getElementById("demo6").value;
        var re = st.replace('<?= $tip->nombres; ?>, <?= $tip->apellidos; ?>', '--');
        var res = str.replace('<?= $inves->integrante6; ?>', '0');
        document.getElementById("demo6").innerHTML = re;
        document.getElementById("demo6").value = res;

}

else {
  return false;
}
}
}
</script>                                <?php } ?>
                                <?php } ?>

                                <?php foreach($tou as $tipo){  ?>

                                   <option value="<?= $tipo->id; ?>" >  <?= $tipo->nombres; ?> <?= $tipo->apellidos; ?> / <?= $tipo->lineasn->nombrel;  ?> </option>
                                
                                <?php } ?>

                               </select>
                                                             <a href="#" class="btn btn-standard" onclick="cargar6(1);">Eliminar integrante</a>

                       </div>

        <div class=" tools pull-right col-xs-2 ">
                    <b>integrante 5</b>

                               <select id="id_usuario5" name="id_usuario5" class="form-control city"  >
                                <?php if($inves->integrante5== 0){  ?>

<option value="0" >--</option>
                                <?php } ?>
                                <?php foreach($tou as $tip){  ?>
                                <?php if($tip->id==$inves->integrante5){  ?>

<option  id="demo5" class="field6" value="<?= $inves->integrante5; ?>" ><?= $tip->nombres; ?>, <?= $tip->apellidos; ?></option>
<script>
    function cargar5(arg){

if(arg==1) {
  $('.field2').val($('.field6').val()); 
          confirmar=confirm("Desea borrar a <?= $tip->nombres; ?>?"); 
 
if (confirmar == true){
    capa_cd.style.display = "block";
        capa_para_cd.style.display = "block";
        var st = document.getElementById("demo5").innerHTML; 
        var str = document.getElementById("demo5").value;
        var re = st.replace('<?= $tip->nombres; ?>, <?= $tip->apellidos; ?>', '--');
        var res = str.replace('<?= $inves->integrante5; ?>', '0');
        document.getElementById("demo5").innerHTML = re;
        document.getElementById("demo5").value = res;

}

else {
  return false;
}
}
}
</script>                                <?php } ?>
                                <?php } ?>
                                <?php foreach($tou as $tipo){  ?>
                                   <option value="<?= $tipo->id; ?>" >  <?= $tipo->nombres; ?> <?= $tipo->apellidos; ?> / <?= $tipo->lineasn->nombrel;  ?></option>
                                
                                <?php } ?>
                                
                               </select>
                                                             <a href="#" class="btn btn-standard" onclick="cargar5(1);">Eliminar integrante</a>

                       </div>        <div class=" tools pull-right col-xs-2 ">
                                  <b>integrante 4</b>

                               <select id="id_usuario4" name="id_usuario4" class="form-control city"  >
                                <?php if($inves->integrante4==0){  ?>

<option value="0" >--</option>
                                <?php } ?>
                                <?php foreach($tou as $tip){  ?>
                                <?php if($tip->id==$inves->integrante4){  ?>

<option  id="demo4" class="field5" value="<?= $inves->integrante4; ?>" ><?= $tip->nombres; ?>, <?= $tip->apellidos; ?></option>
<script>
    function cargar4(arg){

if(arg==1) {
  $('.field2').val($('.field5').val()); 
          confirmar=confirm("Desea borrar a <?= $tip->nombres; ?>?"); 
 
if (confirmar == true){
    capa_cd.style.display = "block";
        capa_para_cd.style.display = "block";
        var st = document.getElementById("demo4").innerHTML; 
        var str = document.getElementById("demo4").value;
        var re = st.replace('<?= $tip->nombres; ?>, <?= $tip->apellidos; ?>', '--');
        var res = str.replace('<?= $inves->integrante4; ?>', '0');
        document.getElementById("demo4").innerHTML = re;
        document.getElementById("demo4").value = res;

}

else {
  return false;
}
}
}
</script>                                <?php } ?>
                                <?php } ?>
                                <?php foreach($tou as $tipo){  ?>
                                   <option value="<?= $tipo->id; ?>" >  <?= $tipo->nombres; ?> <?= $tipo->apellidos; ?> / <?= $tipo->lineasn->nombrel;  ?></option>
                                
                                <?php } ?>
                                
                               </select>
                                                             <a href="#" class="btn btn-standard" onclick="cargar4(1);">Eliminar integrante</a>

                       </div>        <div class=" tools pull-right col-xs-2 ">
                                  <b>integrante 3</b>

                               <select id="id_usuario3" name="id_usuario3" class="form-control city"  >
                                <?php if($inves->integrante3==0){  ?>

<option value="0" >--</option>
                                <?php } ?>
                                <?php foreach($tou as $tip){  ?>
                                <?php if($tip->id==$inves->integrante3){  ?>

<option  id="demo3" class="field4" value="<?= $inves->integrante3; ?>" ><?= $tip->nombres; ?>, <?= $tip->apellidos; ?></option>
<script>
    function cargar3(arg){

if(arg==1) {
  $('.field2').val($('.field4').val()); 
          confirmar=confirm("Desea borrar a <?= $tip->nombres; ?>?"); 
 
if (confirmar == true){
    capa_cd.style.display = "block";
        capa_para_cd.style.display = "block";
        var st = document.getElementById("demo3").innerHTML; 
        var str = document.getElementById("demo3").value;
        var re = st.replace('<?= $tip->nombres; ?>, <?= $tip->apellidos; ?>', '--');
        var res = str.replace('<?= $inves->integrante3; ?>', '0');
        document.getElementById("demo3").innerHTML = re;
        document.getElementById("demo3").value = res;

}

else {
  return false;
}
} 
}
</script>                                <?php } ?>
                                <?php } ?>
                                <?php foreach($tou as $tipo){  ?>
                                   <option value="<?= $tipo->id; ?>">  <?= $tipo->nombres; ?> <?= $tipo->apellidos; ?> / <?= $tipo->lineasn->nombrel;  ?></option>
                                
                                <?php } ?>
                                
                               </select>
                                                             <a href="#" class="btn btn-standard" onclick="cargar3(1);">Eliminar integrante</a>

                       </div>       
                        <div class=" tools pull-right col-xs-2 ">
                                  <b>integrante 2</b>

                               <select id="id_usuario2" name="id_usuario2" class="form-control city" >

                                <?php if($inves->integrante2==0){  ?>

<option value="0">--</option>
                                <?php } ?>
                                <?php foreach($tou as $tip){  ?>
                                <?php if($tip->id==$inves->integrante2){  ?>

<option  id="demo2" class="field3" value="<?= $inves->integrante2; ?>" ><?= $tip->nombres; ?>, <?= $tip->apellidos; ?></option>
<script>

    function cargar2(arg){

if(arg==1) {
  $('.field2').val($('.field3').val()); 
          confirmar=confirm("Desea borrar a <?= $tip->nombres; ?>?"); 
 
if (confirmar == true){
    capa_cd.style.display = "block";
        capa_para_cd.style.display = "block";
        var st = document.getElementById("demo2").innerHTML; 
        var str = document.getElementById("demo2").value;
        var re = st.replace('<?= $tip->nombres; ?>, <?= $tip->apellidos; ?>', '--');
        var res = str.replace('<?= $inves->integrante2; ?>', '0');
        document.getElementById("demo2").innerHTML = re;
        document.getElementById("demo2").value = res;
}

else {
  return false;
}
}
}
</script>                                <?php } ?>
                                <?php } ?>
                                <?php foreach($tou as $tipo){  ?>
                                   <option value="<?= $tipo->id; ?>" >  <?= $tipo->nombres; ?> <?= $tipo->apellidos; ?> / <?= $tipo->lineasn->nombrel;  ?></option>
                                
                                <?php } ?>
                                
                               </select>
                                                             <a href="#" class="btn btn-standard" onclick="cargar2(1);">Eliminar integrante</a>

                       </div>       

                        <div class=" tools pull-right col-xs-2 ">
                                  <b>integrante 1</b>

                               <select id="id_usuario1" name="id_usuario1" class="form-control city"  >


                                <?php if($inves->integrante1== 0){  ?>

<option value="0" >--</option>
                                <?php } ?>

                                <?php foreach($tou as $tip){  ?>
                                <?php if($tip->id==$inves->integrante1){  ?>


<option  id="demo" class="field1" value="<?= $inves->integrante1; ?>" ><?= $tip->nombres; ?>, <?= $tip->apellidos; ?></option>
<script>
    function cargar(arg){

if(arg==1) {
  $('.field2').val($('.field1').val()); 
     confirmar=confirm("Desea borrar a <?= $tip->nombres; ?>?"); 
if (confirmar == true){
    capa_cd.style.display = "block";
        capa_para_cd.style.display = "block";
        var st = document.getElementById("demo").innerHTML; 
        var str = document.getElementById("demo").value;
        var re = st.replace('<?= $tip->nombres; ?>, <?= $tip->apellidos; ?>', '--');
        var res = str.replace('<?= $inves->integrante1; ?>', '0');
        document.getElementById("demo").innerHTML = re;
        document.getElementById("demo").value = res;
}

else {
  return false;
}
}
}
$( ".other" ).click(function() {
  $( ".target" ).submit();
});
</script>

                                <?php } ?>
                                <?php } ?>


                                <?php foreach($tou as $tipo){  ?>
                                   <option value="<?= $tipo->id; ?>" id="lin12">  <?= $tipo->nombres; ?> <?= $tipo->apellidos; ?> / <?= $tipo->lineasn->nombrel;  ?></option>
                                
                                <?php } ?>
                                
                               </select>
                                                             <a href="#" class="btn btn-standard" onclick="cargar(1);">Eliminar integrante</a>


                       </div>

                                                </div>  
                                                                                <?php } ?>
                               <select  class="form-control state" style="display: none;">
                                <?php foreach($line as $tip){  ?>

                                <?php if($tip->id==$inves->lineas){  ?>
                                <option ><?= $tip->nombrel; ?> </option>
                                                                                                   <?php } ?><?php } ?>
                                <?php foreach($line as $tipo){  ?>

                                   <option > <?= $tipo->nombrel; ?> </option>
                                <?php } ?>

                               </select>
                               <script type="text/javascript">

    var showCity = function(selectedState){

     $('.city option').hide();
        $('.city').find('option').filter(function(){
            var city = $(this).text();
            return city.indexOf(selectedState)!=-1;
        }).show();
            };
    var state = $('.state').val();
    showCity(state);
    $('.state').change(function(){
       showCity($(this).val());
    });

                               </script>
<!-- <script>
function myFunction() {
    var st = document.getElementById("demo").innerHTML; 
    var re = st.replace('<?= $tip->nombres; ?>, <?= $tip->apellidos; ?>', '');
    document.getElementById("demo").innerHTML = re;
}
</script>-->

                           <div class="form-group col-xs-12">
                              <input type="hidden" class="form-control" id="nucleo" name="nucleo" value="<?=  $usuario->nucleo;  ?>" >
                         </div> 

                       <div class="form-group col-xs-12">
                       <label>Resumen</label>
                       <textarea class="form-control" rows="3" placeholder=" ..."  id="descripcion_investigacion"  name="descripcion_investigacion" ><?= $inves->descripcion; ?></textarea>
                       </div>

                       <div class="form-group col-xs-12">
                       <label>Objetivo</label>

                       <textarea class="form-control " rows="3" placeholder=" ..."  id="objetivo_investigacion"  name="objetivo_investigacion" ><?= $inves->objetivo; ?></textarea>
                       </div>



  
                         <div class="form-group col-xs-2">
                                    <?php if($inves->estado == 2 || $inves->estado == 3 || $inves->estado == 4){  ?>
<p class="tools pull-right"><b> Estado actual:</b> En Curso </p>
                     <span  value="<?= $inves->estado; ?>"  ></span>

                                <?php } ?>
                                                                    <?php if($inves->estado == 5){  ?>
<p class="tools pull-right"><b> Estado actual:</b> Finalizado </p>
                     <span  value="<?= $inves->estado; ?>"  ></span>

                                <?php } ?>



                                                    <?php if($inves->estado == '1'){?>

<p>Cambiar estado

<div class="radio">
  <label><input type="radio" checked="checked" id="estado_investigacion" name="estado_investigacion" value="1"  onchange="mostrardiv_fac(this.value);">Proyecto iniciado</label>
</div>
<div class="radio">
  <label><input type="radio" id="estado_investigacion" name="estado_investigacion" value="2"  onchange="mostrardiv_fac(this.value);">Desarrollo de fases</label>
</div>
<div class="radio ">
  <label><input type="radio" id="estado_investigacion" name="estado_investigacion" value="3"  onchange="mostrardiv_fac(this.value);">Culminado/Entrega</label>
</div>
</p>
                                <?php } ?>
                                                    <?php if($inves->estado == '2'){?>

<p>Cambiar estado

<div class="radio">
  <label><input type="radio"  id="estado_investigacion" name="estado_investigacion" value="1"  onchange="mostrardiv_fac(this.value);">Proyecto iniciado</label>
</div>
<div class="radio">
  <label><input type="radio" checked="checked" id="estado_investigacion" name="estado_investigacion" value="2"  onchange="mostrardiv_fac(this.value);">Desarrollo de fases</label>
</div>
<div class="radio ">
  <label><input type="radio" id="estado_investigacion" name="estado_investigacion" value="3"  onchange="mostrardiv_fac(this.value);">Culminado/Entrega</label>
</div>
</p>
                                <?php } ?>

                                                    <?php if($inves->estado == '3'){?>

<p>Cambiar estado

<div class="radio ">
  <label><input type="radio" checked="checked" id="estado_investigacion" name="estado_investigacion" value="3"  onchange="mostrardiv_fac(this.value);">Culminado/Entrega</label>
</div>
</p>
                                <?php } ?>

</div>
                                                    <?php if($inves->forma == 2){?>

                       <div class="form-group col-xs-9">
                                </br>
                                                         <div class="form-group col-xs-6">
                             <label for="apellido">Fecha de Inicio</label>
                              <input type="text" readonly="readonly" class="form-control" id="fecha_investigacion" name="fecha_investigacion" value="<?=  $inves->fechaini;  ?>">
                         </div>

                           <div class="form-group col-xs-6">
                             <label for="apellido">Fecha de Culminación</label>
                              <input type="date" readonly="" class="form-control" id="f_investigacion" name="f_investigacion" value="<?=  $inves->fecha;  ?>">
                         </div>
                       </div>  
                                                       <?php } ?>


                                                    <?php if($inves->forma == 1){?>

   <div class="form-group col-xs-9">
                                </br>
                                                         <div class="form-group col-xs-6">
                              <label for="apellido">Fecha de Inicio</label>
                              <input type="text" readonly="readonly" class="form-control" id="fecha_investigacion" name="fecha_investigacion" value="<?=  $inves->fechaini;  ?>">
                         </div>

                           <div class="form-group col-xs-6">
                             <label for="apellido">Fecha de Culminación</label>
                              <input type="date" class="form-control" id="f_investigacion" name="f_investigacion" value="<?=  $inves->fecha;  ?>">
                         </div>
                       </div>  
                                <?php } ?>

             <input type="hidden" id="forma" name="forma" value="<?=  $inves->forma;  ?>">

                    <?php if($inves->idinves == '2'){?>


                       <div class=" col-xs-12" id="deso"  style="display:none;">

                          <div class=" col-xs-12">
                              <label for="apellido">Direccion de la comunidad</label>
                              <textarea type="text" class="form-control" id="lugar_investigacion" name="lugar_investigacion" value="" ><?=  $inves->lugar;  ?></textarea> 
                         </div>

</div>
                                <?php } ?>

                                                                                               <?php if($inves->estado == '1'){?>


<div class=" col-xs-10" id="estados"  style="display:none;" >

<div class=" col-xs-5"  >

                          <div class=" col-xs-12">
                              <label for="apellido">Fase 1</label>
                              <textarea type="text" class="form-control" id="face_investigacion" name="face_investigacion" value="" ><?=  $inves->face;  ?></textarea> 
                         </div>




                          <div class=" col-xs-12">
                              <label for="apellido">Fase 2</label>
                              <textarea type="text" class="form-control" id="face2" name="face2" value="" ><?=  $inves->face2;  ?></textarea> 
                         </div>
                         

</div>
       <div class=" col-xs-5"   >

                          <div class=" col-xs-12">
                              <label for="apellido">Fase 3</label>
                              <textarea type="text" class="form-control" id="face3" name="face3" value="" ><?=  $inves->face3;  ?></textarea> 
                         </div>




                          <div class=" col-xs-12">
                              <label for="apellido">Fase 4</label>
                              <textarea type="text" class="form-control" id="face4" name="face4" value="" ><?=  $inves->face4;  ?></textarea> 
                         </div>
                                                                                                    </div>



</div>
        
                                <?php } ?>


                                                                                               <?php if($inves->estado == '2'){?>
<div class=" col-xs-5"  >

                          <div class=" col-xs-12">
                              <label for="apellido">Fase 1</label>
                              <textarea type="text" class="form-control" id="face_investigacion" name="face_investigacion" value="" ><?=  $inves->face;  ?></textarea> 
                         </div>




                          <div class=" col-xs-12">
                              <label for="apellido">Fase 2</label>
                              <textarea type="text" class="form-control" id="face2" name="face2" value="" ><?=  $inves->face2;  ?></textarea> 
                         </div>
                         

</div>
       <div class=" col-xs-5"   >

                          <div class=" col-xs-12">
                              <label for="apellido">Fase 3</label>
                              <textarea type="text" class="form-control" id="face3" name="face3" value="" ><?=  $inves->face3;  ?></textarea> 
                         </div>




                          <div class=" col-xs-12">
                              <label for="apellido">Fase 4</label>
                              <textarea type="text" class="form-control" id="face4" name="face4" value="" ><?=  $inves->face4;  ?></textarea> 
                         </div>
                                                                                                    </div>

              

                                                                 <?php } ?>

                                                                      <?php if($inves->estado == '3'){?>
<div class=" col-xs-5"  >

                          <div class=" col-xs-12">
                              <label for="apellido">Fase 1</label>
                              <textarea type="text" readonly="" class="form-control" id="face_investigacion" name="face_investigacion" value="" ><?=  $inves->face;  ?></textarea> 
                         </div>




                          <div class=" col-xs-12">
                              <label for="apellido">Fase 2</label>
                              <textarea type="text" readonly="" class="form-control" id="face2" name="face2" value="" ><?=  $inves->face2;  ?></textarea> 
                         </div>
                         

</div>
       <div class=" col-xs-5"   >

                          <div class=" col-xs-12">
                              <label for="apellido">Fase 3</label>
                              <textarea type="text" readonly="" class="form-control" id="face3" name="face3" value="" ><?=  $inves->face3;  ?></textarea> 
                         </div>
                         


                          <div class=" col-xs-12">
                              <label for="apellido">Fase 4</label>
                              <textarea type="text" readonly="" class="form-control" id="face4" name="face4" value="" ><?=  $inves->face4;  ?></textarea> 
                         </div>
</div>                    
              

                                                                 <?php } ?>
                          


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
</div>

  <script>
    autosize(document.querySelectorAll('textarea'));
  </script>
                                <?php } ?>
                                                                           <?php }?>
  
                                                     <?php if($inves->estado == 3) {?>

<div class="row">  

 <div class="col-md-11">

      <div class="box box-primary">
                        
            <div class="box-header">
                <h3 class="box-title">Investigacion Finalizada</h3>
            </div>


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


<!-- <script>
function myFunction() {
    var st = document.getElementById("demo").innerHTML; 
    var re = st.replace('<?= $tip->nombres; ?>, <?= $tip->apellidos; ?>', '');
    document.getElementById("demo").innerHTML = re;
}
</script>-->

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

  
                         <div class="form-group col-xs-2">
                                    <?php if($inves->estado == 3){  ?>
<p class="tools pull-right"><b> Estado actual:</b> Finalizado </p>
                     <span  value="<?= $inves->estado; ?>"  ></span>

                                <?php } ?>


                                                    <?php if($inves->estado == '3'){?>

<p>

<div class="radio ">
  <label><input type="radio" checked="checked" id="estado_investigacion" name="estado_investigacion" value="3"  onchange="mostrardiv_fac(this.value);">Culminado/Entrega</label>
</div>
</p>
                                <?php } ?>

</div>

                                                                      <?php if($inves->estado == '3'){?>
<div class=" col-xs-5"  >

                          <div class=" col-xs-12">
                              <label for="apellido">Fase 1</label>
                              <textarea type="text" readonly="" class="form-control" id="face_investigacion" name="face_investigacion" value="" ><?=  $inves->face;  ?></textarea> 
                         </div>




                          <div class=" col-xs-12">
                              <label for="apellido">Fase 2</label>
                              <textarea type="text" readonly="" class="form-control" id="face2" name="face2" value="" ><?=  $inves->face2;  ?></textarea> 
                         </div>
                         

</div>
       <div class=" col-xs-5"   >

                          <div class=" col-xs-12">
                              <label for="apellido">Fase 3</label>
                              <textarea type="text" readonly="" class="form-control" id="face3" name="face3" value="" ><?=  $inves->face3;  ?></textarea> 
                         </div>
                         


                          <div class=" col-xs-12">
                              <label for="apellido">Fase 4</label>
                              <textarea type="text" readonly="" class="form-control" id="face4" name="face4" value="" ><?=  $inves->face4;  ?></textarea> 
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
                                <?php } ?>

  <script>
    autosize(document.querySelectorAll('textarea'));
  </script>
                                  <?php } ?>
