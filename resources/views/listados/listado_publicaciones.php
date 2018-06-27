                                                  <?php if(Auth::user()->tipoUsuario == '1' ) {?>
             
<?php 
if( count($publicaciones) >0){

   foreach($publicaciones as $archivo){ 
 ?>
<?php if( $archivo->idTipopublicacion == 7){ ?>


<div class="box box">
  <div class="box-header">
    <span class="text-light-blue tools pull-right" ><p style="color: black; font-weight: bold;"> SUBIDO</p> <?=  $archivo->created_at->diffForHumans();  ?></span> 
  <div class="box-body"> 

           <h3 style="font-weight: bold; color: grey;" ><?=  $archivo->titulo;  ?> </h3>



<br>
<span class="tools pull-right"> <a href="javascript:void(0);"  onclick="borrarpublicacion(<?= $archivo->id;;  ?> );"><i class="fa fa-trash-o"></i></a></span> 

                                    <textarea rows="1" cols="50" style="border: none; resize: none;" readonly=""><?= $archivo->resumen ?></textarea>
</br>

        
  </div>
</div>
</div>
                               <?php } ?>
<?php if( $archivo->idTipopublicacion <= 6){ ?>


<div class="box box">
	<div class="box-header">
    <span class="text-light-blue tools pull-right" ><p style="color: black; font-weight: bold;"> SUBIDO</p> <?=  $archivo->created_at->diffForHumans();  ?></span> 
	<div class="box-body"> 

           <h3 style="font-weight: bold; color: grey;" ><?=  $archivo->titulo;  ?> </h3>



<table>

  <tr>
              <?php if($archivo->img==""){ $archivo->img=url("imagenes/FP-LX-blanco.jpg"); }  ?>

    <td><img src="<?=  url($archivo->img)  ?>"  alt="User Image"  style="width:160px;height:160px;" ></td>
    <td>
      
                   <div><b>autores: </b><?=  $archivo->autores;  ?></div>   
                   <div><b>universidad: </b>-<?=  $archivo->universidad;  ?></div> 
                    <div><b>lugar: </b>-<?=  $archivo->pais;  ?></div> 
                    <div><b>año: </b>-<?=  $archivo->anio;  ?></div>

                              <?php if($archivo->idTipopublicacion == '4'){?>
                                        <div ><b >Revista: </b>-<?=  $archivo->revista;  ?></div><br/>
                                        <div ><b >Volumen: </b>-<?=  $archivo->volumen;  ?></div><br/>
                                                                      <div ><b >Numero: </b>-<?=  $archivo->Numero;  ?></div><br/>

                               <?php } ?>
    </td>
  </tr>
</table>
<span class="tools pull-right"> <a href="javascript:void(0);"  onclick="borrarpublicacion(<?= $archivo->id;;  ?> );"><i class="fa fa-trash-o"></i></a></span> 

                                    <textarea rows="1" cols="50" style="border: none; resize: none;" readonly=""><?= $archivo->resumen ?></textarea>
</br>


                   <a href= '<?=$rutaarchivos.$archivo->ruta; ?>'  target="_blank" > <button class="btn  btn-default btn-xs">Ver</button></a>  
                   <a href="descargar_publicacion/<?=  $archivo->id;   ?>"  ><button class="btn  btn-standard btn-xs">Descargar</button></a>               
	</div>
</div>
</div>
                               <?php } ?>

<?php        
}
echo str_replace('/?', '?', $publicaciones->render() )  ;
}

else
{
?>
<br/><div class='rechazado'><label style='color:#FA206A'>...No se ha encontrado ninguna publicacion...</label>  </div> 
<?php
}
?>
  <script>
    autosize(document.querySelectorAll('textarea'));
  </script>

                               <?php } ?>


                                                  <?php if(Auth::user()->tipoUsuario == '2' ) {?>
                                                               <?php if(Auth::user()->nucleo == '3' ) {?>

<?php 
if( count($publica) >0){

   foreach($publica as $archivo){  

?>

<div class="box box-primary">
  <div class="box-header"><i class="fa fa-user text-primary"></i>  <?= $archivo->user->nombres." ".$archivo->user->apellidos ;  ?>  <span class="text-light-blue tools pull-right" ><p style="color: black;"> SUBIDO EL</p> <?=  $archivo->created_at;  ?></span> </div>
  <div class="box-body"> 
                  <i class="fa fa-circle-o text-yellow"></i> <span class="text-light-blue" >-<?=  $archivo->titulo;  ?> </span><br/> 
                   <span><b>autores: </b>-<?=  $archivo->autores;  ?></span>   
                    <span class="tools pull-right" ><a href="javascript:void(0);" onclick="borrarpublicacion(<?= $archivo->id;;  ?> );"  ><i class="fa fa-trash-o"></i></a></span> <br/> 
                   <span><b>universidad: </b>-<?=  $archivo->universidad;  ?></span><br/> 
                    <span><b>pais: </b>-<?=  $archivo->pais;  ?></span> 
                    <span><b>año: </b>-<?=  $archivo->anio;  ?></span><br/>

                              <?php if($archivo->idTipopublicacion == '4'){?>
                                        <span ><b >Revista: </b>-<?=  $archivo->revista;  ?></span><br/>
                                        <span ><b >Volumen: </b>-<?=  $archivo->volumen;  ?></span><br/>
                                                                      <span ><b >Numero: </b>-<?=  $archivo->Numero;  ?></span><br/>

                               <?php } ?>


                   <a href= '<?=$rutaarchivos.$archivo->ruta; ?>'  target="_blank" > <button class="btn  btn-info btn-xs">Ver</button></a>  
                   <a href="descargar_publicacion/<?=  $archivo->id;   ?>"  ><button class="btn  btn-success btn-xs">Descargar</button></a>               
  </div>

</div>

<?php        
}

echo str_replace('/?', '?', $publica->render() )  ;
}
else
{
?>
<br/><div class='rechazado'><label style='color:#FA206A'>...No se ha encontrado ninguna publicacion...</label>  </div> 
<?php
}
?>


                               <?php } ?>
                               <?php } ?>
