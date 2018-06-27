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
                    <?php  if(Auth::user()->tipoUsuario == '1'){   ?>

<div class="panel panel-info col-xs-13">
  <!-- Default panel contents -->
  <div class="panel-heading"></div>
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

if( count($inu) >0){?>
  <!-- Table -->
  <table class="table">

        <thead>
      <tr>
        <th>Creador</th>
        <th>Titulo</th>
        <th>Participantes/Integrantes</th>
        <th>Estado actual:</th>
        <th>Tiempo limitado de entrega</th>
        <th>Linea perteneciente</th>
        <th>Archivos subidos</th>
        <th>Reporte</th>
        <th>Opción</th>
              </tr>
    </thead>
            <?php foreach($inu as $archivo){?>

<tbody id="table">
      <tr class="item review-<?= $archivo->estado; ?> lineaw-<?= $archivo->lineas; ?> odd">
                    <?php foreach($usuariosn as $idusu){?>
                    <?php  if($idusu->id==$archivo->idUsuario){   ?>
        <td><?= $idusu->nombres; ?> <?= $idusu->apellidos; ?></td>
                <?php }?>
                <?php }?>
        <td><?= $archivo->titulo; ?></td>
        <td>
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

              <!-- 
              <?= $d=strtotime("-30 Minute");
               $formatted_dt1=Carbon\Carbon::parse(date("Y-m-d h:i:sa", $d));
$formatted_dt2=Carbon\Carbon::parse($archivo->fecha); ?>  
        <?=  $date_diff=$formatted_dt1->diffInYears($formatted_dt2);   ?>
-->  
        </td>
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
{ echo "Fecha limite: ". $formatted_dt2->format("d-m-Y"); } } ?></td>

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
  <a href="javascript:void(0);" onclick="mostrarficha3(<?= $archivo->id; ?>);"  ><div class="v btn" title="MODIFICAR O CONTINUAR INV"><li style=" font-size: 24px;" class="glyphicon glyphicon-pencil"></li></div></a>
        <?php }?>
        <?php  if($archivo->estado== 2 && $formatted_dt2 > $formatted_dt1){   ?>
  <a href="javascript:void(0);" onclick="mostrarficha3(<?= $archivo->id; ?>);"  ><div class="v btn" title="MODIFICAR O CONTINUAR INV"><li style=" font-size: 24px;" class="glyphicon glyphicon-pencil"></li></div></a>
        <?php }?>
        <?php  if($archivo->estado== 3 && $archivo->face4 != "" && $formatted_dt2 < $formatted_dt1){   ?>
    <a href="javascript:void(0);" onclick="mostrarficha3(<?= $archivo->id; ?>);"  ><div class="v btn" title="Ver"><li style=" font-size: 24px;" class="glyphicon glyphicon-eye-open"></li></div></a>
        <?php }?>
                                   <?php  if($archivo->estado== 2 && $archivo->face4 != "" && $formatted_dt2 < $formatted_dt1){   ?>
    <a href="javascript:void(0);" onclick="mostrarficha9(<?= $archivo->id; ?>);"  ><div class="v btn" title="Ver"><li style=" font-size: 24px;" class="glyphicon glyphicon-eye-open"></li></div></a>
        <?php }?>                                
                <?php  if($archivo->estado== 1 && $archivo->face4=="" && $formatted_dt2 < $formatted_dt1){   ?>
    <a href="javascript:void(0);" onclick="mostrarficha9(<?= $archivo->id; ?>);"  ><div class="r btn" title="Ver Inv no finalizado"><li style=" font-size: 24px;" class="glyphicon glyphicon-eye-open"></li></div></a>
            <?php }?>
                            <?php  if($archivo->estado==2 && $archivo->face4=="" && $formatted_dt2 < $formatted_dt1){   ?>
    <a href="javascript:void(0);" onclick="mostrarficha9(<?= $archivo->id; ?>);"  ><div class="r btn" title="Ver Inv no finalizado"><li style=" font-size: 24px;" class="glyphicon glyphicon-eye-open"></li></div></a>
            <?php }?>
                                        <?php  if($archivo->estado==3 && $archivo->face4 =="" && $formatted_dt2 < $formatted_dt1){   ?>
    <a href="javascript:void(0);" onclick="mostrarficha3(<?= $archivo->id; ?>);"  ><div class="r btn" title="Ver Inv no finalizado"><li style=" font-size: 24px;" class="glyphicon glyphicon-eye-open"></li></div></a>
            <?php }?>
</div>

</td>
                                       
      </tr>


    </tbody>
       <?php }?>

     </table>

</div>
        <?php echo str_replace('/?', '?', $inu->render() )  ;
}
else
{
?>
<br/><div class='rechazado'><label style='color:#FA206A'>...No se ha encontrado ninguna publicacion...</label>  </div> 
<?php
}
?>
       <?php }?>  

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


   <script>
    autosize(document.querySelectorAll('textarea'));
  </script>