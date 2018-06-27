                          
                              <?php if(Auth::user()->tipoUsuario == '3' ) {?>
<div class="box box-primary">
  <div class="box-header">

 <h4 style="color: teal;">Filtro</h4>
        <div  class="input-group input-group-sm">
          
                                               <input type="text" class="form-control" id="dato_buscado">

                            <span class="input-group-btn">
                              <button class="btn btn-info btn-flat" type="button" onclick="buscarusuario();" >Buscar!</button>
                            </span>
        </div>
        <div  class="col-xs-13">
        <select  id="select_filtro_nucleo"  onchange="buscarusuario();" class="btn btn-danger ">
         <?php  if(isset($paissel)){ 
             $listadonucleo=$paissel->nombre; 
             $optsel= '<option value="'.$paissel->id.'">'.$paissel->nombre.' </option>';

        }else{  
            $listadonucleo="General";
            $optsel="";
         } ?>

         <?=  $optsel;  ?>
          <option value="0" >  General  </option>

        <?php foreach($nucleos as $nucleo){   ?>
       <option value="<?= $nucleo->id ?>"  > <?= $nucleo->nombre; ?></option>
             

        <?php }  ?>
        </select>
       
        <span >  Resultados en  listado <b><?= $listadonucleo; ?></b></span>
   
        </div>

                 </div>

<div class="box-body">              
<?php 

if( count($usuarios) >0){
?>

<table id="tabla_pacientes" class="display table table-hover col-xs-12" cellspacing="0" width="100%" width="100%" >

        <thead >
            <tr>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Cedula</th>
                <th>Email</th>
                <th>Núcleo</th>
                <th>Actividad</th>
                <th>Tipo</th>
                <th>Fecha Creado</th>
             
              <th>Acción</th>
            </tr>
      </thead>

        
<tbody>             


<?php 

   foreach($usuarios as $usuario){  
        # code...
?>

 <tr role="row" class="odd">
    <td class="mailbox-messages mailbox-name"><a href="javascript:void(0);" onclick="mostrarficha0(1);"  style="display:block"><i class="fa fa-user"></i>&nbsp;&nbsp;<?= mb_convert_encoding(mb_convert_case($usuario->nombres, MB_CASE_TITLE),"UTF-8");  ?></a></td>
        <td><?= mb_convert_encoding(mb_convert_case($usuario->apellidos, MB_CASE_TITLE),"UTF-8");  ?></td>

        <td><?= $usuario->cedula;  ?></td>
    <td><?= $usuario->email;  ?></td>

            <?php foreach($nucleos as $nucleo){   ?>
            <?php if($nucleo->id==$usuario->nucleo){   ?>
    <td><?= $nucleo->nombre;  ?></td>
<?php }?>
<?php }?>
    <td><?= $usuario->institucion;  ?></td>
    <td><span class="label label-primary "><?= $usuario->tipo($usuario->tipoUsuario);   ?></span></td>
    <td><?= $usuario->created_at;  ?></td>

    <td>
    <button class="btn  btn-default btn-xs" style="width:43px; height:25px" onclick="mostrarficha0(<?= $usuario->id; ?>)" ><i class="glyphicon glyphicon-eye-open"></i></button>
       <a href="javascript:void(0)"  onclick="borrarusuario(<?= $usuario->id; ?> );" > <button class="btn  btn-standard btn-xs" style="width:43px; height:25px"><i class="glyphicon glyphicon-remove"></i></button></a>

       <a href="crear_reporte_inve/1/<?= $usuario->id; ?>" target="_blank" value="<?= $usuario->idUsuario; ?>"> <button  class="btn  btn-default" style="width:43px; height:25px"  ><i class="glyphicon glyphicon-folder-close" value="<?= $usuario->id; ?>"> </i></button></a>

    </td>
</tr>
<?php }?>
</tbody>


  

    </table>



    <?php


echo str_replace('/?', '?', $usuarios->render() )  ;

}
else
{

?>


<br/><div class='rechazado'><label style='color:#FA206A'>...No se ha encontrado ningun usuario...</label>  </div> 

<?php
}

?>
</div>
                                           <?php } ?>

 

 


 
