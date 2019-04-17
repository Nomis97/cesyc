  <div class="row">  

 <div class="col-md-12">

 	    <div class="box box-primary">
                        
            <div class="box-header">
                <h3 class="box-title">Agregar Trabajos Y Publicaciones</h3>
            </div><!-- /.box-header -->

            <div id="notificacion_resul_fap"></div>

            <form  id="f_agregar_publicacion"  method="post"  action="agregar_publicacion_usuario" class="formarchivonew" >                
               
                 <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                 <input type="hidden" name="id_usuario" value="<?= $usuarios->id; ?>">   

	             <div class="box-body ">

	             	  <div class=" tools pull-right col-xs-3">
                              <label for="pais">Tipo de Publicacion</label>
                               <select id="tipo_publicacion" name="tipo_publicacion" class="form-control" onchange="mostrardiv_publicaciones(this.value);" >
                                <?php foreach($tipopublicaciones as $tipo){  ?>
                                   <option value="<?= $tipo->id; ?>" > <?= $tipo->titulo; ?> </option>
                                
                                <?php } ?>
                                
                               </select>
                       </div>

                        <div class="col-xs-12">
                              <label for="apellido">Titulo del Trabajo</label>
                              <input type="text" class="form-control" id="titulo_publicacion" name="titulo_publicacion" value="" >
                         </div>
                           <div class="col-xs-12">
                              <label for="apellido">Resumen</label>
                              <input type="text" class="form-control" id="resu" name="resu" value="" >
                         </div>
                           <div class="form-group col-xs-12">
                              <input type="hidden" class="form-control" id="nucleo" name="nucleo" value="<?=  $usuarios->nucleo;  ?>" >
                         </div> 
                           <div class="col-xs-12">
                              <label for="apellido">Autores</label>
                              <input type="text" class="form-control" id="autores_publicacion" name="autores_publicacion" value="" >
                         </div>  

                         <div class=" col-xs-8">
                              <label for="apellido">Universidad</label>
                              <input type="text" class="form-control" id="universidad_publicacion" name="universidad_publicacion" value="" >
                         </div>  

                         <div class=" col-xs-4">
                              <label for="apellido">Año</label>
                              <input type="text" class="form-control" id="anio_publicacion" name="anio_publicacion" value="" >
                         </div>

                          <div class=" col-xs-12">
                              <label for="apellido">Lugar</label>
                              <input type="text" class="form-control" id="pais_publicacion" name="pais_publicacion" value="" >
                         </div>

                       <div class=" col-xs-12" id="info_revista"  style="display:none;" >
                                  <div class=" col-xs-8">
		                              <label for="apellido">Revista</label>
		                              <input type="text" class="form-control" id="revista_publicacion" name="revista_publicacion" value="" >
		                         </div>

		                          <div class=" col-xs-4">
		                              <label for="apellido">Volumen</label>
		                              <input type="text" class="form-control" id="volumen_publicacion" name="volumen_publicacion" value="" >
		                         </div>

		                          <div class=" col-xs-4">
		                              <label for="apellido">Número</label>
		                              <input type="text" class="form-control" id="numero_publicacion" name="numero_publicacion" value="" >
		                         </div>

		                             <div class=" col-xs-4">
		                              <label for="apellido">Pagina Inicial</label>
		                              <input type="text" class="form-control" id="pageI_publicacion" name="pageI_publicacion" value="" >
		                             </div>
		                        
		                            <div class=" col-xs-4">
		                              <label for="apellido">Pagina final</label>
		                              <input type="text" class="form-control" id="pageF_publicacion" name="pageF_publicacion" value="" >
		                            </div>


                       </div>


                       <div class=" col-xs-12" id="info_libro"  style="display:none;" >

		                           <div class=" col-xs-4">
		                              <label for="apellido">Volumen</label>
		                              <input type="text" class="form-control" id="vlibro_publicacion" name="vlibro_publicacion" value="" >
		                         </div>

		                          <div class=" col-xs-4">
		                              <label for="apellido">Número</label>
		                              <input type="text" class="form-control" id="nlibro_publicacion" name="nlibro_publicacion" value="" >
		                         </div>

		                         <div class=" col-xs-4">
		                              <label for="apellido">Ciudad</label>
		                              <input type="text" class="form-control" id="nlibro_publicacion" name="nlibro_publicacion" value="" >
		                         </div>


		                          <div class=" col-xs-4">
		                              <label for="apellido">ISSN - ISBN</label>
		                              <input type="text" class="form-control" id="ISBN_publicacion" name="ISBN_publicacion" value="" >
		                         </div>

		                          <div class=" col-xs-4">
		                              <label for="apellido">Edicion</label>
		                              <input type="text" class="form-control" id="edicion_publicacion" name="edicion_publicacion" value="" >
		                         </div>

		                         <div class=" col-xs-4">
		                              <label for="apellido">Editorial</label>
		                              <input type="text" class="form-control" id="editorial_publicacion" name="editorial_publicacion" value=""  >
		                         </div> 
                                                     
		                         </div>

                        </div>    



  
                        <div class="box-footer " align="center">

                          <label class="btn btn-default " >

                <span for="archivo" style="font-weight: bold;">Subir IMAGEN </span>

                          <input type="file" class="form-control" id="ima" name="ima" style="display: none;" >

</label>

<label class="btn btn-default " >
 <span for="archivo" style="font-weight: bold;">Subir PDF </span>
                            <input type="file" class="form-control" id="file" name="file" style="display: none;" >
</label>


               <button type="submit" class="btn btn-default"  title="Guardar"><i class="glyphicon glyphicon-hdd"></i></button>
               </div>
             
            </form>
        </div>
          </div>
          </div>

