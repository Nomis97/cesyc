<div class="col-xs-12"> <h2>Investigaciones Colectiva</h2>

<?php 

if( count($inu) >0){

   foreach($inu as $archivo){

?>

                 
                                    <?php  if($usuarioi->id==$archivo->integrante1){   ?>
                  <li class="list-group-item">

   <i style="font-weight: bold;"><h4> Titulo</i></h4> <h2><textarea rows="1" readonly=""><?=  $archivo->titulo;  ?></textarea></h2></a></span> 
 </br><span class="tools pull-right" ><a href="javascript:void(0);" onclick="mostrarficha3(<?= $archivo->id; ?>);"  ><i class="glyphicon glyphicon-pencil"></i></a></span>
<b><p align="center">integrantes </p align="center"> </b>
<div class="col-xs-12" align="center">
                     <?php foreach($usuariosn as $tipo){  ?>
                     <?php  if($archivo->idUsuario==$tipo->id){   ?>
                     <p><?=  $tipo->nombres;  ?> </b><?=  $tipo->apellidos;  ?></p>
                                <?php } ?>

<?php  if($archivo->integrante1==$tipo->id){   ?>
 <p><?=  $tipo->nombres;  ?> </b><?=  $tipo->apellidos;  ?></p> 
                                <?php } ?>

 <?php  if($archivo->integrante2==$tipo->id){   ?>

 <p><?=  $tipo->nombres;  ?> </b><?=  $tipo->apellidos;  ?></p> 
                               <?php } ?>
                                <?php  if($archivo->integrante3==$tipo->id){   ?>
 <p><?=  $tipo->nombres;  ?> </b><?=  $tipo->apellidos;  ?></p> 
                               <?php } ?>
                                <?php  if($archivo->integrante4==$tipo->id){   ?>
 <p><?=  $tipo->nombres;  ?> </b><?=  $tipo->apellidos;  ?></p> 
                               <?php } ?>
                                <?php  if($archivo->integrante5==$tipo->id){   ?>
 <p><?=  $tipo->nombres;  ?> </b><?=  $tipo->apellidos;  ?></p> 
                               <?php } ?>
                                <?php  if($archivo->integrante6==$tipo->id){   ?>
 <p><?=  $tipo->nombres;  ?> </b><?=  $tipo->apellidos;  ?></p> 
                               <?php } ?>
                               <?php } ?>
</div>
 <div><b>Resumen: </b></div>
           <textarea rows="1" class="col-xs-12" readonly="readonly "><?=  $archivo->descripcion;  ?></textarea>
                     <div><b>Fecha de inicio de la investigacion: </b><?=  $archivo->updated_at;  ?></div>

                     <div><b>Fecha de culminacion de la investigacion: </b><?=  $archivo->created_at;  ?></div>
                                                            <div><b>Tiempo: </b><?=  $archivo->updated_at->diffInDays($archivo->created_at);  ?> Dias</div>


                    <?php if($archivo->idinves == '2'){?>
                                        <div ><b >Direccion: </b>-<?=  $archivo->lugar;  ?></div>
                                       
                               <?php } ?>
                               <div class="col-xs-12">                               

                                <?php if($archivo->estado == '2'){?>

                                       <b >Fase1: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face;  ?></textarea><br>


                               <?php } ?>
                                <?php if($archivo->estado == '3' ){?>
                                       <b >Fase1: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face;  ?></textarea><br>
                                       <b >Fase2: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face2;  ?></textarea><br>


                               <?php } ?>                       
                                       <?php if($archivo->estado == '4'){?>


                                       <b >Fase1: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face;  ?></textarea><br>
                                       <b >Fase2: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face2;  ?></textarea><br>
                                       <b >Fase3: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face3;  ?></textarea><br>
                               <?php } ?>
                               <?php if($archivo->estado == '5'){?>

                                       <b >Fase1: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face;  ?></textarea><br>
                                       <b >Fase2: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face2;  ?></textarea><br>
                                       <b >Fase3: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face3;  ?></textarea><br>
                                       <b >Fase4: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"> <?=  $archivo->face4;  ?></textarea><br>

                               <?php } ?>
                               </div> 
<?php foreach($linea as $info){  ?>
                                                                 <?php  if($info->id==$archivo->lineas){   ?>

                     <div><b>Linea De Investigaciones: </b><?= $info->nombrel; ?></div>

                    <?php } ?>

                    <?php } ?>

                   <a href="<?= $rutaarchivos.$archivo->ruta;  ?>"  target="_blank"><button class="btn  btn-default btn-xs">Ver</button></a>  
                   <a href="descargar_investigacion/<?=  $archivo->id;   ?>"  ><button class="btn  btn-default btn-xs">Descargar</button></a>      
                                            </li>

<br>
                  <?php } ?>
                   

                  <?php  if($usuarioi->id==$archivo->integrante2){   ?>
                  <li class="list-group-item">

   <i style="font-weight: bold;"><h4> Titulo</i></h4> <h2><textarea rows="1" readonly=""><?=  $archivo->titulo;  ?></textarea></h2></a></span> 
 </br><span class="tools pull-right" ><a href="javascript:void(0);" onclick="mostrarficha3(<?= $archivo->id; ?>);"  ><i class="glyphicon glyphicon-pencil"></i></a></span>
<b><p align="center">integrantes </p align="center"> </b>
<div class="col-xs-12" align="center">
                                          <?php foreach($usuariosn as $tipo){  ?>
                     <?php  if($archivo->idUsuario==$tipo->id){   ?>
                     <p><?=  $tipo->nombres;  ?> </b><?=  $tipo->apellidos;  ?></p>
                                <?php } ?>
<?php  if($archivo->integrante1==$tipo->id){   ?>
 <p><?=  $tipo->nombres;  ?> </b><?=  $tipo->apellidos;  ?></p> 
                                <?php } ?>

 <?php  if($archivo->integrante2==$tipo->id){   ?>

 <p><?=  $tipo->nombres;  ?> </b><?=  $tipo->apellidos;  ?></p> 
                               <?php } ?>
                                <?php  if($archivo->integrante3==$tipo->id){   ?>
 <p><?=  $tipo->nombres;  ?> </b><?=  $tipo->apellidos;  ?></p> 
                               <?php } ?>
                                <?php  if($archivo->integrante4==$tipo->id){   ?>
 <p><?=  $tipo->nombres;  ?> </b><?=  $tipo->apellidos;  ?></p> 
                               <?php } ?>
                                <?php  if($archivo->integrante5==$tipo->id){   ?>
 <p><?=  $tipo->nombres;  ?> </b><?=  $tipo->apellidos;  ?></p> 
                               <?php } ?>
                                <?php  if($archivo->integrante6==$tipo->id){   ?>
 <p><?=  $tipo->nombres;  ?> </b><?=  $tipo->apellidos;  ?></p> 
                               <?php } ?>
                               <?php } ?>
</div>
 <div><b>Resumen: </b></div>
           <textarea rows="1" class="col-xs-12" readonly="readonly "><?=  $archivo->descripcion;  ?></textarea>
                     <div><b>Fecha de inicio de la investigacion: </b><?=  $archivo->updated_at;  ?></div>

                     <div><b>Fecha de culminacion de la investigacion: </b><?=  $archivo->created_at;  ?></div>
                                                            <div><b>Tiempo: </b><?=  $archivo->updated_at->diffInDays($archivo->created_at);  ?> Dias</div>


                    <?php if($archivo->idinves == '2'){?>
                                        <div ><b >Direccion: </b>-<?=  $archivo->lugar;  ?></div>
                                       
                               <?php } ?>
                               <div class="col-xs-12">                               

                                <?php if($archivo->estado == '2'){?>

                                       <b >Fase1: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face;  ?></textarea><br>


                               <?php } ?>
                                <?php if($archivo->estado == '3' ){?>
                                       <b >Fase1: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face;  ?></textarea><br>
                                       <b >Fase2: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face2;  ?></textarea><br>


                               <?php } ?>                       
                                       <?php if($archivo->estado == '4'){?>


                                       <b >Fase1: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face;  ?></textarea><br>
                                       <b >Fase2: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face2;  ?></textarea><br>
                                       <b >Fase3: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face3;  ?></textarea><br>
                               <?php } ?>
                               <?php if($archivo->estado == '5'){?>

                                       <b >Fase1: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face;  ?></textarea><br>
                                       <b >Fase2: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face2;  ?></textarea><br>
                                       <b >Fase3: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face3;  ?></textarea><br>
                                       <b >Fase4: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"> <?=  $archivo->face4;  ?></textarea><br>

                               <?php } ?>
                               </div> 
<?php foreach($linea as $info){  ?>
                                                                 <?php  if($info->id==$archivo->lineas){   ?>

                     <div><b>Linea De Investigaciones: </b><?= $info->nombrel; ?></div>

                    <?php } ?>

                    <?php } ?>

                   <a href="<?= $rutaarchivos.$archivo->ruta;  ?>"  target="_blank"><button class="btn  btn-default btn-xs">Ver</button></a>  
                   <a href="descargar_investigacion/<?=  $archivo->id;   ?>"  ><button class="btn  btn-default btn-xs">Descargar</button></a>      
                                            </li>

<br>
                  <?php } ?>
                   
                  <?php  if($usuarioi->id==$archivo->integrante3){   ?>
                  <li class="list-group-item">

   <i style="font-weight: bold;"><h4> Titulo</i></h4> <h2><textarea rows="1" readonly=""><?=  $archivo->titulo;  ?></textarea></h2></a></span> 
 </br><span class="tools pull-right" ><a href="javascript:void(0);" onclick="mostrarficha3(<?= $archivo->id; ?>);"  ><i class="glyphicon glyphicon-pencil"></i></a></span>
<b><p align="center">integrantes </p align="center"> </b>
<div class="col-xs-12" align="center">
                       <?php foreach($usuariosn as $tipo){  ?>

                     <?php  if($archivo->idUsuario==$tipo->id){   ?>
                     <p><?=  $tipo->nombres;  ?> </b><?=  $tipo->apellidos;  ?></p>
                                <?php } ?>
                                                                
<?php  if($archivo->integrante1==$tipo->id){   ?>
 <p><?=  $tipo->nombres;  ?> </b><?=  $tipo->apellidos;  ?></p> 
                                <?php } ?>

 <?php  if($archivo->integrante2==$tipo->id){   ?>

 <p><?=  $tipo->nombres;  ?> </b><?=  $tipo->apellidos;  ?></p> 
                               <?php } ?>
                                <?php  if($archivo->integrante3==$tipo->id){   ?>
 <p><?=  $tipo->nombres;  ?> </b><?=  $tipo->apellidos;  ?></p> 
                               <?php } ?>
                                <?php  if($archivo->integrante4==$tipo->id){   ?>
 <p><?=  $tipo->nombres;  ?> </b><?=  $tipo->apellidos;  ?></p> 
                               <?php } ?>
                                <?php  if($archivo->integrante5==$tipo->id){   ?>
 <p><?=  $tipo->nombres;  ?> </b><?=  $tipo->apellidos;  ?></p> 
                               <?php } ?>
                                <?php  if($archivo->integrante6==$tipo->id){   ?>
 <p><?=  $tipo->nombres;  ?> </b><?=  $tipo->apellidos;  ?></p> 
                               <?php } ?>
                               <?php } ?>
</div>
 <div><b>Resumen: </b></div>
           <textarea rows="1" class="col-xs-12" readonly="readonly "><?=  $archivo->descripcion;  ?></textarea>
                     <div><b>Fecha de inicio de la investigacion: </b><?=  $archivo->updated_at;  ?></div>

                     <div><b>Fecha de culminacion de la investigacion: </b><?=  $archivo->created_at;  ?></div>
                                                            <div><b>Tiempo: </b><?=  $archivo->updated_at->diffInDays($archivo->created_at);  ?> Dias</div>


                    <?php if($archivo->idinves == '2'){?>
                                        <div ><b >Direccion: </b>-<?=  $archivo->lugar;  ?></div>
                                       
                               <?php } ?>
                               <div class="col-xs-12">                               

                                <?php if($archivo->estado == '2'){?>

                                       <b >Fase1: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face;  ?></textarea><br>


                               <?php } ?>
                                <?php if($archivo->estado == '3' ){?>
                                       <b >Fase1: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face;  ?></textarea><br>
                                       <b >Fase2: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face2;  ?></textarea><br>


                               <?php } ?>                       
                                       <?php if($archivo->estado == '4'){?>


                                       <b >Fase1: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face;  ?></textarea><br>
                                       <b >Fase2: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face2;  ?></textarea><br>
                                       <b >Fase3: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face3;  ?></textarea><br>
                               <?php } ?>
                               <?php if($archivo->estado == '5'){?>

                                       <b >Fase1: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face;  ?></textarea><br>
                                       <b >Fase2: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face2;  ?></textarea><br>
                                       <b >Fase3: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face3;  ?></textarea><br>
                                       <b >Fase4: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"> <?=  $archivo->face4;  ?></textarea><br>

                               <?php } ?>
                               </div> 
<?php foreach($linea as $info){  ?>
                                                                 <?php  if($info->id==$archivo->lineas){   ?>

                     <div><b>Linea De Investigaciones: </b><?= $info->nombrel; ?></div>

                    <?php } ?>

                    <?php } ?>

                   <a href="<?= $rutaarchivos.$archivo->ruta;  ?>"  target="_blank"><button class="btn  btn-default btn-xs">Ver</button></a>  
                   <a href="descargar_investigacion/<?=  $archivo->id;   ?>"  ><button class="btn  btn-default btn-xs">Descargar</button></a>      
                                            </li>

<br>
                  <?php } ?>
                   
                  <?php  if($usuarioi->id==$archivo->integrante4){   ?>
                  <li class="list-group-item">

   <i style="font-weight: bold;"><h4> Titulo</i></h4> <h2><textarea rows="1" readonly=""><?=  $archivo->titulo;  ?></textarea></h2></a></span> 
 </br><span class="tools pull-right" ><a href="javascript:void(0);" onclick="mostrarficha3(<?= $archivo->id; ?>);"  ><i class="glyphicon glyphicon-pencil"></i></a></span>
<b><p align="center">integrantes </p align="center"> </b>
<div class="col-xs-12" align="center">
                       <?php foreach($usuariosn as $tipo){  ?>

                     <?php  if($archivo->idUsuario==$tipo->id){   ?>
                     <p><?=  $tipo->nombres;  ?> </b><?=  $tipo->apellidos;  ?></p>
                                <?php } ?>
<?php  if($archivo->integrante1==$tipo->id){   ?>
 <p><?=  $tipo->nombres;  ?> </b><?=  $tipo->apellidos;  ?></p> 
                                <?php } ?>

 <?php  if($archivo->integrante2==$tipo->id){   ?>

 <p><?=  $tipo->nombres;  ?> </b><?=  $tipo->apellidos;  ?></p> 
                               <?php } ?>
                                <?php  if($archivo->integrante3==$tipo->id){   ?>
 <p><?=  $tipo->nombres;  ?> </b><?=  $tipo->apellidos;  ?></p> 
                               <?php } ?>
                                <?php  if($archivo->integrante4==$tipo->id){   ?>
 <p><?=  $tipo->nombres;  ?> </b><?=  $tipo->apellidos;  ?></p> 
                               <?php } ?>
                                <?php  if($archivo->integrante5==$tipo->id){   ?>
 <p><?=  $tipo->nombres;  ?> </b><?=  $tipo->apellidos;  ?></p> 
                               <?php } ?>
                                <?php  if($archivo->integrante6==$tipo->id){   ?>
 <p><?=  $tipo->nombres;  ?> </b><?=  $tipo->apellidos;  ?></p> 
                               <?php } ?>
                               <?php } ?>
</div>
 <div><b>Resumen: </b></div>
           <textarea rows="1" class="col-xs-12" readonly="readonly "><?=  $archivo->descripcion;  ?></textarea>
                     <div><b>Fecha de inicio de la investigacion: </b><?=  $archivo->updated_at;  ?></div>

                     <div><b>Fecha de culminacion de la investigacion: </b><?=  $archivo->created_at;  ?></div>
                                                            <div><b>Tiempo: </b><?=  $archivo->updated_at->diffInDays($archivo->created_at);  ?> Dias</div>


                    <?php if($archivo->idinves == '2'){?>
                                        <div ><b >Direccion: </b>-<?=  $archivo->lugar;  ?></div>
                                       
                               <?php } ?>
                               <div class="col-xs-12">                               

                                <?php if($archivo->estado == '2'){?>

                                       <b >Fase1: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face;  ?></textarea><br>


                               <?php } ?>
                                <?php if($archivo->estado == '3' ){?>
                                       <b >Fase1: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face;  ?></textarea><br>
                                       <b >Fase2: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face2;  ?></textarea><br>


                               <?php } ?>                       
                                       <?php if($archivo->estado == '4'){?>


                                       <b >Fase1: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face;  ?></textarea><br>
                                       <b >Fase2: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face2;  ?></textarea><br>
                                       <b >Fase3: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face3;  ?></textarea><br>
                               <?php } ?>
                               <?php if($archivo->estado == '5'){?>

                                       <b >Fase1: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face;  ?></textarea><br>
                                       <b >Fase2: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face2;  ?></textarea><br>
                                       <b >Fase3: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face3;  ?></textarea><br>
                                       <b >Fase4: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"> <?=  $archivo->face4;  ?></textarea><br>

                               <?php } ?>
                               </div> 
<?php foreach($linea as $info){  ?>
                                                                 <?php  if($info->id==$archivo->lineas){   ?>

                     <div><b>Linea De Investigaciones: </b><?= $info->nombrel; ?></div>

                    <?php } ?>

                    <?php } ?>

                   <a href="<?= $rutaarchivos.$archivo->ruta;  ?>"  target="_blank"><button class="btn  btn-default btn-xs">Ver</button></a>  
                   <a href="descargar_investigacion/<?=  $archivo->id;   ?>"  ><button class="btn  btn-default btn-xs">Descargar</button></a>      
                                            </li>

<br>
                  <?php } ?>
                   
                                     <?php  if($usuarioi->id==$archivo->integrante5){   ?>
                  <li class="list-group-item">

   <i style="font-weight: bold;"><h4> Titulo</i></h4> <h2><textarea rows="1" readonly=""><?=  $archivo->titulo;  ?></textarea></h2></a></span> 
 </br><span class="tools pull-right" ><a href="javascript:void(0);" onclick="mostrarficha3(<?= $archivo->id; ?>);"  ><i class="glyphicon glyphicon-pencil"></i></a></span>
<b><p align="center">integrantes </p align="center"> </b>
<div class="col-xs-12" align="center">
                       <?php foreach($usuariosn as $tipo){  ?>

                     <?php  if($archivo->idUsuario==$tipo->id){   ?>
                     <p><?=  $tipo->nombres;  ?> </b><?=  $tipo->apellidos;  ?></p>
                                <?php } ?>
<?php  if($archivo->integrante1==$tipo->id){   ?>
 <p><?=  $tipo->nombres;  ?> </b><?=  $tipo->apellidos;  ?></p> 
                                <?php } ?>

 <?php  if($archivo->integrante2==$tipo->id){   ?>

 <p><?=  $tipo->nombres;  ?> </b><?=  $tipo->apellidos;  ?></p> 
                               <?php } ?>
                                <?php  if($archivo->integrante3==$tipo->id){   ?>
 <p><?=  $tipo->nombres;  ?> </b><?=  $tipo->apellidos;  ?></p> 
                               <?php } ?>
                                <?php  if($archivo->integrante4==$tipo->id){   ?>
 <p><?=  $tipo->nombres;  ?> </b><?=  $tipo->apellidos;  ?></p> 
                               <?php } ?>
                                <?php  if($archivo->integrante5==$tipo->id){   ?>
 <p><?=  $tipo->nombres;  ?> </b><?=  $tipo->apellidos;  ?></p> 
                               <?php } ?>
                                <?php  if($archivo->integrante6==$tipo->id){   ?>
 <p><?=  $tipo->nombres;  ?> </b><?=  $tipo->apellidos;  ?></p> 
                               <?php } ?>
                               <?php } ?>
</div>
 <div><b>Resumen: </b></div>
           <textarea rows="1" class="col-xs-12" readonly="readonly "><?=  $archivo->descripcion;  ?></textarea>
                     <div><b>Fecha de inicio de la investigacion: </b><?=  $archivo->updated_at;  ?></div>

                     <div><b>Fecha de culminacion de la investigacion: </b><?=  $archivo->created_at;  ?></div>
                                                            <div><b>Tiempo: </b><?=  $archivo->updated_at->diffInDays($archivo->created_at);  ?> Dias</div>


                    <?php if($archivo->idinves == '2'){?>
                                        <div ><b >Direccion: </b>-<?=  $archivo->lugar;  ?></div>
                                       
                               <?php } ?>
                               <div class="col-xs-12">                               

                                <?php if($archivo->estado == '2'){?>

                                       <b >Fase1: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face;  ?></textarea><br>


                               <?php } ?>
                                <?php if($archivo->estado == '3' ){?>
                                       <b >Fase1: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face;  ?></textarea><br>
                                       <b >Fase2: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face2;  ?></textarea><br>


                               <?php } ?>                       
                                       <?php if($archivo->estado == '4'){?>


                                       <b >Fase1: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face;  ?></textarea><br>
                                       <b >Fase2: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face2;  ?></textarea><br>
                                       <b >Fase3: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face3;  ?></textarea><br>
                               <?php } ?>
                               <?php if($archivo->estado == '5'){?>

                                       <b >Fase1: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face;  ?></textarea><br>
                                       <b >Fase2: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face2;  ?></textarea><br>
                                       <b >Fase3: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face3;  ?></textarea><br>
                                       <b >Fase4: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"> <?=  $archivo->face4;  ?></textarea><br>

                               <?php } ?>
                               </div> 
<?php foreach($linea as $info){  ?>
                                                                 <?php  if($info->id==$archivo->lineas){   ?>

                     <div><b>Linea De Investigaciones: </b><?= $info->nombrel; ?></div>

                    <?php } ?>

                    <?php } ?>

                   <a href="<?= $rutaarchivos.$archivo->ruta;  ?>"  target="_blank"><button class="btn  btn-default btn-xs">Ver</button></a>  
                   <a href="descargar_investigacion/<?=  $archivo->id;   ?>"  ><button class="btn  btn-default btn-xs">Descargar</button></a>      
                                            </li>

<br>
                  <?php } ?>
                                     <?php  if($usuarioi->id==$archivo->integrante6){   ?>
                  <li class="list-group-item">

   <i style="font-weight: bold;"><h4> Titulo</i></h4> <h2><textarea rows="1" readonly=""><?=  $archivo->titulo;  ?></textarea></h2></a></span> 
 </br><span class="tools pull-right" ><a href="javascript:void(0);" onclick="mostrarficha3(<?= $archivo->id; ?>);"  ><i class="glyphicon glyphicon-pencil"></i></a></span>
<b><p align="center">integrantes </p align="center"> </b>
<div class="col-xs-12" align="center">
                       <?php foreach($usuariosn as $tipo){  ?>

                     <?php  if($archivo->idUsuario==$tipo->id){   ?>
                     <p><?=  $tipo->nombres;  ?> </b><?=  $tipo->apellidos;  ?></p>
                                <?php } ?>
<?php  if($archivo->integrante1==$tipo->id){   ?>
 <p><?=  $tipo->nombres;  ?> </b><?=  $tipo->apellidos;  ?></p> 
                                <?php } ?>

 <?php  if($archivo->integrante2==$tipo->id){   ?>

 <p><?=  $tipo->nombres;  ?> </b><?=  $tipo->apellidos;  ?></p> 
                               <?php } ?>
                                <?php  if($archivo->integrante3==$tipo->id){   ?>
 <p><?=  $tipo->nombres;  ?> </b><?=  $tipo->apellidos;  ?></p> 
                               <?php } ?>
                                <?php  if($archivo->integrante4==$tipo->id){   ?>
 <p><?=  $tipo->nombres;  ?> </b><?=  $tipo->apellidos;  ?></p> 
                               <?php } ?>
                                <?php  if($archivo->integrante5==$tipo->id){   ?>
 <p><?=  $tipo->nombres;  ?> </b><?=  $tipo->apellidos;  ?></p> 
                               <?php } ?>
                                <?php  if($archivo->integrante6==$tipo->id){   ?>
 <p><?=  $tipo->nombres;  ?> </b><?=  $tipo->apellidos;  ?></p> 
                               <?php } ?>
                               <?php } ?>
</div>
 <div><b>Resumen: </b></div>
           <textarea rows="1" class="col-xs-12" readonly="readonly "><?=  $archivo->descripcion;  ?></textarea>
                     <div><b>Fecha de inicio de la investigacion: </b><?=  $archivo->updated_at;  ?></div>

                     <div><b>Fecha de culminacion de la investigacion: </b><?=  $archivo->created_at;  ?></div>
                                                            <div><b>Tiempo: </b><?=  $archivo->updated_at->diffInDays($archivo->created_at);  ?> Dias</div>


                    <?php if($archivo->idinves == '2'){?>
                                        <div ><b >Direccion: </b>-<?=  $archivo->lugar;  ?></div>
                                       
                               <?php } ?>
                               <div class="col-xs-12">                               

                                <?php if($archivo->estado == '2'){?>

                                       <b >Fase1: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face;  ?></textarea><br>


                               <?php } ?>
                                <?php if($archivo->estado == '3' ){?>
                                       <b >Fase1: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face;  ?></textarea><br>
                                       <b >Fase2: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face2;  ?></textarea><br>


                               <?php } ?>                       
                                       <?php if($archivo->estado == '4'){?>


                                       <b >Fase1: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face;  ?></textarea><br>
                                       <b >Fase2: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face2;  ?></textarea><br>
                                       <b >Fase3: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face3;  ?></textarea><br>
                               <?php } ?>
                               <?php if($archivo->estado == '5'){?>

                                       <b >Fase1: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face;  ?></textarea><br>
                                       <b >Fase2: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face2;  ?></textarea><br>
                                       <b >Fase3: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"><?=  $archivo->face3;  ?></textarea><br>
                                       <b >Fase4: </b><br><textarea readonly="readonly" class="col-md-12" rows="1"> <?=  $archivo->face4;  ?></textarea><br>

                               <?php } ?>
                               </div> 
<?php foreach($linea as $info){  ?>
<?php  if($info->id==$archivo->lineas){   ?>

                     <div><b>Linea De Investigaciones: </b><?= $info->nombrel; ?></div>

                    <?php } ?>

                    <?php } ?>

                   <a href="<?= $rutaarchivos.$archivo->ruta;  ?>"  target="_blank"><button class="btn  btn-default btn-xs">Ver</button></a>  
                   <a href="descargar_investigacion/<?=  $archivo->id;   ?>"  ><button class="btn  btn-default btn-xs">Descargar</button></a>      
                                            </li>
<br>
                  <?php } ?>
                   



<?php  } echo $inu->render(); 
}
else
  {?> 
    

  <br/><div class='rechazado'><label style='color:#FA206A'>...No se ha encontrado ninguna publicacion...</label>  </div> 
<?php } ?>
</div>