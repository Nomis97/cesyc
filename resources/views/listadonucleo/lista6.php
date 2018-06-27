
                                 <h4 style="color: teal;">Lista del nucleo Eucario</h4>
                                                                   <?php if(Auth::user()->tipoUsuario == '3' ) {?>

   <a href="javascript:void(0);" onclick="cargarlistado(18);"  > <button class="glyphicon glyphicon-arrow-left"></button></a>
                  <?php } ?>

<div class="box-body">              
<?php 

if( count($usuarios) >0){
?>

<table id="tabla_pacientes" class="display table table-hover" cellspacing="0" width="100%" width="100%" >
       
        <thead>
            <tr>
             <th style="width:10px">Id</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Cedula</th>
                <th>Email</th>
                <th>Núcleo</th>
                <th>Institucción</th>
                <th>Ocupación</th>
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
    <td class="sorting_1" ><?= $usuario->id; ?></td>
    <td class="mailbox-messages mailbox-name"><a href="javascript:void(0);" onclick="mostrarficha0(1);"  style="display:block"><i class="fa fa-user"></i>&nbsp;&nbsp;<?= $usuario->nombres;  ?></a></td>
        <td><?= $usuario->apellidos;  ?></td>

        <td><?= $usuario->cedula;  ?></td>
    <td><?= $usuario->email;  ?></td>
    <td><?= $usuario->delnucleo->nombre;  ?></td>
    <td><?= $usuario->institucion;  ?></td>
    <td><?= $usuario->ocupacion;  ?></td>
    <td><span class="label label-primary "><?= $usuario->tipo($usuario->tipoUsuario);   ?></span></td>
    <td><?= $usuario->created_at;  ?></td>

    <td>
    <button class="btn  btn-default btn-xs" style="width:43px; height:25px" onclick="mostrarficha0(<?= $usuario->id; ?>)" ><i class="glyphicon glyphicon-eye-open"></i></button>
       <button class="btn  btn-standard btn-xs" style="width:43px; height:25px"><a href="javascript:void(0);" onclick="borrarusuario(<?= $usuario->id; ?> );"  > 
    <i class="glyphicon glyphicon-remove"></button></i></a>
           <a href="crear_reporte_inve/1/<?= $usuario->id; ?>" target="_blank" value="<?= $usuario->id; ?>"> <button  class="btn  btn-default" style="width:43px; height:25px"  ><i class="glyphicon glyphicon-folder-close" value="<?= $usuario->id; ?>"> </i></button></a>

    </td>
</tr>

<?php        
}
?>


  

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



