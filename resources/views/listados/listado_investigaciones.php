
 <style type="text/css">
  textarea{

  resize: none;
  border: none;

}
 </style>
 <script>
  
  $('.criteriaSelector').change(function() {
      // Initialize criteria string
      var criteria = '';
      // Set value for all selector
      var showAll = true;

      // Iterate over all criteriaSelectors
      $('.criteriaSelector').each(function(){
        // Get value
        var val = $(this).children(':selected').val();
        // Check if this limits our results
        if(val !== 'all'){
          // Append selector to criteria
          criteria += '.' + $(this).attr('id') + '-' + val;
          // We don't want to show all results anymore
          showAll = false;
        }
      });
      // Check if results are limited somehow
      if(showAll){
        // No criterias were set so show all
        $('.item').show();
      } else {
        // Hide all items
        $('.item').hide();
        // Show the ones that were selected
        $(criteria).show();
      }

    });


  var $rows = $('#table tr');
$('#search').keyup(function() {
    
    var val = '^(?=.*\\b' + $.trim($(this).val()).split(/\s+/).join('\\b)(?=.*\\b') + ').*$',
        reg = RegExp(val, 'i'),
        text;
    
    $rows.show().filter(function() {
        text = $(this).text().replace(/\s+/g, ' ');
        return !reg.test(text);
    }).hide();
});
</script>
                                           <?php  if(Auth::user()->tipoUsuario == '3' || Auth::user()->tipoUsuario == '2'){   ?>

                                            <script type="text/javascript">
if (sessionStorage.id <= 4) {


        x = sessionStorage.id;

    $('#review').val(x).trigger('change');
}else{document.getElementById("result").remove()}



                                            </script>


<div class="box box-primary">

<nav class="navbar navbar-standard">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Filtro</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <form class="navbar-form navbar-left">
        <div class="form-group">
                                               <input type="text" class="form-control" id="search" placeholder="Buscar por nombre">
                                               <div class="form-group">
        <select id="deal" class="criteriaSelector btn btn-default">
        <option value="all">Tipo</option>
        <option value="1">Individual</option>
        <option value="2">Colectiva</option>
      </select>

</div>
<!-- <script type="text/javascript">

    var $tournament = $('.tournament');
    if(localStorage.getItem(".tournament")) {
        $tournament.val(localStorage.getItem(".tournament"));
        
    }

  </script> -->
                                          <div class="form-group">

      <select id="review" class="criteriaSelector btn btn-default tournament">
        <option value="all">Estado</option>
                                <?php foreach($estad as $estado){?>
        <option value="<?= $estado->id; ?>"><?= $estado->nombre; ?></option>
                        <?php }?>

      </select>
        </div>
<div class="form-group">
    <select id="lineaw" class="criteriaSelector btn btn-default" style="width: 150px; word-wrap: break-word;"> 
        <option value="all">Linea</option>
                        <?php foreach($linea as $line){?>
        <option value="<?= $line->id; ?>"><?= $line->nombrel; ?></option>
                <?php }?>
      </select>
        </div>
        </div>

      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

  
<div class="box-body">
  <!-- Default panel contents -->
         <?php if( count($invt) >0){?>
  <!-- Table -->
  
  <table  class="display table table-hover col-xs-12" cellspacing="0" width="100%" width="100%">

        <thead>
      <tr>
        <th>Investigador</th>
        <th>Título</th>
        <th>Tipo de investigación</th>
        <th>Estado actual:</th>
        <th>Tiempo limitado de entrega</th>
        <th>Linea perteneciente</th>
        <th>Archivos subidos</th>
        <th>Reporte</th>
        <th>Opción</th>
      </tr>
    </thead>
            <?php foreach($invt as $archivo){?>

<tbody id="table">
      <tr  role="row" class="item deal-<?= $archivo->forma; ?> review-<?= $archivo->estado; ?> lineaw-<?= $archivo->lineas; ?> odd">
                    <?php foreach($usuariosn as $idusu){?>
                    <?php  if($idusu->id==$archivo->idUsuario){   ?>
        <td ><?= $idusu->nombres; ?> <?= $idusu->apellidos; ?></td>
                <?php }?>
                <?php }?>
        <td><?= $archivo->titulo; ?></td>
        <td>
                                        <?php  if($archivo->forma == "1"){   ?>
                                        <p style="font-weight: bold;">Individual</p>
<?php } ?>

                              <?php  if($archivo->forma == "2"){   ?>
                              <p>
<span> <b> Colectiva:</b></span>

                                           <?php foreach($usuariosn as $tipo){  ?>
<?php  if($archivo->integrante1==$tipo->id){   ?>
<?=  mb_convert_encoding(mb_convert_case($tipo->nombres, MB_CASE_TITLE),"UTF-8");  ?>,
                                <?php } ?>

 <?php  if($archivo->integrante2==$tipo->id){   ?>

 <?=  mb_convert_encoding(mb_convert_case($tipo->nombres, MB_CASE_TITLE),"UTF-8");  ?>,
                               <?php } ?>
                                <?php  if($archivo->integrante3==$tipo->id){   ?>
 <?=  mb_convert_encoding(mb_convert_case($tipo->nombres, MB_CASE_TITLE),"UTF-8");  ?>,
                               <?php } ?>
                                <?php  if($archivo->integrante4==$tipo->id){   ?>
 <?=  mb_convert_encoding(mb_convert_case($tipo->nombres, MB_CASE_TITLE),"UTF-8");  ?>,
                               <?php } ?>
                                <?php  if($archivo->integrante5==$tipo->id){   ?>
 <?=  mb_convert_encoding(mb_convert_case($tipo->nombres, MB_CASE_TITLE),"UTF-8");  ?>,                           
  <?php } ?>
                                <?php  if($archivo->integrante6==$tipo->id){   ?>
 <?=  mb_convert_encoding(mb_convert_case($tipo->nombres, MB_CASE_TITLE),"UTF-8");  ?>,
                               <?php } ?>
                                                              <?php } ?>
                                                              </p>

<?php } ?>
 <!-- 
              <?= $d=strtotime("-30 Minute");
               $formatted_dt1=Carbon\Carbon::parse(date("Y-m-d h:i:sa", $d));
$formatted_dt2=Carbon\Carbon::parse($archivo->fecha); ?>  
        <?=  $date_diff=$formatted_dt1->diffInYears($formatted_dt2);   ?>
-->  
        </td>
        <?php  if($archivo->estado==3 && $archivo->face4==""){   ?>
        <td style="background-color: #FF0000;">SIN CULMINAR</td>
        <?php }?>
                <?php  if($archivo->estado==3 && $archivo->face4!=""){   ?>
        <td style="background-color: #CCFF33;">FINALIZADO</td>
        <?php }?>
                <?php  if($archivo->estado == 1 && $formatted_dt2 < $formatted_dt1){   ?>
        <td style="background-color: #FF0000;">SIN CULMINAR</td>
        <?php }?>
                        <?php  if($archivo->estado == 1 && $formatted_dt2 > $formatted_dt1){   ?>
        <td style="background-color: #66CCFF ;">INICIADO</td>
        <?php }?>
        <?php  if($archivo->estado == 2 && $formatted_dt2 < $formatted_dt1 && $archivo->face4==""){   ?>
        <td style="background-color: #FF0000;">SIN CULMINAR</td>
        <?php }?>
                <?php  if($archivo->estado == 2 && $formatted_dt2 > $formatted_dt1){   ?>
        <td style="background-color: #FFFF66 ;">EN CURSO</td>
        <?php }?>
                        <?php  if($archivo->estado == 2 && $formatted_dt2 < $formatted_dt1 && $archivo->face4!=""){   ?>
        <td style="background-color: #CCFF33;">TIEMPO CUMPLIDO</td>
        <?php }?>

        <td>             
          <?php  if($formatted_dt2 > $formatted_dt1){   ?>
<?php 
if ($formatted_dt1->diffInMinutes($formatted_dt2) == "0" ) {
echo "Tiempo Finalizado"; }
elseif ($formatted_dt1->diffInMinutes($formatted_dt2) == "1") {
echo "Falta un minuto"; }
elseif ($formatted_dt1->diffInMinutes($formatted_dt2) >= "2" && $formatted_dt1->diffInMinutes($formatted_dt2) <= "59") 
{ echo "Faltan ". $formatted_dt1->diffInMinutes($formatted_dt2) ." minutos";}
elseif($formatted_dt1->diffInMinutes($formatted_dt2) >= "60" && $formatted_dt1->diffInHours($formatted_dt2) == "1") 
{ echo  "Falta una hora"; }
elseif($formatted_dt1->diffInHours($formatted_dt2) >= "2" && $formatted_dt1->diffInHours($formatted_dt2) <= "24")
{ echo "Faltan ". $formatted_dt1->diffInHours($formatted_dt2) ." horas"; } 
elseif($formatted_dt1->diffInDays($formatted_dt2) >= "1" && $formatted_dt1->diffInDays($formatted_dt2) == "1")
{ echo "Falta un dia";} 
elseif ($formatted_dt1->diffInDays($formatted_dt2) >= "2" && $formatted_dt1->diffInDays($formatted_dt2) <= "31") 
{ echo "Faltan " .$formatted_dt1->diffInDays($formatted_dt2). " dias";}
elseif ($formatted_dt1->diffInDays($formatted_dt2) >= "32" && $formatted_dt1->diffInMonths($formatted_dt2) == "1") 
{ echo "Falta un mes"; }
elseif ($formatted_dt1->diffInMonths($formatted_dt2) >= "2" && $formatted_dt1->diffInMonths($formatted_dt2) <= "12") 
{ echo "Faltan " .$formatted_dt1->diffInMonths($formatted_dt2). " meses"; }
elseif ($formatted_dt1->diffInMonths($formatted_dt2) >= "13") 
{ echo "Faltan " .$formatted_dt1->diffInYears($formatted_dt2). " año"; } ?>
<?php }else {
if ($formatted_dt1->diffInMinutes($formatted_dt2) == "0" ) {
echo "Tiempo Finalizado"; }
elseif ($formatted_dt1->diffInMinutes($formatted_dt2) == "1") {
echo "Hace un minuto"; }
elseif ($formatted_dt1->diffInMinutes($formatted_dt2) >= "2" && $formatted_dt1->diffInMinutes($formatted_dt2) <= "59") 
{ echo "Hace ". $formatted_dt1->diffInMinutes($formatted_dt2) ." minutos";}
elseif($formatted_dt1->diffInMinutes($formatted_dt2) >= "60" && $formatted_dt1->diffInHours($formatted_dt2) == "1") 
{ echo  "Hace una hora"; }
elseif($formatted_dt1->diffInHours($formatted_dt2) >= "2" && $formatted_dt1->diffInHours($formatted_dt2) <= "24")
{ echo "Hace ". $formatted_dt1->diffInHours($formatted_dt2) ." horas"; } 
elseif($formatted_dt1->diffInDays($formatted_dt2) >= "1" && $formatted_dt1->diffInDays($formatted_dt2) == "1")
{ echo "Hace un dia";} 
elseif ($formatted_dt1->diffInDays($formatted_dt2) >= "2" && $formatted_dt1->diffInDays($formatted_dt2) <= "31") 
{ echo "Hace " .$formatted_dt1->diffInDays($formatted_dt2). " dias";}
elseif ($formatted_dt1->diffInDays($formatted_dt2) >= "32" && $formatted_dt1->diffInMonths($formatted_dt2) == "1") 
{ echo "Hace un mes"; }
elseif ($formatted_dt1->diffInMonths($formatted_dt2) >= "2" && $formatted_dt1->diffInMonths($formatted_dt2) <= "12") 
{ echo "Hace " .$formatted_dt1->diffInMonths($formatted_dt2). " meses"; }
elseif ($formatted_dt1->diffInMonths($formatted_dt2) >= "13") 
{ echo "Fecha limite: ". $formatted_dt2->format("d-m-Y"); } } ?>
  
</td>

        <?php foreach($linea as $line){?>
        <?php  if($archivo->lineas==$line->id){   ?>
        <td class="col-sm-4"><?= $line->nombrel; ?></td>
        <?php }?>
        <?php }?>
                        <?php  if($archivo->ruta==""){   ?>

        <td>
<b> No hay </b>
</td>
        <?php }?>
                                <?php  if($archivo->ruta!=""){   ?>

        <td>
 <a href="<?= $rutaarchivos.$archivo->ruta;  ?>"  target="_blank"><div class=" btn"><li style=" font-size: 24px;" class="glyphicon glyphicon-book"></li></div></a>
</td>
        <?php }?> 
        <td>
              <a href="javascript:void(0);" onclick="mostrarficha8(<?= $archivo->id; ?>);"  ><div class="y btn" title="REPORTE"><li style=" font-size: 24px;" class="glyphicon glyphicon-list-alt"></li></div></a>
                   <a href="crear_inv/1/<?= $archivo->id; ?>" target="_blank" value="<?= $archivo->id; ?>"><div class="y btn" title="Ver en PDF" style=" font-size: 24px;">PDF</div></a>
</td>

        <td>
          <div class="btn-group" role="group" aria-label="...">

<!-- 
              <?= $d=strtotime("-30 Minute");
               $formatted_dt1=Carbon\Carbon::parse(date("Y-m-d h:i:sa", $d));
$formatted_dt2=Carbon\Carbon::parse($archivo->fecha); ?>  
        <?=  $date_diff=$formatted_dt1->diffInYears($formatted_dt2);   ?>
-->  
        <?php  if($archivo->estado== 1 && $formatted_dt2 > $formatted_dt1){   ?>
  <a href="javascript:void(0);" onclick="mostrarficha3(<?= $archivo->id; ?>);"  ><div class="v btn" title="Ver INV"><li style=" font-size: 24px;" class="glyphicon glyphicon-eye-open"></li></div></a>
        <?php }?>
        <?php  if($archivo->estado== 2 && $formatted_dt2 > $formatted_dt1){   ?>
  <a href="javascript:void(0);" onclick="mostrarficha3(<?= $archivo->id; ?>);"  ><div class="v btn" title="Ver INV"><li style=" font-size: 24px;" class="glyphicon glyphicon-eye-open"></li></div></a>
        <?php }?>
                <?php  if($archivo->estado== 3 && $formatted_dt2 > $formatted_dt1){   ?>
  <a href="javascript:void(0);" onclick="mostrarficha9(<?= $archivo->id; ?>);"  ><div class="v btn" title="Ver INV"><li style=" font-size: 24px;" class="glyphicon glyphicon-eye-open"></li></div></a>
        <?php }?>
                <?php  if($archivo->estado==2  && $archivo->face4 != "" && $formatted_dt2 < $formatted_dt1){   ?>
    <a href="javascript:void(0);" onclick="mostrarficha9(<?= $archivo->id; ?>);"  ><div class="v btn" title="Ver"><li style=" font-size: 24px;" class="glyphicon glyphicon-eye-open"></li></div></a>
        <?php }?>
        <?php  if($archivo->estado== 3 && $archivo->face4 != "" && $formatted_dt2 < $formatted_dt1){   ?>
    <a href="javascript:void(0);" onclick="mostrarficha9(<?= $archivo->id; ?>);"  ><div class="v btn" title="Ver"><li style=" font-size: 24px;" class="glyphicon glyphicon-eye-open"></li></div></a>
        <?php }?>
                           <?php  if($archivo->estado== 3 && $archivo->face4 != "" && $formatted_dt2 > $formatted_dt1){   ?>
    <a href="javascript:void(0);" onclick="mostrarficha3(<?= $archivo->id; ?>);"  ><div class="v btn" title="Ver"><li style=" font-size: 24px;" class="glyphicon glyphicon-eye-open"></li></div></a>
        <?php }?>                                        
                <?php  if($archivo->estado== 1 && $archivo->face4=="" && $formatted_dt2 < $formatted_dt1){   ?>
    <a href="javascript:void(0);" onclick="mostrarficha9(<?= $archivo->id; ?>);"  ><div class="r btn" title="Ver Inv no finalizado"><li style=" font-size: 24px;" class="glyphicon glyphicon-eye-open"></li></div></a>
            <?php }?>
                            <?php  if($archivo->estado==2 && $archivo->face4=="" && $formatted_dt2 < $formatted_dt1){   ?>
    <a href="javascript:void(0);" onclick="mostrarficha9(<?= $archivo->id; ?>);"  ><div class="r btn" title="Ver Inv no finalizado"><li style=" font-size: 24px;" class="glyphicon glyphicon-eye-open"></li></div></a>
            <?php }?>
                                        <?php  if($archivo->estado==3 && $archivo->face4 =="" && $formatted_dt2 < $formatted_dt1){   ?>
    <a href="javascript:void(0);" onclick="mostrarficha9(<?= $archivo->id; ?>);"  ><div class="r btn" title="Ver Inv no finalizado"><li style=" font-size: 24px;" class="glyphicon glyphicon-eye-open"></li></div></a>
            <?php }?>
</div>
</td>

      </tr>
    </tbody>
       <?php }?>

     </table>

        <?php echo str_replace('/?', '?', $invt->render() )  ;
}
else
{
?>
<br/><div class='rechazado'><label style='color:#FA206A'>...No se ha encontrado ninguna publicacion...</label>  </div> 
<?php
}
?>
</div>

       <?php }?>

                                               <?php if(Auth::user()->tipoUsuario == '1' ) {?>

<div class="panel panel-info col-xs-13">
    <div class="panel-heading"></div>

  <!-- Default panel contents -->
<nav class="navbar navbar-standard">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Filtro</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <form class="navbar-form navbar-left">
        <div class="form-group">
                                               <input type="text" class="form-control" id="search" placeholder="Buscar por titulo">

                                               <div class="form-group">

      <select id="review" class="criteriaSelector btn btn-default">
        <option value="all">Estado</option>
        <option value="1">Investigacion futura</option>
        <option value="2">En curso</option>
        <option value="3">Finalizado</option>
      </select>
        </div>
<div class="form-group">
    <select id="lineaw" class="criteriaSelector btn btn-default" style="width: 150px; word-wrap: break-word;"> 
        <option value="all">Linea</option>
                        <?php foreach($linea as $line){?>
        <option value="<?= $line->id; ?>"><?= $line->nombrel; ?></option>
                <?php }?>
      </select>
        </div>
        </div>

      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
         <?php 

if( count($investigaciones) >0){?>
  <!-- Table -->
  <table class="table">

        <thead>
      <tr>        
        <th>Titulo</th>
        <th>Estado actual:</th>
        <th>Tiempo limitado de entrega</th>
        <th>Linea perteneciente</th>
        <th>Archivos subidos</th>
        <th style="text-align: center;">Reporte</th>
        <th>Opción</th>
              </tr>
    </thead>
            <?php foreach($investigaciones as $archivo){?>

<tbody id="table">
      <tr class="item review-<?= $archivo->estado; ?> lineaw-<?= $archivo->lineas; ?> odd">
        <td><?= $archivo->titulo; ?></td>
              <!-- 
              <?= $d=strtotime("-30 Minute");
               $formatted_dt1=Carbon\Carbon::parse(date("Y-m-d h:i:sa", $d));
$formatted_dt2=Carbon\Carbon::parse($archivo->fecha); ?>  
        <?=  $date_diff=$formatted_dt1->diffInYears($formatted_dt2);   ?>
-->   
        <?php  if($archivo->estado==3 && $archivo->face4==""){   ?>
        <td>FINALIZADO SIN CULMINAR</td>
        <?php }?>
                <?php  if($archivo->estado==3 && $archivo->face4!=""){   ?>
        <td>FINALIZADO</td>
        <?php }?>
                <?php  if($archivo->estado == 1 && $formatted_dt2 < $formatted_dt1){   ?>
        <td>FINALIZADO SIN CULMINAR</td>
        <?php }?>
                        <?php  if($archivo->estado == 1 && $formatted_dt2 > $formatted_dt1){   ?>
        <td>INICIADO</td>
        <?php }?>
        <?php  if($archivo->estado == 2 && $formatted_dt2 < $formatted_dt1 && $archivo->face4==""){   ?>
        <td>FINALIZADO SIN CULMINAR</td>
        <?php }?>
                <?php  if($archivo->estado == 2 && $formatted_dt2 > $formatted_dt1){   ?>
        <td>EN CURSO</td>
        <?php }?>
                        <?php  if($archivo->estado == 2 && $formatted_dt2 < $formatted_dt1 && $archivo->face4!=""){   ?>
        <td>FINALIZADO TIEMPO CUMPLIDO</td>
        <?php }?>
                 <td>



<?php  if($formatted_dt2 > $formatted_dt1){   ?>
<?php 
if ($formatted_dt1->diffInMinutes($formatted_dt2) == "0" ) {
echo "Tiempo Finalizado"; }
elseif ($formatted_dt1->diffInMinutes($formatted_dt2) == "1") {
echo "Falta un minuto"; }
elseif ($formatted_dt1->diffInMinutes($formatted_dt2) >= "2" && $formatted_dt1->diffInMinutes($formatted_dt2) <= "59") 
{ echo "Faltan ". $formatted_dt1->diffInMinutes($formatted_dt2) ." minutos";}
elseif($formatted_dt1->diffInMinutes($formatted_dt2) >= "60" && $formatted_dt1->diffInHours($formatted_dt2) == "1") 
{ echo  "Falta una hora"; }
elseif($formatted_dt1->diffInHours($formatted_dt2) >= "2" && $formatted_dt1->diffInHours($formatted_dt2) <= "24")
{ echo "Faltan ". $formatted_dt1->diffInHours($formatted_dt2) ." horas"; } 
elseif($formatted_dt1->diffInDays($formatted_dt2) >= "1" && $formatted_dt1->diffInDays($formatted_dt2) == "1")
{ echo "Falta un dia";} 
elseif ($formatted_dt1->diffInDays($formatted_dt2) >= "2" && $formatted_dt1->diffInDays($formatted_dt2) <= "31") 
{ echo "Faltan " .$formatted_dt1->diffInDays($formatted_dt2). " dias";}
elseif ($formatted_dt1->diffInDays($formatted_dt2) >= "32" && $formatted_dt1->diffInMonths($formatted_dt2) == "1") 
{ echo "Falta un mes"; }
elseif ($formatted_dt1->diffInMonths($formatted_dt2) >= "2" && $formatted_dt1->diffInMonths($formatted_dt2) <= "12") 
{ echo "Faltan " .$formatted_dt1->diffInMonths($formatted_dt2). " meses"; }
elseif ($formatted_dt1->diffInMonths($formatted_dt2) >= "13") 
{ echo "Faltan " .$formatted_dt1->diffInYears($formatted_dt2). " año"; } ?>
<?php }else {
if ($formatted_dt1->diffInMinutes($formatted_dt2) == "0" ) {
echo "Tiempo Finalizado"; }
elseif ($formatted_dt1->diffInMinutes($formatted_dt2) == "1") {
echo "Hace un minuto"; }
elseif ($formatted_dt1->diffInMinutes($formatted_dt2) >= "2" && $formatted_dt1->diffInMinutes($formatted_dt2) <= "59") 
{ echo "Hace ". $formatted_dt1->diffInMinutes($formatted_dt2) ." minutos";}
elseif($formatted_dt1->diffInMinutes($formatted_dt2) >= "60" && $formatted_dt1->diffInHours($formatted_dt2) == "1") 
{ echo  "Hace una hora"; }
elseif($formatted_dt1->diffInHours($formatted_dt2) >= "2" && $formatted_dt1->diffInHours($formatted_dt2) <= "24")
{ echo "Hace ". $formatted_dt1->diffInHours($formatted_dt2) ." horas"; } 
elseif($formatted_dt1->diffInDays($formatted_dt2) >= "1" && $formatted_dt1->diffInDays($formatted_dt2) == "1")
{ echo "Hace un dia";} 
elseif ($formatted_dt1->diffInDays($formatted_dt2) >= "2" && $formatted_dt1->diffInDays($formatted_dt2) <= "31") 
{ echo "Hace " .$formatted_dt1->diffInDays($formatted_dt2). " dias";}
elseif ($formatted_dt1->diffInDays($formatted_dt2) >= "32" && $formatted_dt1->diffInMonths($formatted_dt2) == "1") 
{ echo "Hace un mes"; }
elseif ($formatted_dt1->diffInMonths($formatted_dt2) >= "2" && $formatted_dt1->diffInMonths($formatted_dt2) <= "12") 
{ echo "Hace " .$formatted_dt1->diffInMonths($formatted_dt2). " meses"; }
elseif ($formatted_dt1->diffInMonths($formatted_dt2) >= "13") 
{ echo "Fecha limite: ". $formatted_dt2->format("d-m-Y"); } } ?>

</td>
        <?php foreach($linea as $line){?>
        <?php  if($archivo->lineas==$line->id){   ?>
        <td class="col-sm-4"><?= $line->nombrel; ?></td>
        <?php }?>
        <?php }?>
                        <?php  if($archivo->ruta==""){   ?>

        <td>
<b> No hay </b>
</td>
        <?php }?>
                                <?php  if($archivo->ruta!=""){   ?>

        <td>
 <a href="<?= $rutaarchivos.$archivo->ruta;  ?>"  target="_blank"><div class=" btn"><li style=" font-size: 24px;" class="glyphicon glyphicon-book"></li></div></a>
</td>
        <?php }?> 
        <td>
              <a href="javascript:void(0);" onclick="mostrarficha8(<?= $archivo->id; ?>);"  ><div class="y btn" title="REPORTE"><li style=" font-size: 24px;" class="glyphicon glyphicon-list-alt"></li></div></a>
                   <a href="crear_inv/1/<?= $archivo->id; ?>" target="_blank" value="<?= $archivo->id; ?>"><div class="y btn" title="Ver en PDF" style=" font-size: 24px;">PDF</div></a>
                 </td>


        <td>
          <div class="btn-group" role="group" aria-label="...">

<!-- 
              <?= $d=strtotime("-30 Minute");
               $formatted_dt1=Carbon\Carbon::parse(date("Y-m-d h:i:sa", $d));
$formatted_dt2=Carbon\Carbon::parse($archivo->fecha); ?>  
        <?=  $date_diff=$formatted_dt1->diffInYears($formatted_dt2);   ?>
-->  


        <?php  if($archivo->estado== 2 && $formatted_dt2 > $formatted_dt1){   ?>
  <a href="javascript:void(0);" onclick="mostrarficha3(<?= $archivo->id; ?>);"  ><div class="btn v" title="MODIFICAR O CONTINUAR INV"><li style=" font-size: 24px;" class="glyphicon glyphicon-pencil"></li></div></a>
        <?php }?>

        <?php  if($archivo->estado== 3 && $archivo->face4 != "" && $formatted_dt2 < $formatted_dt1){   ?>
    <a href="javascript:void(0);" onclick="mostrarficha3(<?= $archivo->id; ?>);"  ><div class="btn v" title="Ver"><li style=" font-size: 24px;" class="glyphicon glyphicon-eye-open"></li></div></a>
        <?php }?>
                               <?php  if($archivo->estado== 3 && $archivo->face4 != "" && $formatted_dt2 > $formatted_dt1){   ?>
    <a href="javascript:void(0);" onclick="mostrarficha3(<?= $archivo->id; ?>);"  ><div class="btn v" title="Ver"><li style=" font-size: 24px;" class="glyphicon glyphicon-eye-open"></li></div></a>
        <?php }?>
                                    
                <?php  if($archivo->estado== 1 || $archivo->estado==2 && $archivo->face4=="" && $formatted_dt2 < $formatted_dt1){   ?>
    <a href="javascript:void(0);" onclick="mostrarficha9(<?= $archivo->id; ?>);"  ><div class="btn r" title="Ver Inv no finalizado"><li style=" font-size: 24px;" class="glyphicon glyphicon-eye-open"></li></div></a>
            <?php }?>
                <?php  if($archivo->estado==2 && $archivo->face4 !="" && $formatted_dt2 < $formatted_dt1){   ?>
    <a href="javascript:void(0);" onclick="mostrarficha9(<?= $archivo->id; ?>);"  ><div class="btn v" title="Ver Inv Finalizado"><li style=" font-size: 24px;" class="glyphicon glyphicon-eye-open"></li></div></a>
            <?php }?>
                            <?php  if($archivo->estado==3 && $archivo->face4 =="" && $formatted_dt2 < $formatted_dt1){   ?>
    <a href="javascript:void(0);" onclick="mostrarficha3(<?= $archivo->id; ?>);"  ><div class="btn r" title="Ver Inv no finalizado"><li style=" font-size: 24px;" class="glyphicon glyphicon-eye-open"></li></div></a>
            <?php }?>
                                        <?php  if($archivo->estado==3 && $archivo->face4 =="" && $formatted_dt2 > $formatted_dt1){   ?>
    <a href="javascript:void(0);" onclick="mostrarficha3(<?= $archivo->id; ?>);"  ><div class="btn r" title="Ver Inv no finalizado"><li style=" font-size: 24px;" class="glyphicon glyphicon-eye-open"></li></div></a>
            <?php }?>
</div></td>
      </tr>
    </tbody>
       <?php }?>

     </table>

</div>
        <?php echo str_replace('/?', '?', $investigaciones->render() )  ;
}
else
{
?>
<br/><div class='rechazado'><label style='color:#FA206A'>...No se ha encontrado ninguna publicacion...</label>  </div> 
<?php
}
?>
                                <?php } ?>




<style> 
.v,.r,.y{
  color: #333;
}

.v:hover {
    background-color: #1ABC9C;
}
.r:hover {
    background-color: #FF0033;
}
.y:hover {
    background-color: #CCFF00;
}
</style>
<!--                                           <?php if(Auth::user()->tipoUsuario == '1' ) {?>

 <div class="col-sm-12"> <h2 align="center">Mis investigaciones creadas</h2>
<?php 

if( count($investigaciones) >0){
   foreach($investigaciones as $archivo){
?>

<ul class="list-group list-group-unbordered">
                  
                  
                  <?php foreach($tiposinves as $tipo){  ?>

                 
                  <?php  if($archivo->idinves==$tipo->id){   ?>
                  <li class="list-group-item">

                                    <?php if($archivo->estado == 2 || $archivo->estado == 3 || $archivo->estado == 4){  ?>
<p class="tools pull-right"><b> Estado actual:</b> En Curso </p>
                     <span  value="<?= $archivo->estado; ?>"  ></span>

                                <?php } ?>
                                                                    <?php if($archivo->estado == 5){  ?>
<p class="tools pull-right"><b> Estado actual:</b> Finalizado </p>
                     <span  value="<?= $archivo->estado; ?>"  ></span>

                                <?php } ?>
   <i style="font-weight: bold;"><h4> Titulo</i></h4> <h2><textarea rows="1" readonly=""><?=  $archivo->titulo;  ?></textarea></h2><span class="tools pull-right" ><a href="javascript:void(0);" onclick="borrarinvestigacion(<?= $archivo->id;  ?> );"  ><i class="glyphicon glyphicon-remove"></i></a></span> </br><span class="tools pull-right" ><a href="javascript:void(0);" onclick="mostrarficha3(<?= $archivo->id; ?>);"  ><i class="glyphicon glyphicon-pencil"></i></a></span>
<?php if($archivo->forma== 1){  ?>

<p align="center"><b>integrante: </b> <p align="center"><?=  $usuarios->nombres;  ?> <?=  $usuarios->apellidos;  ?></p>
 </p>

                                <?php } ?>

                                <?php if($archivo->forma== 2){  ?>

<b><p align="center">integrantes </p> </b>
<div class="col-xs-12" align="center">

<p><?=  $usuarios->nombres;  ?> <?=  $usuarios->apellidos;  ?></p>
                     <?php foreach($usuariosn as $tipo){  ?>

<?php  if($archivo->integrante1==$tipo->id){   ?>
 <p><?=  $tipo->nombres;  ?> <?=  $tipo->apellidos;  ?></p> 
                                <?php } ?>

 <?php  if($archivo->integrante2==$tipo->id){   ?>

 <p><?=  $tipo->nombres;  ?> <?=  $tipo->apellidos;  ?></p> 
                               <?php } ?>
                                <?php  if($archivo->integrante3==$tipo->id){   ?>
 <p><?=  $tipo->nombres;  ?> <?=  $tipo->apellidos;  ?></p> 
                               <?php } ?>
                                <?php  if($archivo->integrante4==$tipo->id){   ?>
 <p><?=  $tipo->nombres;  ?> <?=  $tipo->apellidos;  ?></p> 
                               <?php } ?>
                                <?php  if($archivo->integrante5==$tipo->id){   ?>
 <p><?=  $tipo->nombres;  ?> <?=  $tipo->apellidos;  ?></p> 
                               <?php } ?>
                                <?php  if($archivo->integrante6==$tipo->id){   ?>
 <p><?=  $tipo->nombres;  ?> <?=  $tipo->apellidos;  ?></p> 
                               <?php } ?>
                               <?php } ?>
</div>
                               <?php } ?>

 <div><b>Resumen: </b></div>
           <textarea rows="1" class="col-xs-12" readonly="readonly "><?=  $archivo->descripcion;  ?></textarea>
                       <div><b>Objetivo: </b></div>
           <textarea rows="1" class="col-xs-12" readonly="readonly "><?=  $archivo->objetivo;  ?></textarea>
                     <div><b>Fecha de inicio de la investigacion: </b><?=  $archivo->updated_at;  ?></div>

                     <div><b>Fecha de culminacion de la investigacion: </b><?=  $archivo->created_at;  ?></div>
                                                            <div><b>Tiempo: </b><?=  $archivo->updated_at->diffInDays($archivo->created_at);  ?> Dias</div>


                    <?php if($archivo->idinves == '2'){?>
                                        <div ><b >Direccion: </b>-<?=  $archivo->lugar;  ?></div>
                                       
                               <?php } ?>
                               <div class="col-xs-12">                               

                                <?php if($archivo->estado == '2'){?>

                                       <b >Fase1: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face;  ?></textarea><br>


                               <?php } ?>
                                <?php if($archivo->estado == '3' ){?>
                                       <b >Fase1: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face;  ?></textarea><br>
                                       <b >Fase2: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face2;  ?></textarea><br>


                               <?php } ?>                       
                                       <?php if($archivo->estado == '4'){?>


                                       <b >Fase1: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face;  ?></textarea><br>
                                       <b >Fase2: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face2;  ?></textarea><br>
                                       <b >Fase3: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face3;  ?></textarea><br>
                               <?php } ?>
                               <?php if($archivo->estado == '5'){?>

                                       <b >Fase1: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face;  ?></textarea><br>
                                       <b >Fase2: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face2;  ?></textarea><br>
                                       <b >Fase3: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face3;  ?></textarea><br>
                                       <b >Fase4: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"> <?=  $archivo->face4;  ?></textarea><br>

                               <?php } ?>
                               </div> 
                                            <?php foreach($linea as $info){  ?>
                                                                 <?php  if($info->id==$archivo->lineas){   ?>

                     <div><b>Linea De Investigaciones: </b><?= $info->nombrel; ?></div>

                    <?php } ?>

                    <?php } ?>
                   <a href="<?= $rutaarchivos.$archivo->ruta;  ?>"  target="_blank"><button class="btn  btn-default btn-xs">Ver</button></a>  
                   <a href="descargar_investigacion/<?=  $archivo->id;   ?>"  ><button class="btn  btn-default btn-xs">Descargar</button></a>      
                         
                  <?php } ?>
                   

                   <?php } ?>




                   </li>
<br>


<?php        
}
echo str_replace('/?', '?', $investigaciones->render() )  ;
}
else
{
?>
<br/><div class='rechazado'><label style='color:#FA206A'>...No se ha encontrado ninguna publicacion...</label>  </div> 
<?php
}
?>
</div>


                   <?php } ?>


 -->



   <script>
    autosize(document.querySelectorAll('textarea'));
  </script>