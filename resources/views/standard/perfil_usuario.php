                                                                                       <?php if(Auth::user()->tipoUsuario == '2' ) {?>


<div class="row">  


 <div class="col-md-12">

    <div class="col-md-12">

        <div class="box box-solid">
                    <div class="box-header with-border">
                      <h3 class="box-title"><b>INFORMACIÓN DEL ADMIN</b></h3>
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                 <input type="hidden" name="id_pe" value="<?= $usuario->id; ?>">  
                      <div class="box-tools">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                      </div>
                    </div>
                    <div class="box-body ">
                      <ul class="nav nav-pills nav-stacked">
                        <li style="line-height: 25px;" ><span> <label for="nombre" >Nombres:</label><span style="margin-left:15px;"><?= $usuario->nombres; ?></span> </span></li>
                        <li style="line-height: 25px;" ><span> <label for="nombre" >Apellidos:</label><span style="margin-left:15px;"><?= $usuario->apellidos; ?></span></span></li>
                        <li style="line-height: 25px;" ><span> <label for="nombre" >Cedula:</label><span style="margin-left:15px;"><?= $usuario->cedula; ?></span></span></li>
                                      <?php if(Auth::user()->nucleo >= '1' ) {?>

                        <li style="line-height: 25px;" ><span></i> <label for="nombre" >Nucleo:</label><span style="margin-left:15px;"><?= $usuario->delnucleo->nombre;  ?></span></span></li>
                                          <?php } ?>

                        <li style="line-height: 25px;" ><span> <label for="nombre" >Ciudad:</label><span style="margin-left:15px;"><?= $usuario->ciudad; ?></span> </span></li>
                        <li style="line-height: 25px;"><span> <label for="nombre" >Institución:</label><span style="margin-left:15px;"><?= $usuario->institucion; ?></span></span></li>
                        <li style="line-height: 25px;"><span></i> <label for="nombre" >Ocupacion:</label><span style="margin-left:15px;"><?= $usuario->ocupacion; ?></span></span></li>
                        <li style="line-height: 25px;"><span> <label for="nombre" >Tipo Usuario:</label><span style="margin-left:15px;"><?= $usuario->tipo($usuario->tipoUsuario);   ?></span> </span></li>
                        <li style="line-height: 25px;"><span> <label for="nombre" >Email:</label><span style="margin-left:15px;"><?= $usuario->email; ?></span></span></li>
                      </ul>
                    </div>
                    <!-- /.box-body -->
                <a  onclick="mostrarficha2(<?= $usuario->id; ?>);" class="btn btn-default btn-block" href="#"><b>Editar Perfil</b></a>

          </div>


    </div >

 </div>

 





    </div >
                                                              <?php } ?>

                                                        <?php if(Auth::user()->tipoUsuario == '1' ) {?>


<div class="row">  


 <div class="col-md-4">

    <div class="col-md-12">

        <div class="box box-solid">
                    <div class="box-header with-border">
                      <h3 class="box-title"><b>INFORMACIÓN DEL USUARIO</b></h3>
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                 <input type="hidden" name="id_pe" value="<?= $usuario->id; ?>">  
                      <div class="box-tools">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                      </div>
                    </div>
                    <div class="box-body ">
                      <ul class="nav nav-pills nav-stacked">
                        <li style="line-height: 25px;" ><span><i class="fa fa-circle-o text-red"></i> <label for="nombre" >Nombres:</label><span style="margin-left:15px;"><?= $usuario->nombres; ?></span> </span></li>
                        <li style="line-height: 25px;" ><span><i class="fa fa-circle-o text-yellow"></i> <label for="nombre" >Apellidos:</label><span style="margin-left:15px;"><?= $usuario->apellidos; ?></span></span></li>
                        <li style="line-height: 25px;" ><span><i class="fa fa-circle-o text-yellow"></i> <label for="nombre" >Cedula:</label><span style="margin-left:15px;"><?= $usuario->cedula; ?></span></span></li>
                                      <?php if(Auth::user()->nucleo >= '1' ) {?>

                        <li style="line-height: 25px;" ><span><i class="fa fa-circle-o text-light-blue"></i> <label for="nombre" >Nucleo:</label><span style="margin-left:15px;"><?= $usuario->delnucleo->nombre;  ?></span></span></li>
                                          <?php } ?>

                        <li style="line-height: 25px;" ><span><i class="fa fa-circle-o text-red"></i> <label for="nombre" >Ciudad:</label><span style="margin-left:15px;"><?= $usuario->ciudad; ?></span> </span></li>
                        <li style="line-height: 25px;"><span><i class="fa fa-circle-o text-yellow"></i> <label for="nombre" >Institución:</label><span style="margin-left:15px;"><?= $usuario->institucion; ?></span></span></li>
                        <li style="line-height: 25px;"><span><i class="fa fa-circle-o text-light-blue"></i> <label for="nombre" >Ocupacion:</label><span style="margin-left:15px;"><?= $usuario->ocupacion; ?></span></span></li>
                        <li style="line-height: 25px;"><span><i class="fa fa-circle-o text-red"></i> <label for="nombre" >Tipo Usuario:</label><span style="margin-left:15px;"><?= $usuario->tipo($usuario->tipoUsuario);   ?></span> </span></li>
                        <li style="line-height: 25px;"><span><i class="fa fa-circle-o text-yellow"></i> <label for="nombre" >Email:</label><span style="margin-left:15px;"><?= $usuario->email; ?></span></span></li>
                      </ul>
                    </div>
                    <!-- /.box-body -->

          </div>


    </div >

 </div>    <!-- end col mod 12 -->

    <div class="col-md-4">

        <div class="box box-primary">
              <div class="box-body box-profile">

                 <?php if($usuario->imagenurl==""){ $usuario->imagenurl="imagenes/avatar.jpg"; }  ?>
               <img src="<?=  $usuario->imagenurl;  ?>"  alt="User Imagen"  class="profile-user-img img-responsive img-circle" id="fotografia_usuario" >

                <h3 class="profile-username text-center"><?= $usuario->nombres." ".$usuario->apellidos; ?></h3>

                <p class="text-muted text-center"><?= $usuario->ocupacion; ?></p>

                <ul class="list-group list-group-unbordered">
                  <li class="list-group-item">
                                                        <?php if(Auth::user()->nucleo >= '1' ) {?>

                    <b>Nucleo</b> <a class="pull-right"><?= $usuario->delnucleo->nombre;  ?></a>
                                                              <?php } ?>

                  </li>
                  <li class="list-group-item">
                    <b>Usuario desde</b> <a class="pull-right"><?= $usuario->created_at;  ?></a>
                  </li>
                 
                </ul>
                <a  onclick="mostrarficha2(<?= $usuario->id; ?>);" class="btn btn-default btn-block" href="#"><b>Editar Perfil</b></a>
              </div>
              <!-- /.box-body -->
            </div>

    </div>    <!-- end col mod 4 -->

 
 
    <div class="col-md-4">

          <div class="box box-primary">

           <div class="box-header with-border">
                <h3 class="box-title"><b>EDUCACIÓN DEL USUARIO</b></h3>

                <div class="box-tools">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                </div>
          </div>

                  <div class="box-body box-profile">
                   
                    
                  
                    <ul class="list-group list-group-unbordered">
                    
                    
                    <?php foreach($tiposeducacion as $tipo){  ?>
                    <li class="list-group-item">
                    <i class="fa fa-book margin-r-5"></i><b>--<?= $tipo->titulo; ?></b> <a class="pull-right"></a>
                    
                    <?php foreach($educacion->get() as $info){  ?>
                    <?php  if($info->idTipoeducacion==$tipo->id){   ?>
                          
                     <br/> <i class="fa fa-circle-o text-yellow"></i> <span class="text-light-blue" >-<?=  $info->titulo;  ?></span>
                    <span>-<?=  $info->institucion;  ?></span>  
                     <span>-<?=  $info->anio;  ?></span>
                     <span class="tools pull-right" ><a href="javascript:void(0);" onclick="borrareducacion(<?= $info->id;;  ?> );"  ><i class="fa fa-trash-o"></i></a></span>        
                    <?php } ?>
                    <?php } ?>
                     
                    </li>

                     <?php } ?>

                     
                    </ul>

                    <a href="javascript:void(0);" class="btn btn-default btn-block" onclick="mostrarficha1(<?= $usuario->id; ?>);"><b>Crear nueva educacion</b></a>
                  </div><!-- /.box-body -->
          </div>
    </div>

 <div class="col-md-12">


        <div class="box box-solid">
                    <div class="box-header with-border">
                    
<p style="text-align: center; font-weight: bold; color:#839192;">INFORMACION CIENTIFICA</p>



                                       <div class="box-tools">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                      </div>
                    </div>

                    <div class="box-body ">
                      <ul class="nav nav-pills nav-stacked">
                        <li style="line-height: 25px;" ><span><i class="fa text-blue">1</i> <label for="nombre" >FECHA DE INGRESO UBV:</label><span style="margin-left:15px;"><?= $usuario->fecha1; ?></span></span></li>
                        <li style="line-height: 25px;" ><span><i class="fa  text-black">2</i> <label for="nombre" >FECHA DE INGRESO CESYC-MEMORANDO DE ACEPTACION:</label><span style="margin-left:15px;"><?= $usuario->fecha2; ?></span></span></li>
                        <li style="line-height: 25px;" ><span><i class="fa  text-blue">3</i> <label for="nombre" >FECHA DE CONCURSO O ÚLTIMO ASCENSO:</label><span style="margin-left:15px;"><?= $usuario->fecha3;  ?></span></span></li>
                        <li style="line-height: 25px;" ><span><i class="fa  text-black">4</i> <label for="nombre" >ESCALAFON:</label><span style="margin-left:15px;"><?= $usuario->tema1; ?></span> </span></li>
                        <li style="line-height: 25px;" ><span><i class="fa  text-blue">5</i> <label for="nombre" >DEDICACIÓN:</label><span style="margin-left:15px;"><?= $usuario->tema2; ?></span></span></li>
                        <li style="line-height: 25px;" ><span><i class="fa  text-black">6</i> <label for="nombre" >AREA ACADEMICA:</label><span style="margin-left:15px;"><?= $usuario->tema3; ?></span></span></li>
                        <li style="line-height: 25px;" ><span><i class="fa  text-blue">7</i> <label for="nombre" >UNIDADES CURRICULARES:</label> </span></li> <textarea rows="1" cols="50" readonly="readonly" style="margin-left:15px; resize: none; border:none;"><?= $usuario->tema4; ?></textarea>
                        <li style="line-height: 25px;" ><span><i class="fa  text-black">8</i> <label for="nombre" >DEPENDENCIAS ACADÉMICAS (PFG):</label><span style="margin-left:15px;"><?= $usuario->tema5;   ?></span> </span></li>
                        <li style="line-height: 25px;" ><span><i class="fa  text-blue">9</i> <label for="nombre" >HORAS ACADÉMICAS:</label><span style="margin-left:15px;"><?= $usuario->tema6; ?></span></span></li>
                        <li style="line-height: 25px;" ><span><i class="fa  text-black">10</i> <label for="nombre" >PROYECTOS SOCIOS PRODUCTIVOS:</label><span style="margin-left:15px;"><?= $usuario->tema7; ?></span></span></li>
                        <li style="line-height: 25px;" ><span><i class="fa  text-blue">11</i> <label for="nombre" >PROYECTO COMUNITARIO (UBIP) UNIDAD:</label><span style="margin-left:15px;"><?= $usuario->tema8; ?></span></span></li>
                        <li style="line-height: 25px;" ><span><i class="fa  text-black">12</i> <label for="nombre" >PROYECTOS DE GESTION ACADEMICAS:</label><span style="margin-left:15px;"><?= $usuario->tema9; ?></span></span></li>
                        <li style="line-height: 25px;" ><span><i class="fa  text-blue">13</i> <label for="nombre" >PROYECTOS FONACIT FINANCIADO/NO FINANCIADO:</label><span style="margin-left:15px;"><?= $usuario->tema10; ?></span></span></li>
                        <li style="line-height: 25px;" ><span><i class="fa  text-black">14</i> <label for="nombre" >CONDICION LABORAL:</label><span style="margin-left:15px;"><?= $usuario->tema11; ?></span></span></li>
                        <li style="line-height: 25px;" ><span><i class="fa  text-blue">15</i> <label for="nombre" >ENTREGO EL CURRÍCULO A T/H-2016:</label><span style="margin-left:15px;"><?= $usuario->tema12; ?></span></span></li>
                        <li style="line-height: 25px;" ><span><i class="fa  text-black">16</i> <label for="nombre" >HORAS EN EL PFA- FORMACION AVANZADAS Y POSGRADO:</label><span style="margin-left:15px;"><?= $usuario->tema13; ?></span></span></li>
                        <li style="line-height: 25px;" ><span><i class="fa  text-blue">17</i> <label for="nombre" >PIDA PRESENTACIÓN DE AVANCES 2016 I y II:</label><span style="margin-left:15px;"><?= $usuario->tema14; ?></span></span></li>
                        <li style="line-height: 25px;" ><span><i class="fa  text-black">18</i> <label for="nombre" >TRABAJADOR ACADÉMICO EN SOLICITUD U TRAMITE DE AÑO SABATICO/PERMISO NO REMUNERADO ANUAL/JUBILACIÓN/EXCEDENCIA:</label><span style="margin-left:15px;"><?= $usuario->tema15; ?></span></span></li>


                        <li style="line-height: 25px;" ><span><i class="fa text-blue">19</i> <label for="nombre" >Linea De Investigaciones:</label></span></span></li><textarea rows="1" class="col-md-12" readonly="readonly" style="margin-left:15px; resize: none; border: 0;"><?= $linea->nombrel; ?></textarea>

                      </ul>
                    </div>
                    <!-- /.box-body  -->

          </div>





    </div >
                                                              <?php } ?>

<script>
 function cargarnucleo(){
$('#nucleo option:eq(<?= $usuario->nucleo; ?>)').prop('selected', true);  
}

cargarnucleo();

</script>

   <script>
    autosize(document.querySelectorAll('textarea'));
  </script>