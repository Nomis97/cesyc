

                

           <div class="row">  

 <div class="col-md-11">
      <div class="box box-primary">

                        
                        
            <div class="box-header">
                <h3 class="box-title">Agregar Plan</h3>
            </div><!-- /.box-header 
             $investigacion->idUsuario=$request->input('id_usuario');



            -->

            <div id="notificacion_obj"></div>

            <form  id="nuevo_obj"  method="post"  action="agregar_obj" class="form-horizontal form_entrada">

                                               <input type="hidden" name="id_usuario"  value="<?= $usuario->id ?>">
                                                                             <input type="hidden" name="idinves" id="idinves" value="<?= $inv->id ?>"> 



                 <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 



                       <div class="form-group col-xs-12">
                       <label>Resumen</label>
                       <textarea class="form-control" rows="3" placeholder=" ..."  id="resu"  name="resu" ></textarea>
                       </div>

                       <div class="form-group col-xs-12">
                       <label>Objetivo</label>
                       <textarea class="form-control" rows="3" placeholder=" ..."  id="obj"  name="obj" ></textarea>
                       </div>



                            <button type="submit" class="btn btn-default" title="Guardar"><i class="glyphicon glyphicon-hdd"></i></button>

                          


               </div>

            </form>
        </div>
          

 </div>
</div>
  <script>

    autosize(document.querySelectorAll('textarea'));
  </script>



 <!--
$usuario=User::all();
       $investigacion= $usuario->investigaciones();


       $rutaarchivos= "../storage/archivos/";

       return view("formularios.form_nueva_investigaciones_usuario")   

           ->with("usuario",$usuario)

       ->with("investigacion",$investigacion) 