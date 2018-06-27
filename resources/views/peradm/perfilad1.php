
        <?php if(Auth::user()->tipoUsuario == '2' ) {?>
                                             <?php if(Auth::user()->nucleo == '1' ) {?>
<div class="row">  

                                                
                       <div class="col-md-12">


        <div class="box box-solid">
                    <div class="box-header with-border">
                    



                                       <div class="box-tools">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                      </div>
                    </div>
<p style="text-align: center; font-weight: bold; color:#839192;">INFORMACION PRINCIPAL</p>
                    <div class="box-body ">
                      <ul class="nav nav-pills nav-stacked">

                        <label style="margin-left: 440px; position: absolute;" >   <?php if($usuario->imagenurl==""){ $usuario->imagenurl="imagenes/avatar.jpg"; }  ?>
                  <img src="<?=  $usuario->imagenurl;  ?>"  alt="User Image"  style="width:160px;height:160px;" class="profile-user-img img-responsive img-circle">
</label>
                        <li style="line-height: 25px;" ><span><i class="fa fa-circle-o text-blue"></i> <label for="nombre" >Nucleo:</label><span style="margin-left:15px;"><?= $usuario->delnucleo->nombre;  ?></span></span></li>
                                         <li style="line-height: 25px;" ><span><i class="fa fa-circle-o text-black"></i> <label for="nombre" >Encargado:</label><span style="margin-left:15px;"><?= $usuario->nombres; ?></span> </span></li>
                        <li style="line-height: 25px;" ><span><i class="fa fa-circle-o text-blue"></i> <label for="nombre" >Apellido:</label><span style="margin-left:15px;"><?= $usuario->apellidos; ?></span></span></li>
                      
                       <li style="line-height: 25px;" ><span><i class="fa fa-circle-o text-blue"></i> <label for="nombre" >Tipo:</label><span style="margin-left:15px;"><?= $usuario->tipo($usuario->tipoUsuario);   ?></span> </span></li>
                     <li style="line-height: 25px;" ><span><i class="fa fa-circle-o text-black"></i> <label for="nombre" >Cedula:</label><span style="margin-left:15px;"><?= $usuario->cedula; ?></span></span></li>
                        <li style="line-height: 25px;" ><span><i class="fa fa-circle-o text-black"></i> <label for="nombre" >Email:</label><span style="margin-left:15px;"><?= $usuario->email; ?></span></span></li>

                      </ul>
                    </div>
                    <!-- /.box-body  -->
                <a  onclick="mostrarficha2(<?= $usuarios->id; ?>);" class="btn btn-default btn-block" href="#"><b>Editar Perfil</b></a>

          </div>





    </div >






  <div class="col-md-6">

        <div class="box box-primary">
                  
           <div class="box-header with-border">
               <h3 class="box-title"><a href="javascript:void(0);" class="btn btn-default btn-block" onclick="cargarformulario(5);;"> <b>P.I.D.As</b></a></h3>

                <div class="box-tools">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                </div>
          </div>


                <div class="box-body box-profile">
                  
                  
                  <div id="notificacion_resul_faprd"></div>
                  <ul class="list-group list-group-unbordered">
                  
                  
                  <?php foreach($proyectos as $archivo){  ?>
                  <li class="list-group-item">
  <div class="box-header"><i class="fa fa-user text-primary"></i>  <?= $archivo->user->nombres." ".$archivo->user->apellidos ;  ?> <span class="text-light-blue tools pull-right" ><p style="color: black;"> Nucleo: <?= $archivo->user->delnucleo->nombre ;  ?></span> </div>
                  
                        
                   <br/> <i class="fa fa-circle-o text-yellow"></i> <span > <b>  Titulo: </b>-<?=  $archivo->titulo;  ?></span>
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



 <div class="col-md-6">


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
                  
                  <?php foreach($investigaciones as $archivo){  ?>
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


   <div class="col-md-12">


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
                  
                  <?php foreach($publicaciones as $archivo){  ?>
                  <?php  if($archivo->idTipopublicacion==$tipo->id){   ?>
                          <div class="box-header"><i class="fa fa-user text-primary"></i>  <?= $archivo->user->nombres." ".$archivo->user->apellidos ;  ?> <span class="text-light-blue tools pull-right" ><p style="color: black;"> Nucleo: <?= $archivo->user->delnucleo->nombre ;  ?></span> </div>

                   <br/> <i class="fa fa-circle-o text-yellow"></i> <span class="text-light-blue" >-<?=  $archivo->titulo;  ?></span>
                   <br/> <span><b>autores: </b>-<?=  $archivo->autores;  ?></span>   
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


</div>


    
</div> <!-- end row -->

<script>
 function cargarnucleo(){
$('#nucleo option:eq(<?= $usuarios->nucleo; ?>)').prop('selected', true);  
}

cargarnucleo();

</script>



                  <?php } ?>

                  <?php } ?>


        <?php if(Auth::user()->tipoUsuario == '3' ) {?>
                    <?php foreach($usuarios1 as $usuarios1){ ?>

<div class="row">  

                                                
                       <div class="col-md-12">


        <div class="box box-solid">
                    <div class="box-header with-border">
                    



                                       <div class="box-tools">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                      </div>
                    </div>
<p style="text-align: center; font-weight: bold; color:#839192;">INFORMACION PRINCIPAL</p>
                    <div class="box-body ">
                      <ul class="nav nav-pills nav-stacked">

                        <label style="margin-left: 440px; position: absolute;" >   <?php if($usuarios1->imagenurl==""){ $usuarios1->imagenurl="imagenes/avatar.jpg"; }  ?>
                  <img src="<?=  $usuarios1->imagenurl;  ?>"  alt="User Image"  style="width:160px;height:160px;" class="profile-user-img img-responsive img-circle">
</label>
                        <li style="line-height: 25px;" ><span><i class="fa fa-circle-o text-blue"></i> <label for="nombre" >Nucleo:</label><span style="margin-left:15px;"><?= $usuarios1->delnucleo->nombre;  ?></span></span></li>
                                         <li style="line-height: 25px;" ><span><i class="fa fa-circle-o text-black"></i> <label for="nombre" >Encargado:</label><span style="margin-left:15px;"><?= $usuarios1->nombres; ?></span> </span></li>
                        <li style="line-height: 25px;" ><span><i class="fa fa-circle-o text-blue"></i> <label for="nombre" >Apellido:</label><span style="margin-left:15px;"><?= $usuarios1->apellidos; ?></span></span></li>
                      
                       <li style="line-height: 25px;" ><span><i class="fa fa-circle-o text-blue"></i> <label for="nombre" >Tipo:</label><span style="margin-left:15px;"><?= $usuarios1->tipo($usuarios1->tipoUsuario);   ?></span> </span></li>
                     <li style="line-height: 25px;" ><span><i class="fa fa-circle-o text-black"></i> <label for="nombre" >Cedula:</label><span style="margin-left:15px;"><?= $usuarios1->cedula; ?></span></span></li>
                        <li style="line-height: 25px;" ><span><i class="fa fa-circle-o text-black"></i> <label for="nombre" >Email:</label><span style="margin-left:15px;"><?= $usuarios1->email; ?></span></span></li>

                      </ul>
                    </div>
                    <!-- /.box-body  -->
                <a  onclick="mostrarficha2(<?= $usuarios1->id; ?>);" class="btn btn-default btn-block" href="#"><b>Editar Perfil</b></a>

          </div>





    </div >






  <div class="col-md-6">

        <div class="box box-primary">
                  
           <div class="box-header with-border">
               <h3 class="box-title"><a href="javascript:void(0);" class="btn btn-default btn-block" onclick="cargarformulario(5);;"> <b>P.I.D.As</b></a></h3>

                <div class="box-tools">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                </div>
          </div>


                <div class="box-body box-profile">
                  
                  
                  <div id="notificacion_resul_faprd"></div>
                  <ul class="list-group list-group-unbordered">
                  
                  
                  <?php foreach($proyectos as $archivo){  ?>
                  <li class="list-group-item">
  <div class="box-header"><i class="fa fa-user text-primary"></i>  <?= $archivo->user->nombres." ".$archivo->user->apellidos ;  ?> <span class="text-light-blue tools pull-right" ><p style="color: black;"> Nucleo: <?= $archivo->user->delnucleo->nombre ;  ?></span> </div>
                  
                        
                   <br/> <i class="fa fa-circle-o text-yellow"></i> <span > <b>  Titulo: </b>-<?=  $archivo->titulo;  ?></span>
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



 <div class="col-md-6">


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
                  
                  <?php foreach($investigaciones as $archivo){  ?>
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


   <div class="col-md-12">


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
                  
                  <?php foreach($publicaciones as $archivo){  ?>
                  <?php  if($archivo->idTipopublicacion==$tipo->id){   ?>
                          <div class="box-header"><i class="fa fa-user text-primary"></i>  <?= $archivo->user->nombres." ".$archivo->user->apellidos ;  ?> <span class="text-light-blue tools pull-right" ><p style="color: black;"> Nucleo: <?= $archivo->user->delnucleo->nombre ;  ?></span> </div>

                   <br/> <i class="fa fa-circle-o text-yellow"></i> <span class="text-light-blue" >-<?=  $archivo->titulo;  ?></span>
                   <br/> <span><b>autores: </b>-<?=  $archivo->autores;  ?></span>   
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


</div>


    
</div> <!-- end row -->

<script>
 function cargarnucleo(){
$('#nucleo option:eq(<?= $usuarios1->nucleo; ?>)').prop('selected', true);  
}

cargarnucleo();

</script>


                  <?php } ?>
                                    <?php } ?>
