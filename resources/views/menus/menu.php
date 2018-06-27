

  <?php if(Auth::user()->tipoUsuario == '3' ) {?>

<div class="row">  
  <h1 style="text-align: center; font-weight: bold; color:#839192;">Coordinador menú</h1>

<br>


<div class="container col-md-12">

              <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title" align="center">Voceros del Núcleos</h3>
                  <div class="box-tools">
                    <div class="input-group" style="width: 150px;">
                      <div class="input-group-btn">
                      </div>
                    </div>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                   
                    <thead><tr>
                      <th>Núcleo</th>
                      <th>Ver Núcleo</th>
                      <th>Lista de investigadores</th>
                    </tr></thead>
                  <tbody>
                    <?php foreach ($nucleo as $tnucleo) {  ?>
 <tr>
                      <td><?= $tnucleo->nombre; ?></td>
                      <td ><a href="javascript:void(0);" onclick="cargarlistado6(1);"><button class="btn btn-block btn-default btn-xs" > <i class="glyphicon glyphicon-eye-open"></i></button></a></td>
                      <td ><a href="javascript:void(0);" onclick="cargarlistado(14,<?= $tnucleo->id; ?>);"><button class="btn btn-block btn-default btn-xs" > <i class="fa fa-users"></i></button></a></td>



                    </tr>

<?php } ?>



                                        
                   
                  </tbody></table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->



</div>
    

</div> <!-- end row -->
                                           <?php } ?>
