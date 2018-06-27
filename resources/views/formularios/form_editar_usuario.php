                                          <?php if(Auth::user()->tipoUsuario == '1' ) {?>


 <style type="text/css"> textarea{

  resize: none;
  border: none;

}
 </style>
<div class="row">  

  <div class="col-md-12">

        <div class="box box-primary">
                        
                        <div class="box-header">
                          <h3 class="box-title">Editar información del Usuario</h3>
                        </div><!-- /.box-header 

                        -->

        <div id="notificacion_resul_feu"></div>
      <div id="notificacion_resul_fci"></div>

                <div id="notificacion_resul_fcp"></div>



        <form  id="f_editar_usuario"  method="post"  action="editar_usuario" class="form-horizontal form_entrada" >                
          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
          <input type="hidden" name="id_usuario" value="<?= $usuario->id; ?>">            


        <div class="box-body ">
<div class="col-md-12">
        <div class="form-group col-xs-4">
                              <label for="nombres">Nombres*</label>
                              <input type="text" class="form-control" id="nombres" name="nombres"  value="<?= $usuario->nombres; ?>"  >
        </div>
        <div class="form-group col-xs-4">
                              <label for="apellido">Apellidos</label>
                              <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?= $usuario->apellidos; ?>" >
        </div>
    <div class="form-group col-xs-4">
                              <label for="fecha">Fecha de nacimiento</label>
                              <input type="date" class="form-control" id="fecha_n" name="fecha_n" value="<?= $usuario->fecha_n; ?>" >
        </div>    
        </div>
        <div class="col-md-12">

        <div class="form-group col-xs-4">
                              <label for="cedula">Cedula</label>
                              <input type="text" class="form-control" id="cedula" name="cedula" value="<?= $usuario->cedula; ?>" >
        </div>
         <div class="form-group col-xs-4">
                              <label for="telefono">telefono</label>
                              <input type="text" class="form-control" id="telefono" name="telefono" value="<?= $usuario->telefono; ?>" >
        </div>


        <div class="form-group col-xs-4">
                              <label for="nucleo">Nucleo</label>
                              
                             
                               <select id="nucleo" name="nucleo" class="form-control">
                               
        <option value="ninguno" >ninguno</option>
        <option value="1">Manuel Piar</option>
        <option value="2">Jackelyn Rodryguez</option>
        <option value="3">Roraima Meru</option>
        <option value="4">NATIL</option>
        <option value="5">Horacio Ducharm</option>
        <option value="6">Eucario garcia</option>
                             
                              </select>
                         
                            
        </div>
</div>
<div class="col-md-12">

        <div class="form-group col-xs-4">
                              <label for="ciudad">Direccion De residencia</label>
                              <input type="text" class="form-control" id="ciudad" name="ciudad" value="<?= $usuario->ciudad; ?>"  >
        </div>
        <div class="form-group col-xs-4">
                              <label for="institucion">Intituto</label>
                              <input type="text" class="form-control" id="institucion" name="institucion"  value="<?= $usuario->institucion; ?>" >
        </div>
        <div class="form-group col-xs-4">
                              <label for="ocupacion">Ocupacion</label>
                              <input type="text" class="form-control" id="ocupacion" name="ocupacion" value="<?= $usuario->ocupacion; ?>" >
        </div>
</div>
<div class="col-md-12">


        <div class=" form-group col-xs-4 ">
                              <label for="pais">Linea</label>
                               <select id="lineal" name="lineal" class="form-control" >
                                <?php foreach($line as $tipo){  ?>
                                   <option value="<?= $tipo->id; ?>" > <?= $tipo->nombrel; ?> </option>
                                
                                <?php } ?>
                                
                               </select>
                       </div>


        <div class="form-group col-xs-4">
                              <label for="tema">ÁREA ACADÉMICA</label>
                              <textarea rows="5" cols="15" class="form-control" id="tema3" name="tema3" placeholder=""><?= $usuario->tema3; ?></textarea>
        </div>    
        <div class="form-group col-xs-4">
                              <label for="tema">UNIDADES CURRICULARES</label>
                                <textarea rows="5" cols="15" class="form-control" id="tema4" name="tema4" placeholder=""><?= $usuario->tema4; ?></textarea>
        </div>    
         </div> 
         <div class="col-md-12">

        <div class="form-group col-xs-4">
                              <label for="fecha">FECHA DE INGRESO UBV</label>
                              <input type="date" class="form-control" id="fecha1" name="fecha1" value="<?= $usuario->fecha1; ?>" >
        </div>    
        <div class="form-group col-xs-4">
                              <label for="fecha">FECHA DE INGRESO CESYC-MEMORANDO DE ACEPTACION</label>
                              <input type="date" class="form-control" id="fecha2" name="fecha2" value="<?= $usuario->fecha2; ?>" >
            </div>
        <div class="form-group col-xs-4">
                              <label for="fecha">FECHA DE CONCURSO O ÚLTIMO ASCENSO</label>
                              <input type="date" class="form-control" id="fecha3" name="fecha3" value="<?= $usuario->fecha3; ?>" >
        </div>
           </div> 
           <div class="col-md-12">

        <div class="form-group col-xs-4">
                              <label for="tema">ESCALAFON</label>
                                <select id="tema1" name="tema1" class="form-control">
                               
        <option ><?= $usuario->tema1; ?></option>
        <option >ASISTENTE</option>
        <option >INSTRUCTOR</option>
        <option >AGREGADO</option>
        <option >AUXILIAR </option>
                             
                              </select>
        </div>   
        <div class="form-group col-xs-4">
                              <label for="tema">DEDICACIÓN</label>
      <select id="tema2" name="tema2" class="form-control">
                               
        <option ><?= $usuario->tema2; ?></option>
        <option >CONVENCIONAL</option>
        <option >EXCLUSIVA</option>
        <option >TIEMPO COMPLETO</option>

                             
                              </select>       
                    </div>    
        
        <div class="form-group col-xs-4">
                              <label for="tema">DEPENDENCIAS ACADÉMICAS (PFG)</label>
   <select id="tema5" name="tema5" class="form-control">

                                   <?php foreach ($program as $pfg) {?>
        <?php  if($usuario->tema5==$pfg->id){   ?>

        <option ><?= $pfg->nombre; ?></option>
<?php } ?>
<?php } ?>

                               <?php foreach ($program as $pfg) {?>


        <option value="<?= $pfg->id; ?>"><?= $pfg->nombre; ?></option>
<?php } ?>


                              </select>       

          </div>   
                 </div>   
                 <div class="col-md-12">

        <div class="form-group col-xs-4">
                              <label for="tema">HORAS ACADÉMICAS</label>
   <select id="tema6" name="tema6" class="form-control">
                               
        <option ><?= $usuario->tema6; ?></option>
        <option >12 horas</option>
        <option >13 horas</option>
        <option >14 horas</option>      
        <option >15 horas</option>      
        <option >16 horas</option>      
        <option >17 horas</option>      
        <option >18 horas</option>      
        <option >19 horas</option>      
        <option >20 horas</option>      
        <option >21 horas</option>      
        <option >22 horas</option>      
        <option >23 horas</option>      
        <option >24 horas</option>      
        <option >25 horas</option>      
        <option >26 horas</option>      
        <option >27 horas</option>      
        <option >28 horas</option>      
                              </select>       
                                </div>   
        <div class="form-group col-xs-4">
                              <label for="tema">PROYECTOS SOCIOS PRODUCTIVOS</label>
                              <input type="text" class="form-control" id="tema7" name="tema7" value="<?= $usuario->tema7; ?>" >
        </div>  
        <div class="form-group col-xs-4">
                              <label for="tema">PROYECTO COMUNITARIO (UBIP) UNIDAD</label>
   <select id="tema8" name="tema8" class="form-control">
                               
        <option ><?= $usuario->tema8; ?></option>
        <option >NO ASIGNADO</option>
        <option >PROYECTO I</option>
        <option >PROYECTO II</option>
        <option >PROYECTO III</option>      
        <option >PROYECTO IV</option>      
        
                              </select>        
                                </div>  
                                 </div> 
                                 <div class="col-md-12">

        <div class="form-group col-xs-4">
                              <label for="tema">PROYECTOS DE GESTION ACADEMICAS</label>
                              <input type="text" class="form-control" id="tema9" name="tema9" value="<?= $usuario->tema9; ?>" >
        </div>   
        <div class="form-group col-xs-4">
                              <label for="tema">PROYECTOS FONACIT FINANCIADO/NO FINANCIADO</label>
                              <input type="text" class="form-control" id="tema10" name="tema10" value="<?= $usuario->tema10; ?>" >
        </div>  
        <div class="form-group col-xs-4">
                              <label for="tema">CONDICION LABORAL</label>
                              <input type="text" class="form-control" id="tema11" name="tema11" value="<?= $usuario->tema11; ?>" >
        </div>   
         </div>   
         <div class="col-md-12">

        <div class="form-group col-xs-4">
                              <label for="tema">ENTREGO EL CURRÍCULO A T/H-2016</label>
   <select id="tema12" name="tema12" class="form-control">
                               
        <option ><?= $usuario->tema12; ?></option>
        <option >NO</option>
        <option >SI</option>  
                <option >ENVIADO</option>     
   
        
                              </select>            
                                </div>    
        <div class="form-group col-xs-4">
                              <label for="tema">HORAS EN EL PFA- FORMACION AVANZADAS Y POSGRADO</label>
                              <input type="text" class="form-control" id="tema13" name="tema13" value="<?= $usuario->tema13; ?>" >
        </div>    
        <div class="form-group col-xs-4">
                              <label for="tema">PIDA PRESENTACIÓN DE AVANCES 2016 I y II</label>
                              <input type="text" class="form-control" id="tema14" name="tema14" value="<?= $usuario->tema14; ?>" >
        </div>    
         </div>  
        <div class="form-group col-xs-12">
                              <label for="tema"> TRABAJADOR ACADÉMICO EN SOLICITUD U TRAMITE DE AÑO SABATICO/PERMISO NO REMUNERADO ANUAL/JUBILACIÓN/EXCEDENCIA</label>
                              <input type="text" class="form-control" id="tema15" name="tema15" value="<?= $usuario->tema15; ?>" >
        </div>
        <!--
     <div class="form-group col-xs-6">
                      <label for="ciudad">Tipo Usuario</label>
                      <select id="tipouduario" name="tipousuario" class="form-control" >
                      <option value="<?= $usuario->tipoUsuario;  ?>" ><?= $usuario->tipo($usuario->tipoUsuario); ?></option>
                      <?php  for($i=0;$i<=count($tiposusuario)-1;$i++){  if($tiposusuario[$i]->id !=$i){ ?>

                      <option value="<?= $tiposusuario[$i]->id  ?>" ><?= $tiposusuario[$i]->nombre ?></option>
                      <?php   }} ?>
                      </select>                
     </div>-->
             </div>


        <div class="box-footer">
             <button type="submit" class="btn btn-primary">Actualizar Datos</button>
        </div>
        </form>
        </div>

  </div> <!-- end col mod 6 -->

  <div class="col-md-6">


      <div class="box box-primary">
                      <div class="box-header">
                        <h3 class="box-title">Cambiar Fotografia</h3>
                      </div><!-- /.box-header -->
     

      <form  id="f_subir_imagen" name="f_subir_imagen" method="post"  action="subir_imagen_usuario" class="formarchivo" enctype="multipart/form-data" >                
      
       <input type="hidden" name="id_usuario_foto" value="<?= $usuario->id; ?>"> 
       <input type="hidden" name="_token" id="_token"  value="<?= csrf_token(); ?>"> 

      <div class="box-body">

        <div class="form-group col-xs-6" >


          <?php if($usuario->imagenurl==""){ $usuario->imagenurl=url("imagenes/avatar.jpg"); }  ?>
          <img src="<?=  url($usuario->imagenurl)  ?>"  alt="User Image"  style="width:160px;height:160px;" id="fotografia_usuario" >
                <!-- User image -->
          
       </div>


      <div class="form-group col-xs-6"  >
             <label>Agregar Imagen </label>
              <input name="archivo" id="archivo" type="file"   class="archivo form-control" required="" /><br /><br />
      </div>

           <div class="form-group col-xs-6"  >

                          <button type="submit" class="btn btn-primary">Actualizar Imagen</button>
</div>
       


      </div>

      </form>

      </div>

  </div>    <!-- end col mod 6 -->


    <div class="col-md-6">

<div class="box box-primary">

                <div class="box-header with-border">
                  <h3 class="box-title">Cambiar Password</h3>
                </div><!-- /.box-header -->




                <!-- form start -->
                <form method="post" id="f_cambiar_password" class="form_entrada" action="cambiar_password" >
                     <input type="hidden" name="id_usuario_password" value="<?= $usuario->id; ?>"> 
                   <input type="hidden" name="_token" id="_token"  value="<?= csrf_token(); ?>"> 
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email </label>
                      <input type="email" class="form-control" id="email_usuario" name="email_usuario" placeholder="Entrar email" value="<?= $usuario->email; ?>" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="password_usuario" name="password_usuario" placeholder="Password" required>
                    </div>
                  
                    
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Cambiar Datos</button>
                  </div>
                </form>
              </div>

  </div>    <!-- end col mod 6 -->

</div> <!-- end row -->


<script>
 function cargarnucleo(){
$('#nucleo option:eq(<?= $usuario->nucleo; ?>)').prop('selected', true);	
}

cargarnucleo();

</script>
                                                                                 <?php } ?>




                                          <?php if(Auth::user()->tipoUsuario == '2' ) {?>

<div class="row">  

  <div class="col-md-12">

        <div class="box box-primary">
                        
                        <div class="box-header">
                          <h3 class="box-title">Editar información del Usuario</h3>
                        </div><!-- /.box-header 

                        -->

        <div id="notificacion_resul_feu"></div>
      <div id="notificacion_resul_fci"></div>

                <div id="notificacion_resul_fcp"></div>



        <form  id="f_editar_usuario"  method="post"  action="editar_usuario" class="form-horizontal form_entrada" >                
          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
          <input type="hidden" name="id_usuario" value="<?= $usuario->id; ?>">            


        <div class="box-body ">

        <div class="form-group col-xs-4">
                              <label for="nombres">Encargado*</label>
                              <input type="text" class="form-control" id="nombres" name="nombres"  value="<?= $usuario->nombres; ?>"  >
        </div>
        <div class="form-group col-xs-4">
                              <label for="apellido">Apellidos</label>
                              <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?= $usuario->apellidos; ?>" >
        </div>

        <div class="form-group col-xs-4">
                              <label for="cedula">Cedula</label>
                              <input type="text" class="form-control" id="cedula" name="cedula" value="<?= $usuario->cedula; ?>" >
        </div>





        
             </div>


        <div class="box-footer">
             <button type="submit" class="btn btn-primary">Actualizar Datos</button>
        </div>
        </form>
        </div>

  </div> <!-- end col mod 6 -->

  <div class="col-md-6">


      <div class="box box-primary">
                      <div class="box-header">
                        <h3 class="box-title">Cambiar Fotografia</h3>
                      </div><!-- /.box-header -->
     

      <form  id="f_subir_imagen" name="f_subir_imagen" method="post"  action="subir_imagen_usuario" class="formarchivo" enctype="multipart/form-data" >                
      
       <input type="hidden" name="id_usuario_foto" value="<?= $usuario->id; ?>"> 
       <input type="hidden" name="_token" id="_token"  value="<?= csrf_token(); ?>"> 

      <div class="box-body">

        <div class="form-group col-xs-6" >


          <?php if($usuario->imagenurl==""){ $usuario->imagenurl=url("imagenes/avatar.jpg"); }  ?>
          <img src="<?=  url($usuario->imagenurl)  ?>"  alt="User Image"  style="width:160px;height:160px;" id="fotografia_usuario" >
                <!-- User image -->
          
       </div>


      <div class="form-group col-xs-6"  >
             <label>Agregar Imagen </label>
              <input name="archivo" id="archivo" type="file"   class="archivo form-control"  required/><br /><br />
      </div>

           <div class="form-group col-xs-6"  >

                          <button type="submit" class="btn btn-primary">Actualizar Imagen</button>
</div>
       


      </div>

      </form>

      </div>

  </div>    <!-- end col mod 6 -->


    <div class="col-md-6">

<div class="box box-primary">

                <div class="box-header with-border">
                  <h3 class="box-title">Cambiar Password</h3>
                </div><!-- /.box-header -->




                <!-- form start -->
                <form method="post" id="f_cambiar_password" class="form_entrada" action="cambiar_password" >
                     <input type="hidden" name="id_usuario_password" value="<?= $usuario->id; ?>"> 
                   <input type="hidden" name="_token" id="_token"  value="<?= csrf_token(); ?>"> 
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email </label>
                      <input type="email" class="form-control" id="email_usuario" name="email_usuario" placeholder="Entrar email" value="<?= $usuario->email; ?>" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="password_usuario" name="password_usuario" placeholder="Password" required>
                    </div>
                  
                    
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Cambiar Datos</button>
                  </div>
                </form>
              </div>

  </div>    <!-- end col mod 6 -->

</div> <!-- end row -->


<script>
 function cargarnucleo(){
$('#nucleo option:eq(<?= $usuario->nucleo; ?>)').prop('selected', true);  
}

cargarnucleo();

</script>
                                                                                 <?php } ?>

   <script>
    autosize(document.querySelectorAll('textarea'));
  </script>