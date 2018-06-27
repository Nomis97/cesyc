<style type="text/css">

   td.tda{
width: 220px;
    text-align: center;
    font: bold 12px arial, sans-serif;
}
   td.td{
background: #66cccc;
 width: 510px;
 font: 12px arial, sans-serif;

}
   td.ta{
 width: 510px;
 font: 12px arial, sans-serif;

}
img.im{
position: absolute;
    top: 30px;
    left: 100px;

}
p.ex{
    width: 1000px;
    font-weight: normal;
    font: 12px arial, sans-serif;
    text-align: justify;
}
p{
font: 12px arial, sans-serif;
}

 </style>
<div class="row">
	<div class=" form-group col-xs-11">
  <div class=" form-group col-xs-6 col-md-2">
      <img class="im" src="imagenes/ubv.png" alt="">
  </div>
            <input type="hidden" name="idre" value="<?= $rei->id; ?>">            

                                         <br>
<div class="form-group col-md-12">
 <p align="center" >
    UNIVERSIDAD BOLIVARIANA DE VENEZUELA <br>
    EJEGEOPOLITICO REGIONAL KEREPAKUPAI VENÁ <br>
    NÚCLEO ACADÉMICO "TECNOLOGIAS DE INFORMACIÓN LIBRES" <br>
    PFG INFORMÁTICA PARA LA GESTIÓN SOCIAL
</p>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br>
<div class="form-group col-md-11" style="left:  20px;">
	<p ><b>El Titulo de esta Investigación es:</b> <?= $rei->titulo; ?></p>
	                                <?php foreach($linea as $line){  ?>
	<?php if ($line->id==$rei->lineas) { ?>
		<p ><b>Esta Investigación pertenece a la linea:</b> <?= $line->nombrel; ?></p>
                <?php } ?>
                <?php } ?>
		<p ><b>Resumen/Descripción:</b> <?= $rei->descripcion; ?></p>
		<p ><b>Objetivo:</b> <?= $rei->objetivo; ?></p>

			<?php if ($rei->forma==2) { ?>
		<p ><b>Investigadores participantes:</b> 
<?php foreach($usuariosn as $tipo){  ?>
                     <?php  if($rei->idUsuario==$tipo->id){   ?>
                    <?=  mb_convert_encoding(mb_convert_case($tipo->nombres, MB_CASE_TITLE),"UTF-8");  ?>, 
                    <?=  mb_convert_encoding(mb_convert_case($tipo->apellidos, MB_CASE_TITLE),"UTF-8");  ?>.
                                <?php } ?>

<?php  if($rei->integrante1==$tipo->id){   ?>
<?=  mb_convert_encoding(mb_convert_case($tipo->nombres, MB_CASE_TITLE),"UTF-8");  ?>,
                    <?=  mb_convert_encoding(mb_convert_case($tipo->apellidos, MB_CASE_TITLE),"UTF-8");  ?>.

                                <?php } ?>

 <?php  if($rei->integrante2==$tipo->id){   ?>

 <?=  mb_convert_encoding(mb_convert_case($tipo->nombres, MB_CASE_TITLE),"UTF-8");  ?>,
                    <?=  mb_convert_encoding(mb_convert_case($tipo->apellidos, MB_CASE_TITLE),"UTF-8");  ?>.

                               <?php } ?>
                                <?php  if($rei->integrante3==$tipo->id){   ?>
 <?=  mb_convert_encoding(mb_convert_case($tipo->nombres, MB_CASE_TITLE),"UTF-8");  ?>,
                    <?=  mb_convert_encoding(mb_convert_case($tipo->apellidos, MB_CASE_TITLE),"UTF-8");  ?>.

                               <?php } ?>
                                <?php  if($rei->integrante4==$tipo->id){   ?>
 <?=  mb_convert_encoding(mb_convert_case($tipo->nombres, MB_CASE_TITLE),"UTF-8");  ?>,
                    <?=  mb_convert_encoding(mb_convert_case($tipo->apellidos, MB_CASE_TITLE),"UTF-8");  ?>.

                               <?php } ?>
                                <?php  if($rei->integrante5==$tipo->id){   ?>
 <?=  mb_convert_encoding(mb_convert_case($tipo->nombres, MB_CASE_TITLE),"UTF-8");  ?>,
                     <?=  mb_convert_encoding(mb_convert_case($tipo->apellidos, MB_CASE_TITLE),"UTF-8");  ?>.
                         
  <?php } ?>
                                <?php  if($rei->integrante6==$tipo->id){   ?>
 <?=  mb_convert_encoding(mb_convert_case($tipo->nombres, MB_CASE_TITLE),"UTF-8");  ?>,
                    <?=  mb_convert_encoding(mb_convert_case($tipo->apellidos, MB_CASE_TITLE),"UTF-8");  ?>.

                               <?php } ?>
                               <?php } ?>
		</p>
<?php } ?>
		<h4><b>Fases de la investigación</b></h4>

		<p ><b>Fase 1 Situacional (Inicial):</b> <?= $rei->face; ?></p>
		<p ><b>Fase 2 Diseño:</b> <?= $rei->face2; ?></p>
		<p ><b>Fase 3 Desarrollo:</b> <?= $rei->face3; ?></p>
		<p ><b>Fase 4 Final (Resultado)-Prueba:</b> <?= $rei->face4; ?></p>
<?php  if($rei->forma==2){   ?>

<h3>Cambios</h3>
                               <?php } ?>

<?php foreach($resi as $residuo){  ?>
<?php  if($rei->id==$residuo->idinves){   ?>

    <p ><b><?= $residuo->fecha; ?>:</b> 

<?php foreach($usuariosn as $usuario){  ?>
<?php  if($usuario->id==$residuo->integrante){   ?>
     El integrante <?= $usuario->nombres; ?>, fue eliminado.
                               <?php } ?>
                               <?php } ?>
                               <?php  if($residuo->integrante==0 || $residuo->integrante!=0){   ?>
    La fecha se cambio a: <b><?= $residuo->descripcion; ?></b>.
                                   <?php } ?>
    </p>

                               <?php } ?>
                               <?php } ?>

</div>
</div> 

</div>

