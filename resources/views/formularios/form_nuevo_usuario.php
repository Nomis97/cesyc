
<div class="row">  

 <div class="col-md-12" >

      <div class="box box-primary">


                <div class="box-header">
                  <h3 class="box-title">Nuevo Usuario del Sistema</h3>
                </div><!-- /.box-header -->

<div id="notificacion_resul_fanu"></div>



<form  id="f_nuevo_usuario"  method="post"  action="agregar_nuevo_usuario" class="form-horizontal form_entrada"  >                

  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">              


<div class="box-body col-xs-12">
<div class="form-group col-xs-6">
                      <label for="nombre">Nombres*</label>
                      <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombres" >
</div>
<div class="form-group col-xs-6">
                      <label for="apellido">Apellidos*</label>
                      <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" >
</div>

<div class="form-group col-xs-6">
                      <label for="cedula">Cédula*</label>
                      <input type="text" class="form-control" id="cedula" name="cedula" placeholder="cedula" >
</div>


<div class="form-group col-xs-6">
                      <label for="nucleo">Núcleo</label>
                      
                     
                       <select id="nucleo" name="nucleo" class="form-control">

        <option value="1">Manuel Piar</option>
        <option value="2">Jackelyn Rodryguez</option>
        <option value="3">Roraima Meru</option>
        <option value="4">NATIL</option>
        <option value="5">Horacio Ducharm</option>
        <option value="6">Eucario garcia</option>

                     
                      </select>
                 
                    
</div>

<div class="form-group col-xs-6">
                      <label for="ciudad">Ciudad</label>
                      <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="ciudad" >
</div>



<div class="form-group col-xs-6">
                      <label for="institucion">Institucion</label>
                      <input type="text" class="form-control" id="institucion" name="institucion" placeholder="institucion" >
</div>
<div class="form-group col-xs-6">
                      <label for="ocupacion">Ocupación</label>
                      <input type="text" class="form-control" id="ocupacion" name="ocupacion" placeholder="ocupacion" >
</div>


<div class="form-group col-xs-6">
                      <label for="ciudad">Tipo</label>
                      <select id="tipouduario" name="tipousuario" class="form-control" >
                      <?php  for($i=0;$i<=count($tiposusuario)-1;$i++){   ?>
                      <option value="<?= $tiposusuario[$i]->id  ?>" ><?= $tiposusuario[$i]->nombre ?></option>
                      <?php  } ?>
                      </select>
                   
</div>

<div class="form-group col-xs-4">
                      <label for="email">Correo*</label>
                      <input type="text" class="form-control" id="email" name="email" placeholder="email" >
</div>

<div class="form-group col-xs-4">
                      <label for="email">Contraseña*</label>
                      <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
</div>
<div class="form-group col-xs-4">
                      <label for="email">Repita la Contraseña*</label>
                      <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Contraseña">
</div>
</div>




<div class="box-footer col-xs-0">
               <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-hdd"></i></button>
</div>


</form>

</div>

</div>
</div>