
           <div class="row">  

 <div class="col-md-11">
      <div class="box box-primary">

                        
                        
            <div class="box-header">
                <h3 class="box-title">Agregar Objetivo</h3>
            </div><!-- /.box-header 
             $investigacion->idUsuario=$request->input('id_usuario');



            -->

            <div id="notificacion_obj_edit"></div>

            <form  id="edi_obj"  method="post"  action="edit_obj" class="form-horizontal form_entrada">

                                               <input type="hidden" name="id_usuario"  value="<?= $obj->id ?>">
                                                                             <input type="hidden" name="idinves" id="idinves" value="<?= $obj->idpro ?>"> 



                 <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 



                       <div class="form-group col-xs-12">
                       <label>Resumen</label>
                       <textarea class="form-control" rows="3" placeholder=" ..."  id="resu"  name="resu" ><?= $obj->resumen ?></textarea>
                       </div>

                       <div class="form-group col-xs-12">
                       <label>Objetivo</label>
                       <textarea class="form-control" rows="3" placeholder=" ..."  id="obj"  name="obj" ><?= $obj->objetivo ?></textarea>
                       </div>

                            <button type="submit" class="btn btn-default" title="Guardar"><i class="glyphicon glyphicon-hdd"></i></button>

                          


               </div>

               <div class="box-footer col-xs-12" align="center">



               </div>
             
            </form>
        </div>
          

 </div>
  <script>
    autosize(document.querySelectorAll('textarea'));
  </script>