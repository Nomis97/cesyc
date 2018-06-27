
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
        <option value="all">Pfg</option>
                  <?php foreach($pf as $pfg){ ?>

        <option value="<?= $pfg->id ?>"><?= $pfg->nombre ?></option>
                    <?php }?>

      </select>

</div>
                                               <div class="form-group">

      <select id="review" class="criteriaSelector btn btn-default">
        <option value="all">Núcleo</option>
          <?php foreach($nucle as $nucleo){ ?>


        <option value="<?= $nucleo->id ?>"><?= $nucleo->nombre ?></option>
            <?php }?>
      </select>
        </div>
        </div>

      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="box-body">
  <?php if( count($proyectos) >0){?>

<table  class="display table table-hover col-xs-12" cellspacing="0" width="100%" width="100%">
  <thead>
    <tr>
      <th>Nombres y apellidos</th>
      <th>Pfg</th>
      <th>Núcleo Academico</th>
                  <th>Archivos subidos</th>
            <th>PDF</th>

    </tr>
  </thead>
  <?php    foreach($proyectos as $archivo){  ?>
  <tbody id="table">
    <tr class="item deal-<?= $archivo->pfg?> review-<?= $archivo->nucleo; ?> ">
      <td><?= $archivo->user->nombres." ".$archivo->user->apellidos ;  ?></td>
                        <?php foreach($pf as $pfg){ ?>
<?php if($pfg->id==$archivo->pfg){ ?>

      <td><?= $pfg->nombre?></td>
    <?php }?>
    <?php }?>

  <?php foreach($nucle as $nucleo){ ?>
<?php if($nucleo->id==$archivo->nucleo){ ?>

      <td><?= $nucleo->nombre ?></td>

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
<a href="crear_pida/2/<?= $archivo->id; ?>" target="_blank" value="<?= $archivo->id; ?>"> <div  class="btn v" style="    font-weight: bold;" title="Descargar PDF" > <li style=" font-size: 24px;" class="glyphicon glyphicon-chevron-down"></li></div></a>

<a href="crear_pida/1/<?= $archivo->id; ?>" target="_blank" value="<?= $archivo->id; ?>"> <div class="btn r" style="    font-weight: bold;" title="Ver PDF" > <li style=" font-size: 24px;" class="glyphicon glyphicon-eye-open"></li></div></a>                                 
</td>

    </tr>
    <?php }?>

  </tbody>
</table>

<?php        
echo str_replace('/?', '?', $proyectos->render() )  ;
}
else
{
?>
<br/><div class='rechazado'><label style='color:#FA206A'>...No se ha encontrado ninguna publicacion...</label>  </div> 
<?php
}
?>
</div>
<style> 
.v,.r{
  color: #333;
}

.v:hover {
    background-color: #8E44AD;
}
.r:hover {
    background-color: #3498DB;
}
</style>
<script>
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
</script>