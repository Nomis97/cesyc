

<div class="row">  


 <div class="col-md-12">

    <div class="col-md-6">

        <div class="box box-solid">
                    <div class="box-header with-border">
                      <h3 class="box-title"><b>INFORMACIÓN DEL INVESTIGADOR</b></h3>
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
                        <li style="line-height: 25px;" ><span><i class="fa fa-circle-o text-light-blue"></i> <label for="nombre" >Nucleo:</label><span style="margin-left:15px;"><?= $usuario->delnucleo->nombre;  ?></span></span></li>
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


    <div class="col-md-6">

        <div class="box box-primary">
              <div class="box-body box-profile">

                 <?php if($usuario->imagenurl==""){ $usuario->imagenurl="imagenes/avatar.jpg"; }  ?>
               <img src="<?=  $usuario->imagenurl;  ?>"  alt="User Imagen"  class="profile-user-img img-responsive img-circle" id="fotografia_usuario" >

                <h3 class="profile-username text-center"><?= $usuario->nombres." ".$usuario->apellidos; ?></h3>

                <p class="text-muted text-center"><?= $usuario->ocupacion; ?></p>

                <ul class="list-group list-group-unbordered">
                  <li class="list-group-item">
                    <b>Nucleo</b> <a class="pull-right"><?= $usuario->delnucleo->nombre;  ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Usuario desde</b> <a class="pull-right"><?= $usuario->created_at;  ?></a>
                  </li>
                 
                </ul>
                <a  onclick="mostrarficha2(<?= $usuario->id; ?>);" class="btn btn-default btn-block" href="#"><b>Editar Perfil</b></a>
              </div>
              <!-- /.box-body -->
            </div>

    </div>    <!-- end col mod 6 -->
 </div>    <!-- end col mod 12 -->
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
                        <li style="line-height: 25px;" ><span><i class="fa  text-blue">7</i> <label for="nombre" >UNIDADES CURRICULARES:</label> </span></li> <textarea rows="5" cols="50" readonly="readonly" style="margin-left:15px; resize: none; border:none;"><?= $usuario->tema4; ?></textarea>
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
                        <li style="line-height: 25px;" ><span><i class="fa text-blue">19</i> <label for="nombre" >Linea De Investigacion:</label></span></span></li><textarea rows="5" cols="50" readonly="readonly" style="margin-left:15px; resize: none; border: 0;"><?= $usuario->tema16; ?></textarea>

                      </ul>
                    </div>
                    <!-- /.box-body  -->

          </div>





    </div >
 
<div class="col-md-4">

          <div class="box box-primary">

           <div class="box-header with-border">
                <h3 class="box-title"> <a href="javascript:void(0);" class="btn btn-default btn-block" onclick="mostrarficha1(<?= $usuario->id; ?>);"><b>EDUCACIÓN</b></a></h3>

                <div class="box-tools">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse" ><i class="fa fa-minus"></i>
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
                          
                     <br/> <i class="fa fa-circle-o text-yellow"></i> <span class="text-light-blue" > Titulos: <?=  $info->titulo;  ?></span>
                    <br>
                    <span class="fa fa-circle-o text-black"> Institucion: <?=  $info->institucion;  ?></span>  
                    <br>
                     <span class="fa fa-circle-o text-black" > Año de graduacion: <?=  $info->anio;  ?></span>
                    <?php } ?>
                    <?php } ?>
                     
                    </li>

                     <?php } ?>

                     
                    </ul>

                  </div><!-- /.box-body -->
          </div>
    </div>

<div class="col-md-4">


        <div class="box box-primary">


           <div class="box-header with-border">
                <h3 class="box-title"> <a href="javascript:void(0);" class="btn btn-default btn-block" onclick="cargarformulario(4);"><b>TRABAJOS</b></a></h3>

                <div class="box-tools">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                </div>
          </div>

                <div class="box-body box-profile">
                  
                  
                  <div id="notificacion_resul_fapu"></div>
                  <ul class="list-group list-group-unbordered">
                  
                  
                  <?php foreach($tipopublicaciones as $tipo){  ?>
                  <li class="list-group-item">
                  <i class="fa fa-file-pdf-o"></i></i><b>--<?= $tipo->titulo; ?></b> <a class="pull-right"></a>
                  
                  <?php foreach($publicaciones->get() as $archivo){  ?>
                  <?php  if($archivo->idTipopublicacion==$tipo->id){   ?>
                        
                   <br/> <i class="fa fa-circle-o text-yellow"></i> <span class="text-light-blue" >-<?=  $archivo->titulo;  ?></span>
                   <br/> <span><b>autores: </b>-<?=  $archivo->autores;  ?></span>    <span class="tools pull-right" ><a href="javascript:void(0);" onclick="borrarpublicacion(<?= $archivo->id;;  ?> );"  ><i class="fa fa-trash-o"></i></a></span>
                   <br/> <span><b>universidad: </b>-<?=  $archivo->universidad;  ?></span>
                    <br/> <span><b>pais: </b>-<?=  $archivo->pais;  ?></span> <span><b>año: </b>-<?=  $archivo->anio;  ?></span>
                   <br/><a href="<?= $rutaarchivos.$archivo->ruta;  ?>" style="display:block;" target="_blank"><button class="btn btn-block btn-success btn-xs">Descargar</button></a>
                  

                         
                  <?php } ?>
                  <?php } ?>
                   
                  </li>

                   <?php } ?>

                   
                  </ul>

                </div><!-- /.box-body -->
        </div>
   </div>




  <div class="col-md-4">

        <div class="box box-primary">
                  
           <div class="box-header with-border">
               <h3 class="box-title"><a href="javascript:void(0);" class="btn btn-default btn-block" onclick="cargarformulario(5);;"> <b>P.I.D.A</b></a></h3>

                <div class="box-tools">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                </div>
          </div>


                <div class="box-body box-profile">
                  
                  
                  <div id="notificacion_resul_faprd"></div>
                  <ul class="list-group list-group-unbordered">
                  
                  
                  <?php foreach($proyectos->get() as $archivo){  ?>
                  <li class="list-group-item">
                  <i class="fa fa-file-pdf-o"></i></i><b>-INVESTIGACION</b> <a class="pull-right"></a>
                  
                        
                   <br/> <i class="fa fa-circle-o text-yellow"></i> <span > <b>  Titulo: </b>-<?=  $archivo->titulo;  ?></span>
                      <span class="tools pull-right" ><a href="javascript:void(0);" onclick="borrarproyecto(<?= $archivo->id;  ?> );"  ><i class="fa fa-trash-o"></i></a></span>
                    <br/> <span><b>Objetivo: </b>-<?=  $archivo->objetivo;  ?></span>
                   
                     <br/>
                     <span><b>año: </b>-<?=  $archivo->fecha;  ?></span>
                   <br/><a href="<?= $rutaarchivos2.$archivo->ruta;  ?>" style="display:block;" target="_blank"><button class="btn  btn-success btn-xs">Ver archivo online</button></a>
                                           
                   
                  </li>

                   <?php } ?>

                   
                  </ul>

                </div><!-- /.box-body -->
        </div>
  </div>
  <div class="col-md-12">


        <div class="box box-primary">


           <div class="box-header with-border">
                <h3 class="box-title"> <a href="javascript:void(0);" class="btn btn-default btn-block" onclick="cargarformulario(4);"><b>INVESTIGACIONES</b></a></h3>

                <div class="box-tools">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                </div>
          </div>

                <div class="box-body box-profile">
                  
                  
                  <div id="notificacion_resul_fapu"></div>
                  <ul class="list-group list-group-unbordered">
                  
                  
                  <?php foreach($tiposinves as $tipo){  ?>
                  <li class="list-group-item">
                  <i class="fa fa-file-pdf-o"></i></i><b>--<?= $tipo->titulo; ?></b> <a class="pull-right"></a>
                  
                  <?php foreach($investigaciones->get() as $archivo){  ?>
                  <?php  if($archivo->idinves==$tipo->id){   ?>
                          <div class="box-header"><i class="fa fa-user text-primary"></i>  <?= $archivo->user->nombres." ".$archivo->user->apellidos ;  ?> <span class="text-light-blue tools pull-right" ><p style="color: black;"> Nucleo: <?= $archivo->user->delnucleo->nombre ;  ?></span> </div>

                   <br/> <i class="fa fa-circle-o text-yellow"></i> <span class="text-light-blue" >-<?=  $archivo->titulo;  ?></span>
<br/> <span><b>integrantes: </b>-<?=  $archivo->integrantes;  ?></span> 
<br/> <span><b>Descripcion: </b>
                   <br/>  <textarea rows="4" cols="50" readonly="readonly"><?=  $archivo->descripcion;  ?></textarea>
                     <br/>
                     <span><b>Fecha de culminacion de la investigacion: </b><?=  $archivo->fecha;  ?></span>
                                       <br/>

                    <?php if($archivo->idinves == '2'){?>
                                        <span ><b >Direccion: </b>-<?=  $archivo->lugar;  ?></span><br/>
                                       
                               <?php } ?>
                                <?php if($archivo->estado == '2'){?>
                                        <span ><b >Status de la investigacion: </b>-<?=  $archivo->face;  ?></span><br/>
                                       
                               <?php } ?>

                   <a href="<?= $rutaarchivos.$archivo->ruta;  ?>"  target="_blank"><button class="btn  btn-info btn-xs">Ver</button></a>  
                   <a href="descargar_investigacion/<?=  $archivo->id;   ?>"  ><button class="btn  btn-success btn-xs">Descargar</button></a>      

                         
                  <?php } ?>
                  <?php } ?>
                   
                  </li>

                   <?php } ?>

                   
                  </ul>

                </div><!-- /.box-body -->
        </div>
   </div>


</div>



    

</div> <!-- end row -->


<!--Admin-->

                                  

<script>
 function cargarnucleo(){
$('#nucleo option:eq(<?= $usuario->nucleo; ?>)').prop('selected', true);  
}

cargarnucleo();

</script>