
        <?php if(Auth::user()->tipoUsuario == '2' ) {?>
 <div class="row">
  <div class="container col-md-12">
<div class="box">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="imagenes/planti.png" alt="CESyC" style="width:100%; height: 406px;">
      </div>

      <div class="item">
        <img src="imagenes/Ciudad_Bolívar_Vista_Area.jpg" alt="Los Angeles" style="width:100%; height: 406px;">
        <div class="carousel-caption">
          <h3>Cesyc</h3>
          <p>El Centro de Estudios Sociales y Culturales de la Universidad Bolivariana de Venezuela conjuntamente con la acción de los núcleos académicos.</p>
        </div>
      </div>

      <div class="item">
        <img src="imagenes/ven.jpg" alt="Chicago" style="width:100%; height: 406px;">
        <div class="carousel-caption">
          <h3>Cesyc</h3>
          <p>Vienen trabajando como colectivos de investigación en áreas temáticas del ámbito social, cultural y educacional focalizando sus intenciones para consolidar la producción de saberes y conocimientos.</p>
        </div>
      </div>
    
      <div class="item">
        <img src="imagenes/puenteangosto.jpg" alt="New York" style="width:100%; height: 406px;">
        <div class="carousel-caption">
          <h3>Mas Inf</h3>
          <p>Desde una mirada del Sur y que orientados por los 5 objetivos históricos del Plan de la Patria nos permite construir caminos en la transformación socio-cultural.</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>
               <style> 
.b,.y,.v,.r,.ac{
  background-color: #AEB6BF;
  padding: 10px;
      width: 150px;
    height: 125px;
      margin: 1%;
text-align: center;
}
.re{
  padding: 10px;
  margin: 0 auto;
text-align: center;
font-size: 24px;

}
.ico{
font-size: 24px;
}

.b:hover {
    background-color: #66CCFF;
}
.y:hover {
    background-color: #FFFF66;
}
.v:hover {
    background-color: #CCFF33;
}
.r:hover {
    background-color: #FF0000;
}
.ac:hover {
    background-color: #FFFFCC;
}
</style>
 
   

 <!-- <script type="text/javascript">
    $('#hola').click(function () {    
        $tournament.val('1');
        localStorage.setItem(".tournament", $tournament.val());
    });
    
   $('#hola2').click(function () { 
        $tournament.val('2');
        localStorage.setItem(".tournament", $tournament.val());
        });
   $('#hola3').click(function () {        
        $tournament.val('3');
        localStorage.setItem(".tournament", $tournament.val());
        });
 </script> -->
<!-- <button id="hola">1</button>
<button id="hola2">2</button>
<button id="hola3">3</button> -->



                  <div class="alert alert-default col-md-6" align="center">
                                                                              <p style="font-weight: bold;">Investigaciones</p>
                                                                              <br>

<a href="javascript:void(0);" onclick="cargarlistado(5,1);"> <div class="ac" style="color: black;"> <span class="glyphicon glyphicon-stats ico"></span> <br>  Total de Investigacones <p class="re"><?=  $intoco->count();  ?></p></div></a>
                  </div>


                                    <div class="alert alert-default col-md-6" align="center">
                                                                              <p style="font-weight: bold;">P.I.D.A</p>
                                                                              <br>

                  <a href="javascript:void(0);" onclick="cargarlistado(6,1);" > <div class=" ac" style="color: black;"><span class="glyphicon glyphicon-stats ico"></span> <br> Total de P.I.D.A <p class="re"><?=  $pid->count();  ?></p></div></a>
                  </div>

</div> <!-- end row -->
                  <?php } ?>
                                  <?php if(Auth::user()->tipoUsuario == '1' ) {?>
                                   <style type="text/css"> textarea{

  resize: none;
  border: none;

}
 </style>

<div class="row ">  

 <div class="col-md-12">
<div>
  <div class="container col-md-12">
<div class="box">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="imagenes/Ciudad_Bolívar_Vista_Area.jpg" alt="Los Angeles" style="width:100%; height: 406px;">
        <div class="carousel-caption">
          <h3>Cesyc</h3>
          <p>El Centro de Estudios Sociales y Culturales de la Universidad Bolivariana de Venezuela conjuntamente con la acción de los núcleos académicos.</p>
        </div>
      </div>

      <div class="item">
        <img src="imagenes/ven.jpg" alt="Chicago" style="width:100%; height: 406px;">
        <div class="carousel-caption">
          <h3>Cesyc</h3>
          <p>Vienen trabajando como colectivos de investigación en áreas temáticas del ámbito social, cultural y educacional focalizando sus intenciones para consolidar la producción de saberes y conocimientos.</p>
        </div>
      </div>
    
      <div class="item">
        <img src="imagenes/puenteangosto.jpg" alt="New York" style="width:100%; height: 406px;">
        <div class="carousel-caption">
          <h3>Mas Inf</h3>
          <p>Desde una mirada del Sur y que orientados por los 5 objetivos históricos del Plan de la Patria nos permite construir caminos en la transformación socio-cultural.</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>
<!--             <div class="box">


           <div class="box-header with-border">
            <h1 style="font-weight: bold; color: #0066ff;  text-align : justify; ">Sistema C.E.S.Y.C</h1>

           </div>
                      <div class="box-header with-border">
            <p style="  text-align : justify;  font-family: Arial; font-size: 12pt;"> El CESYC un espacio para el encuentro y socialización de saberes y conocimientos de Nuestra América.
</p>
<p style="  text-align : justify;  font-family: Arial; font-size: 12pt;">
El Centro de Estudios Sociales y Culturales (CESyC) de la Universidad Bolivariana de Venezuela conjuntamente con la acción de los núcleos académicos vienen trabajando como colectivos de investigación en áreas temáticas del ámbito social, cultural y educacional focalizando sus intenciones para consolidar la producción de saberes y conocimientos desde una mirada del Sur y que orientados por los 5 objetivos históricos del Plan de la Patria nos permite construir caminos en la transformación socio-cultural.</p>


           </div>
         </div> -->
</div>
         </div>

 <div class="col-md-8 ">
<div>

           <div class="box-header with-border" >
            <h2 style="font-weight: bold; color: grey;  text-align : justify; ">Publicaciones</h2>
                       </div>


<div class="form-group  ">
<div id="comentariosn"></div>

<form  id="nuevo_comentario"  method="post"  action="agregar_comentario" class="formarchivo"  >                
  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                   <input type="hidden" name="id_con" value="<?= $usu->id; ?>"> 
                 <input type="hidden" name="tipo_publicacion" value="7">   

  <textarea class="form-control" rows="2" placeholder="Comentar..." style="border-radius: 5px; font-family: arial;" name="stadus" id="stadus" required=""></textarea>

  <button type="submit" class="btn btn-info pull-right" id="something">Publicar</button>
</form>
  <script type="text/javascript">
          $('#something').click(function() {
setTimeout("cargarlistado(1,1)", 1000);
});

</script>
</div>

<br>
<br>

                     <?php 
if( count($publi) >0){  ?>

<?php  foreach($publi as $publica){  ?>


                                           <?php foreach($usuario as $usu){  ?>

                                   <?php if($publica->idUsuario==$usu->id ) {?>

                                                                            <?php if($publica->idTipopublicacion== 7) {?>

                                                                                      <li class="list-group-item" style="border-radius:  5px;">

                    <span class="text-light-blue tools pull-right" ><p style="color: grey; font-weight: bold;"> <?=  $publica->created_at->diffForHumans();  ?></p></span> 

                                              <h5 style="font-weight: bold; color: teal;"><?=  $usu->nombres;  ?> <?=  $usu->apellidos;  ?> </h5>
<div>
<span class="tools pull-right"> <a href="javascript:void(0);"  onclick="borrarcom(<?= $publica->id;;  ?> );"><i class="fa fa-trash-o" title="Borrar"></i></a></span> </div>
<textarea readonly class="form-control" rows="1" style="font-family: arial;"><?=  $publica->resumen;  ?> </textarea>

</li>

<br>

                                         <?php } ?>

<?php } ?>

                                         <?php } ?>

                                                                   <?php if($publica->idTipopublicacion <= 6) {?>
                                                                                      <li class="list-group-item" style="border-radius:  5px;">


                    <table>

                      <tr>
                    <td >
                       <?php foreach($usuario as $usu){  ?>
                                   <?php if($publica->idUsuario==$usu->id ) {?>

                                              <h5 style="font-weight: bold; color: teal;"><?=  $usu->nombres;  ?> <?=  $usu->apellidos;  ?> </h5>
                                         <?php } ?>
                                         <?php } ?>

   <h3 style="font-weight: bold; color: grey;"><?=  $publica->titulo;  ?> </h3>


</td>
</tr>

<table>

  <tr>
              <?php if($publica->img==""){ $publica->img=url("imagenes/FP-LX-blanco.jpg"); }  ?>

    <td><img src="<?=  url($publica->img)  ?>"  alt="User Image"  style="width:100px;height:160px;" ></td>
    <td>
      
                   <div><b>Autores: </b><?=  $publica->autores;  ?></div>   
                   <div><b>Universidad: </b>-<?=  $publica->universidad;  ?></div> 
                    <div><b>Lugar: </b>-<?=  $publica->pais;  ?></div> 
                    <div><b>Año: </b>-<?=  $publica->anio;  ?></div>

                              <?php if($publica->idTipopublicacacion == '4'){?>
                                        <div ><b >Revista: </b>-<?=  $publica->revista;  ?></div><br/>
                                        <div ><b >Volumen: </b>-<?=  $publica->volumen;  ?></div><br/>
                                                                      <div ><b >Numero: </b>-<?=  $publica->Numero;  ?></div><br/>

                               <?php } ?>
    </td>
  </tr>
</table>

                                    <textarea rows="1" cols="50" style="border: none; background: resize: none; " readonly="" ><?= $publica->resumen ?></textarea>

</br>

                                   <?php if($publica->ruta!= "") {?>

                   <a href= '<?=$rutaarchivos.$publica->ruta; ?>'  target="_blank" > <button class="btn  btn-default btn-xs">Ver</button></a>  
                   <a href="descargar_publicacion/<?=  $publica->id;   ?>"  ><button class="btn  btn-standard btn-xs">Descargar</button></a>
                                         <?php } ?>

                                                             </td>
                   <span class="text-light-blue tools pull-right" ><p style="color: grey; font-weight: bold;"> <?=  $publica->created_at->diffForHumans();  ?></p></span> 
     </tr>
<br>
   </table>                                           
</li>

                   
<br>
                                         <?php } ?>
                                         <?php } ?>

<?php        

echo str_replace('/?', '?', $publi->render() )  ;
}

else
{
?>
<br/><div class='rechazado'><label style='color:#FA206A'>...No se ha encontrado ninguna publicacion...</label>  </div> 
<?php
}
?>

         </div>
    
</div>
 <div class="col-md-4">


        <div class="box box-default">


           <div class="box-header with-border" align="center">
                <h3  style="border-bottom: solid grey;"><b> MIS INVESTIGACIONES</b></h3>
          </div>
                  <div class="alert alert-default">
                  <h4 class="col-md-12" style=" text-align: center; border-bottom: 1px solid #66CCFF;">Inv iniciadas: <?=  $infu->count();  ?></h4>
                  <h4 class="col-md-12" style=" text-align: center; border-bottom: 1px solid #FFFF66;">Inv en curso: <?=  $incu->count();  ?></h4>
                  <h4 class="col-md-12" style=" text-align: center; border-bottom: 1px solid #CCFF33;">Inv completados: <?=  $incom->count();  ?></h4>
                  <h4 class="col-md-12" style=" text-align: center; border-bottom: 1px solid #FF0000;">Inv incompletos: <?=  $inicom->count();  ?></h4>
                  <h4 class="col-md-12" style=" text-align: center; border-bottom: 1px solid #FFFFCC;">Total de Inv: <?=  $into->count();  ?></h4>
                  </div>

<br><br><br><br><br><br>
                <div class="box-body box-profile">
                  
                  
                  <div id="notificacion_resul_fapu"></div>
                  <ul class="list-group list-group-unbordered">
                  
                  
                  <?php foreach($tiposinves as $tipo){  ?>

                  <?php foreach($investigaciones->take(4)->get() as $archivo){  ?>
                  <?php  if($archivo->idinves==$tipo->id){   ?>
                  <li class="list-group-item">

   <i style="font-weight: bold;"><h4> Titulo</i></h4> <textarea rows="1" readonly=""><?=  $archivo->titulo;  ?></textarea>
 <div><b>integrantes: </b>-<?=  $archivo->integrantes;  ?></div> 
 <div><b>Resumen: </b></div>
           <textarea rows="1" readonly="readonly"><?=  $archivo->descripcion;  ?></textarea>

                     <div><b>Fecha de culminacion de la investigacion: </b><?=  $archivo->fecha;  ?></div>
                                       

                    <?php if($archivo->idinves == '2'){?>
                                        <div ><b >Direccion: </b>-<?=  $archivo->lugar;  ?></div>
                                       
                               <?php } ?>
                                <?php if($archivo->estado == '2'){?>
                                        <div ><b >Status de la investigacion: </b>-<?=  $archivo->face;  ?></div>
                                       
                               <?php } ?>
                    <?php if($archivo->ruta != ""){?>

                   <a href="<?= $rutaarchivos.$archivo->ruta;  ?>"  target="_blank"><button class="btn  btn-default btn-xs">Ver</button></a>  
                   <a href="descargar_investigacion/<?=  $archivo->id;   ?>"  ><button class="btn  btn-default btn-xs">Descargar</button></a>      
                  <?php } ?>

                         
                  <?php } ?>
                  <?php } ?>
                   

                   <?php } ?>

                   </li>
<a href="javascript:void(0);" onclick="cargarlistado(5,1);">Ver mas...</a>

                </div><!-- /.box-body -->
</div>
        <div class="box">
                  
           <div class="box-header with-border">
         <div class="box-header with-border" align="center">
                <h3  style="border-bottom: solid grey;"><b> MIS P.I.D.A</b></h3>

          </div>


                <div class="box-body box-profile">
                  
                  
                  <div id="notificacion_resul_faprd"></div>
                  <ul class="list-group list-group-unbordered">
                  
                  
                  <?php foreach($proyectos->orderBy('id', 'desc')->take(4)->get() as $archivo){  ?>
                  <li class="list-group-item">
                  
                        
 <span > <b>  Titulo: </b>-<?=  $archivo->titulo;  ?></span>
                      <span class="tools pull-right" ><a href="javascript:void(0);" onclick="borrarproyecto(<?= $archivo->id;  ?> );"  ><i class="fa fa-trash-o"></i></a></span>
                    <br/> <span><b>Objetivo: </b>-<?=  $archivo->objetivoestrategico;  ?></span>
                   
                     <br/>
                     <span><b>Año: </b>-<?=  $archivo->fecha;  ?></span>
                   <br/>
                    <?php if($archivo->ruta != ""){?>

                   <a href="<?= $rutaarchivos2.$archivo->ruta;  ?>" style="display:block;" target="_blank"><button class="btn  btn-default btn-xs" style="    font-weight: bold;">Ver archivo online</button></a>
                                                  <?php } ?>
            
                   
                  </li>

                   <?php } ?>

                   
                  </ul>
<a href="javascript:void(0);" onclick="cargarlistado(16,1);">Ver mas...</a>
                </div><!-- /.box-body -->
        </div>

        </div>


        <div class="box">


           <div class="box-header with-border">
              <div class="box-header with-border">
         <div class="box-header with-border" align="center">
                <h3  style="border-bottom: solid grey;"><b> MIS TRABAJOS</b></h3>

          </div>

                <div class="box-body box-profile">
                  
                  
                  <div id="notificacion_resul_fapu"></div>
                  <ul class="list-group list-group-unbordered">
                  
                  
                  <?php foreach($tipopublicaciones as $tipo){  ?>
                  <li class="list-group-item">
                  <i class="fa fa-file-pdf-o"></i></i><b>--<?= $tipo->titulo; ?></b> <a class="pull-right"></a>
                  
                  <?php foreach($publicaciones->orderBy('id', 'desc')->take(4)->get() as $archivo){  ?>
                  <?php  if($archivo->idTipopublicacion==$tipo->id){   ?>
                        
                   <br/> <i class="fa fa-circle-o text-yellow"></i> <span class="text-light-blue" >-<?=  $archivo->titulo;  ?></span>
                   <br/> <span><b>autores: </b>-<?=  $archivo->autores;  ?></span>    <span class="tools pull-right" ><a href="javascript:void(0);" onclick="borrarpublicacion(<?= $archivo->id;;  ?> );"  ><i class="fa fa-trash-o"></i></a></span>
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

</div>


                                  

                                           <?php } ?>

                                  <?php if(Auth::user()->tipoUsuario == '3' ) {?>
                                    <div class="row">
  <div class="container col-md-12">
<div class="box">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="imagenes/planti.png" alt="CESyC" style="width:100%; height: 406px;">
      </div>

      <div class="item">
        <img src="imagenes/Ciudad_Bolívar_Vista_Area.jpg" alt="Los Angeles" style="width:100%; height: 406px;">
        <div class="carousel-caption">
          <h3>Cesyc</h3>
          <p>El Centro de Estudios Sociales y Culturales de la Universidad Bolivariana de Venezuela conjuntamente con la acción de los núcleos académicos.</p>
        </div>
      </div>

      <div class="item">
        <img src="imagenes/ven.jpg" alt="Chicago" style="width:100%; height: 406px;">
        <div class="carousel-caption">
          <h3>Cesyc</h3>
          <p>Vienen trabajando como colectivos de investigación en áreas temáticas del ámbito social, cultural y educacional focalizando sus intenciones para consolidar la producción de saberes y conocimientos.</p>
        </div>
      </div>
    
      <div class="item">
        <img src="imagenes/puenteangosto.jpg" alt="New York" style="width:100%; height: 406px;">
        <div class="carousel-caption">
          <h3>Mas Inf</h3>
          <p>Desde una mirada del Sur y que orientados por los 5 objetivos históricos del Plan de la Patria nos permite construir caminos en la transformación socio-cultural.</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>
               <style> 
.b,.y,.v,.r,.ac{
  background-color: #AEB6BF;
  padding: 10px;
      width: 150px;
    height: 125px;
      margin: 1%;
text-align: center;
}
.re{
  padding: 10px;
  margin: 0 auto;
text-align: center;
font-size: 24px;

}
.ico{
font-size: 24px;
}

.b:hover {
    background-color: #66CCFF;
}
.y:hover {
    background-color: #FFFF66;
}
.v:hover {
    background-color: #CCFF33;
}
.r:hover {
    background-color: #FF0000;
}
.ac:hover {
    background-color: #FFFFCC;
}
</style>
 
   

 <!-- <script type="text/javascript">
    $('#hola').click(function () {    
        $tournament.val('1');
        localStorage.setItem(".tournament", $tournament.val());
    });
    
   $('#hola2').click(function () { 
        $tournament.val('2');
        localStorage.setItem(".tournament", $tournament.val());
        });
   $('#hola3').click(function () {        
        $tournament.val('3');
        localStorage.setItem(".tournament", $tournament.val());
        });
 </script> -->
<!-- <button id="hola">1</button>
<button id="hola2">2</button>
<button id="hola3">3</button> -->



                  <div class="alert alert-default col-md-6" >
                                                                              <p style="font-weight: bold; text-align: center;">Investigaciones</p>
                                                                              <br>

 <div class="col-md-5 b" style="color: black;"> <span class="glyphicon glyphicon-certificate ico"></span> <br> Investigaciones iniciadas <p class="re">  <?=  $infuco->count();  ?></p></div>

<div class="col-md-5 y" style="color: black;"> <span class="glyphicon glyphicon-pencil ico"></span> <br> Investigaciones en curso<p class="re" ><?=  $incuco->count();  ?></p></div>

<div class="col-md-5 v" style="color: black;"><span class="glyphicon glyphicon-ok ico"></span> <br> Investigaciones completados <p class="re" ><?=  $incomco->count();  ?></p></div>

<div class="col-md-5 r" style="color: black;"><span class="glyphicon glyphicon-remove ico"></span> <br> Investigaciones incompletas <p class="re" ><?=  $inicomco->count();  ?></p></div>

<a href="javascript:void(0);" onclick="cargarlistado(5,1);"> <div class="col-md-5 ac" style="color: black;"> <span class="glyphicon glyphicon-stats ico"></span> <br>  Total de Investigacones <p class="re"><?=  $intoco->count();  ?></p></div></a>
                  </div>
                                    <div class="alert alert-default col-md-6" align="center">
                                                                              <p style="font-weight: bold;">P.I.D.A</p>
                                                                              <br>

                  <a href="javascript:void(0);" onclick="cargarlistado(6,1);" > <div class=" ac" style="color: black;"><span class="glyphicon glyphicon-stats ico"></span> <br> Total de P.I.D.A <p class="re"><?=  $pid->count();  ?></p></div></a>
                  </div>

</div> <!-- end row -->

                   <?php } ?>



    


<script>
 function cargarnucleo(){
$('#nucleo option:eq(<?= $usuarios->nucleo; ?>)').prop('selected', true);  
}

cargarnucleo();

</script>

   <script>
    autosize(document.querySelectorAll('textarea'));
  </script>