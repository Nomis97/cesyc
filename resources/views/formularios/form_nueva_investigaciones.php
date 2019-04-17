<style type="text/css">
.img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
</style>
<div class="row">  

 <div class="col-md-12">

      <div class="box box-primary">
                        
            <div class="box-header">
                <h3 class="box-title">Agregar Investigación</h3>
            </div><!-- /.box-header 
             $investigacion->idUsuario=$request->input('id_usuario');



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
            <form  id="f_nueva_investigacion"  method="post"  action="agregar_investigaciones_usuario" class="formarchivonew"   enctype="multipart/form-data">              
<div id="capa_para_b" class="div_contenib" >
  <img src="imagenes/warning.png" style="width:10%;" class="img">
  <h2>¿Guardar esta investigación?</h2> 

  <button type="submit" class="btn btn-default cls" title="Guardar" style="font-weight: bold;">Aceptar</button>

  <div class="btn btn-default cl" style="font-weight: bold;"> Cancelar</div> 
</div>
                                                        <div id="capa_para_vadil" class="div_contenid" ><span class="glyphicon glyphicon-remove clos"></span> <img src="imagenes/Blinking_warning.gif" style="width:10%;" class="img"><div id="notificacion_resul_fai"></div> </div>

                                               <input type="hidden" name="id_usuario"  value="<?= $usuario->id ?>">
                              


                 <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 


        <div class=" tools pull-right col-xs-3 ">
                              <span style="color: red; font-size: 190%">*</span><label for="pais">Tipo de Investigación</label>
                               <select id="tipo_investigacion" name="tipo_investigacion" class="form-control" onchange="mostrardiv_investigaciones(this.value);" >
                                <?php foreach($inves as $tipo){  ?>
                                   <option value="<?= $tipo->id; ?>" > <?= $tipo->titulo; ?> </option>
                                
                                <?php } ?>
                                
                               </select>
                       </div>


               <div class="box-body ">
                       <div class=" form-group col-xs-4 ">
                              <span style="color: red; font-size: 190%">*</span><label for="pais">Linea</label>
                               <select id="lineal" name="lineal" class="form-control lin" >
                               <option selected="true" value="0">--</option>
                                <?php foreach($linea as $tipo){  ?>
                                   <option value="<?= $tipo->id; ?>"> <?= $tipo->nombrel; ?> </option>
                                <?php } ?>
                               </select>
                       </div>



<!--                        <script>
$("#selectlist").on("change", function() {
    var sel = $(this).val(), 
        $ddl = $("#select1, #select2, #select3");
    if (!sel) { // if there is no value means first option is selected
      $ddl.find("option").show().prop('disabled', false); $ddl.val(''); // show all options and reset the value
    } 
    else {
      $ddl.find("option").hide().prop('disabled', true); // hide all options
      // show only those options which contain the selected value, 
      // set the selected property to true for the only remaining ones
      $ddl.find("option[value*='" + sel + "']").show().prop('selected', true).prop('disabled', false);
    }
});
</script> -->

<!--         <div class=" form-group col-xs-4 ">
                             <span style="color: red; font-size: 190%">*</span><label for="pais">Linea</label>
                             <select  id="lineal" name="lineal" onchange="buscarusuarioline();" class="form-control">
         <?php  if(isset($paissel)){ 
             $listadoline=$paissel->nombrel; 
             $optsel= '<option value="'.$paissel->id.'">'.$paissel->nombrel.' </option>';

        }else{  
            $listadoline="General";
            $optsel="";
         } ?>

         <?=  $optsel;  ?>
          <option value="0" >  General  </option>

        <?php foreach($linea as $nucleo){   ?>
       <option value="<?= $nucleo->id ?>"  > <?= $nucleo->nombrel; ?></option>
             

        <?php }  ?>
        </select>
</div> -->







 <div class=" tools pull-right col-xs-12 " >


                       </div>

                        <div class="form-group col-xs-12">
                             <span style="color: red; font-size: 190%">*</span> <label for="apellido">Titulo de la Investigación</label>
                              <input type="text" class="form-control" id="titulo_investigacion" name="titulo_investigacion" value="">
                              <div id="mensaje1" class="errores">Titulo requerido</div>
                         </div>

        <div class=" form-group col-xs-4 ">
                              <label for="pais"></label>
                               <select id="forma" name="forma" class="form-control" onchange="mostrardiv_forma(this.value);">
                                   <option value="1" >Investigación Individual</option>
                                   <option value="2" >Investigación Colectiva</option>
                               </select>
                       </div>

                           <div class="form-group col-xs-12" id="forma1"  style="display:none;">
                              <p> <span style="color: red; font-size: 190%">*</span><label for="apellido">Integrantes</label></p>

        <div class=" tools pull-right col-xs-2 ">
          <b>integrante 6</b>

                               <select id="id_usuario6" name="id_usuario6" class="form-control select list1 usu lind"  onchange="ocult(this.value)">

<option></option>
<?php foreach($usuarline as $usuario){  ?>
<?php foreach($linea as $line){   ?>
<?php if($line->id==$usuario->lineas){   ?>
  <option  value="<?= $usuario->id; ?>" class="lind2" >  <?= mb_convert_encoding(mb_convert_case($usuario->nombres, MB_CASE_TITLE),"UTF-8"); ?> <?= mb_convert_encoding(mb_convert_case($usuario->apellidos, MB_CASE_TITLE),"UTF-8"); ?> / <?= $usuario->delnucleo->nombre; ?> / <?= $line->nombrel;  ?> [<?= $line->id;  ?>]</option>

<?php }?>
<?php }?>
<?php }?>
<div>
<script>
$('.select').change(function() {
    var myOpt = [];
    $(".select").each(function () {
        myOpt.push($(this).val());
    });
    $(".select").each(function () {
        $(this).find("option").prop('disabled', false);
        var sel = $(this);
        $.each(myOpt, function(key, value) {
            if((value != "") && (value != sel.val())) {
                sel.find("option").filter('[value="' + value +'"]').prop('disabled', true);
            }
        });
    });
});
</script>

<!--   <script>
                var str = document.getElementById("des").value;
    $("select[name='model']").on("change",function(){
  var selectedvalue = $(this).val();
  if (selectedvalue === str) {
    $("select[name=uss]").val("");
  } else{
    $("select[name=uss]").val(selectedvalue);
  }
});
</script> -->
</div>


                               </select>
                       </div>
        <div class=" tools pull-right col-xs-2 ">
          <b>integrante 5</b>
                               <select id="id_usuario5" name="id_usuario5" class="form-control select list2 ocul lin5" onchange="ocult2(this.value)" >
                                                                                                 <option ></option>

<?php foreach($usuarline as $usuario){  ?>
<?php foreach($linea as $line){   ?>
<?php if($line->id==$usuario->lineas){   ?>
<option value="<?= $usuario->id; ?>" id="lin52">  <?= mb_convert_encoding(mb_convert_case($usuario->nombres, MB_CASE_TITLE),"UTF-8"); ?> <?= mb_convert_encoding(mb_convert_case($usuario->apellidos, MB_CASE_TITLE),"UTF-8"); ?> / <?= $usuario->delnucleo->nombre; ?> / <?= $line->nombrel;  ?> [<?= $line->id;  ?>]</option>

<?php }?>
<?php }?>
<?php }?>


                </select>
                       </div>        <div class=" tools pull-right col-xs-2 ">
                                  <b>integrante 4</b>

                               <select id="id_usuario4" name="id_usuario4" class="form-control select list3 ocul2 lin4" onchange="ocult3(this.value)" >
                                                                                                 <option ></option>

      <?php foreach($usuarline as $usuario){  ?>
<?php foreach($linea as $line){   ?>
            <?php if($line->id==$usuario->lineas){   ?>
<option value="<?= $usuario->id; ?>" id="lin42">  <?= mb_convert_encoding(mb_convert_case($usuario->nombres, MB_CASE_TITLE),"UTF-8"); ?> <?= mb_convert_encoding(mb_convert_case($usuario->apellidos, MB_CASE_TITLE),"UTF-8"); ?> / <?= $usuario->delnucleo->nombre; ?> / <?= $line->nombrel;  ?> [<?= $line->id;  ?>]</option>
                                                       <?php }?>
<?php }?>
     <?php }  ?>                                
                               </select>
                       </div>        <div class=" tools pull-right col-xs-2 ">
                                  <b>integrante 3</b>

                               <select id="id_usuario3" name="id_usuario3" class="form-control select list4 ocul3 lin3" onchange="ocult4(this.value)" >
                                                                                                 <option ></option>

      <?php foreach($usuarline as $usuario){  ?>
<?php foreach($linea as $line){   ?>
            <?php if($line->id==$usuario->lineas){   ?>
<option value="<?= $usuario->id; ?>" id="lin32">  <?= mb_convert_encoding(mb_convert_case($usuario->nombres, MB_CASE_TITLE),"UTF-8"); ?> <?= mb_convert_encoding(mb_convert_case($usuario->apellidos, MB_CASE_TITLE),"UTF-8"); ?> / <?= $usuario->delnucleo->nombre; ?> / <?= $line->nombrel;  ?> [<?= $line->id;  ?>]</option>
                                                       <?php }?>
<?php }?>
     <?php }  ?>
                                
                               </select>
                       </div>        <div class=" tools pull-right col-xs-2 ">
                                  <b>integrante 2</b>

                               <select id="id_usuario2" name="id_usuario2" class="form-control select list5 ocul4 lin2" onchange="ocult5(this.value)" >
                                                                                                 <option ></option>

      <?php foreach($usuarline as $usuario){  ?>
<?php foreach($linea as $line){   ?>
            <?php if($line->id==$usuario->lineas){   ?>
<option value="<?= $usuario->id; ?>" id="lin22">  <?= mb_convert_encoding(mb_convert_case($usuario->nombres, MB_CASE_TITLE),"UTF-8"); ?> <?= mb_convert_encoding(mb_convert_case($usuario->apellidos, MB_CASE_TITLE),"UTF-8"); ?> / <?= $usuario->delnucleo->nombre; ?> / <?= $line->nombrel;  ?> [<?= $line->id;  ?>]</option>
                                                       <?php }?>
<?php }?>
     <?php }  ?>
                                
                               </select>
                       </div>        <div class=" tools pull-right col-xs-2 ">
                                  <b>integrante 1</b>

                               <select id="id_usuario1" name="id_usuario1" class="form-control select list6 ocul5 lin1" onchange="ocult6(this.value)" >
                                                                                                 <option value="" ></option>
      <?php foreach($usuarline as $usuario){  ?>
<?php foreach($linea as $line){   ?>
            <?php if($line->id==$usuario->lineas){   ?>
<option value="<?= $usuario->id; ?>" id="lin12">  <?= mb_convert_encoding(mb_convert_case($usuario->nombres, MB_CASE_TITLE),"UTF-8"); ?> <?= mb_convert_encoding(mb_convert_case($usuario->apellidos, MB_CASE_TITLE),"UTF-8"); ?> / <?= $usuario->delnucleo->nombre; ?> / <?= $line->nombrel;  ?> [<?= $line->id;  ?>]</option>
                                                       <?php }?>
<?php }?>
     <?php }  ?>
                                
                               </select>
                       </div>

                                                </div>  

                           <div class="form-group col-xs-12">
                              <input type="hidden" class="form-control" id="nucleo" name="nucleo" value="<?=  $usuario->nucleo;  ?>" >
                         </div> 
             <div class="form-group col-xs-12">
                              <input type="hidden" class="form-control" id="acti" name="acti" value="98" >
                         </div> 
                       <div class="form-group col-xs-12">
                       <span style="color: red; font-size: 190%">*</span><label>Resumen</label>
                     <textarea class="form-control" rows="3" placeholder=" ..."  id="descripcion_investigacion"  name="descripcion_investigacion" ></textarea>
                       </div>

                       <div class="form-group col-xs-12">
                      <span style="color: red; font-size: 190%">*</span> <label>Objetivo</label>
                       <textarea class="form-control" rows="3" placeholder=" ..."  id="objetivo_investigacion"  name="objetivo_investigacion" ></textarea>
                       </div>


  
                         <div class="form-group col-xs-2">
                                                                                    <h4 style="font-weight: bold;">Estado de la investigación:</h4>

                     <input type="hidden" id="estado_investigacion" name="estado_investigacion"  value="0" onchange="mostrardiv_face(this.value);">
<div class="radio">
  <label><input type="radio" checked="checked" id="estado_investigacion" name="estado_investigacion" value="1"  onchange="mostrardiv_face(this.value);">Iniciar.</label>
</div>
<div class="radio">
  <label><input type="radio" id="estado_investigacion" name="estado_investigacion" value="2"  onchange="mostrardiv_face(this.value);">Desarrollo de fases</label>
</div>
<div class="radio ">
  <label><input type="radio" id="estado_investigacion" name="estado_investigacion" value="3"  onchange="mostrardiv_face(this.value);">Culminado/Entrega</label>
</div>
</div>

   <div class="form-group col-xs-9">
                                </br>
                                                         <div class="form-group col-xs-6">
                              <span style="color: red; font-size: 190%">*</span><label for="apellido">Fecha de Inicio</label>
                              <input type="date" class="form-control" id="fecha_investigacion" name="fecha_investigacion" >
                         </div>

                           <div class="form-group col-xs-6">
                              <span style="color: red; font-size: 190%">*</span><label for="apellido">Fecha de Culminación</label>
                              <input type="date" class="form-control" id="f_investigacion" name="f_investigacion" >
                         </div>
                       </div>  


                       <div class=" col-xs-12" id="des"  style="display:none;" >

                          <div class=" col-xs-12">
                              <span style="color: red; font-size: 190%">*</span><label for="apellido">Direccion de la comunidad</label>
                              <textarea type="text" class="form-control" id="lugar_investigacion" name="lugar_investigacion" value="" ></textarea> 
                         </div>


</div>
                       <div class=" col-xs-12" id="estados"  style="display:none;" >

                          <div class=" col-xs-6">
                              <span style="color: red; font-size: 190%">*</span><label for="apellido">Fase 1: Situacional (Inicial)</label>
                              <textarea type="text" class="form-control" id="face_investigacion" name="face_investigacion" ></textarea> 

                             <label for="apellido">Fase 2: Diseño</label>
                              <textarea type="text" class="form-control" id="face2" name="face2" value="" ></textarea> 
                         </div>
                         
                          <div class=" col-xs-6">
                             <label for="apellido">Fase 3: Desarrollo</label>
                              <textarea type="text" class="form-control" id="face3" name="face3" value="" ></textarea> 

                             <label for="apellido">Fase 4: Final (Resultado)-Prueba</label>
                              <textarea type="text" class="form-control" id="face4" name="face4" value="" ></textarea> 
                         </div>
</div>
             

                            <input type="hidden" class="form-control" id="pause" name="pause" value="0" >

               </div>

               <div class="box-footer col-xs-12" align="center">
<label class="btn btn-default " title="Subir Archivo">
 <label for="archivo" onclick="PDF"> </label> <i class="glyphicon glyphicon-file" ></i>
                            <input type="file" class="form-control" id="file" name="file" style="display: none;" >
</label>


                             <div id="myBtn" class="btn btn-default" title="Guardar"><i class="glyphicon glyphicon-hdd"></i></div>

               </div>
              
            </form>
              

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
                      <div style="font-weight: bold;">Los titulos o campos que esten marcados con (<span style="color: red; font-size: 190%">*</span>) son requeridos.</div>

        </div>
<script> 
$('.list1 option[value=<?= $usuarin->id; ?>]').remove();
$('.list2 option[value=<?= $usuarin->id; ?>]').remove();
$('.list3 option[value=<?= $usuarin->id; ?>]').remove();
$('.list4 option[value=<?= $usuarin->id; ?>]').remove();
$('.list5 option[value=<?= $usuarin->id; ?>]').remove();
$('.list6 option[value=<?= $usuarin->id; ?>]').remove();
</script>
  <script>
    autosize(document.querySelectorAll('textarea'));
  </script>
  <script>

$('.lin').change(function() {
    var make = $(this).val();
    $('.lind').on('.lind2').contents().each(function() {
        if (this.nodeType == 8 && this.nodeValue.length > 0 && this.nodeValue.indexOf('[' + make + ']') != -1) {
            $(this).before('<option>' + this.nodeValue + '</option>');
            $(this).remove();
        }
        else if ($(this).text().indexOf('[' + make + ']') == -1 && $(this).val().length > 0) {
            $(this).replaceWith('<!--' + $(this).text() + '-->');
        }
    });
});
</script>

<script>
$('.lin').change(function() {
    var make = $(this).val();
    $('.lin5').on('#lin52').contents().each(function() {
        if (this.nodeType == 8 && this.nodeValue.length > 0 && this.nodeValue.indexOf('[' + make + ']') != -1) {
            $(this).before('<option>' + this.nodeValue + '</option>');
            $(this).remove();
        }
        else if ($(this).text().indexOf('[' + make + ']') == -1 && $(this).val().length > 0) {
            $(this).replaceWith('<!--' + $(this).text() + '-->');
        }
    });
});
</script>
<script>
$('.lin').change(function() {
    var make = $(this).val();
    $('.lin4').on('#lin42').contents().each(function() {
        if (this.nodeType == 8 && this.nodeValue.length > 0 && this.nodeValue.indexOf('[' + make + ']') != -1) {
            $(this).before('<option>' + this.nodeValue + '</option>');
            $(this).remove();
        }
        else if ($(this).text().indexOf('[' + make + ']') == -1 && $(this).val().length > 0) {
            $(this).replaceWith('<!--' + $(this).text() + '-->');
        }
    });
});
</script>
<script>
$('.lin').change(function() {
    var make = $(this).val();
    $('.lin3').on('#lin32').contents().each(function() {
        if (this.nodeType == 8 && this.nodeValue.length > 0 && this.nodeValue.indexOf('[' + make + ']') != -1) {
            $(this).before('<option>' + this.nodeValue + '</option>');
            $(this).remove();
        }
        else if ($(this).text().indexOf('[' + make + ']') == -1 && $(this).val().length > 0) {
            $(this).replaceWith('<!--' + $(this).text() + '-->');
        }
    });
});
</script>
<script>
$('.lin').change(function() {
    var make = $(this).val();
    $('.lin2').on('#lin22').contents().each(function() {
        if (this.nodeType == 8 && this.nodeValue.length > 0 && this.nodeValue.indexOf('[' + make + ']') != -1) {
            $(this).before('<option>' + this.nodeValue + '</option>');
            $(this).remove();
        }
        else if ($(this).text().indexOf('[' + make + ']') == -1 && $(this).val().length > 0) {
            $(this).replaceWith('<!--' + $(this).text() + '-->');
        }
    });
});
</script>
<script>
$('.lin').change(function() {
    var make = $(this).val();
    $('.lin1').on('#lin12').contents().each(function() {
        if (this.nodeType == 8 && this.nodeValue.length > 0 && this.nodeValue.indexOf('[' + make + ']') != -1) {
            $(this).before('<option>' + this.nodeValue + '</option>');
            $(this).remove();
        }
        else if ($(this).text().indexOf('[' + make + ']') == -1 && $(this).val().length > 0) {
            $(this).replaceWith('<!--' + $(this).text() + '-->');
        }
    });
});
</script>
 <!--
$usuario=User::all();
       $investigacion= $usuario->investigaciones();


       $rutaarchivos= "../storage/archivos/";

       return view("formularios.form_nueva_investigaciones_usuario")   

           ->with("usuario",$usuario)

       ->with("investigacion",$investigacion) 