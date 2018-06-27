 <style type="text/css">

   td.tda{
    font-weight: bold;
width: 220px;
    text-align: center;
}
   td.td{
    font-weight: bold;
width: 750px;

}
table{
  border-collapse: separate;
  border-spacing:  10px 5px;;
}
textarea{

  resize: none;
  border: none;

}
 </style>
<?php if( count($nom) >0){ ?>
                                                          <?php foreach($nom as $usuario){  ?>



            <div class="row">  

 <div class="col-md-12">

      <div class="box box-primary">
                        
               <div class="box-body ">
                <span class="text-light-blue tools pull-right" >

                <a  onclick="mostrarficha5(<?= $usuario->id; ?>);" class="btn btn-default" href="#"><b>Editar P.I.D.A</b></a></span>

<label for="titulo"></label>
          <table align="center">
            <tr >
              <td style=" color: #0099ff; font-size: x-large; font-weight: bold;"><?= $usuario->titulo ?></td>
            </tr>
          </table>

<p style="text-align: center; border-width: 1px; border-style: solid; background: #66cccc; font-weight: bold;" >Datos Personales</p>

                          
                                                     <div class="form-group col-xs-3">
<h4 style=" font-weight: bold;" >Nombres y Apellidos </h4>


                             <p type="text" class="form-control" id="" name="" value=""><?= $nu->nombres ?> <?= $nu->apellidos ?></p>                                                                          </div> 

                           <div class="form-group col-xs-3">
<h4 style=" font-weight: bold;" >Cedula</h4>

                             <p type="text" class="form-control" id="" name="" value=""><?= $nu->cedula ?></p>                                                                             </div> 

                           <div class="form-group col-xs-3">
<h4 style=" font-weight: bold;" >Email</h4>

                             <p type="text" class="form-control" id="" name="" value=""><?= $nu->email ?></p>                                             </div> 
                                                                     <div class="form-group col-xs-3">
<h4 style=" font-weight: bold;" >Telefono</h4>

                             <p type="text" class="form-control" id="" name="" value=""><?= $nu->telefono ?></p>                                                      </div>        

                                                              <div class="form-group col-xs-6">
<h4 style=" font-weight: bold;" >Escalafón/ Dedicación</h4>

                             <p type="text" class="form-control" ><?= $usuario->esde ?></p>
                                                      </div> 

                                                        <div class="form-group col-xs-6">
<h4 style=" font-weight: bold;" >Área académica de inscripción</h4>

                             <p type="text" class="form-control" id="" name="" value=""><?= $usuario->aai ?></p>
                                                                                 </div> 

  <div class="form-group col-xs-6">
<h4 style=" font-weight: bold;" >PFG</h4>
  <?php    foreach($pf as $pfg){  ?>

<?php if($pfg->id==$usuario->pfg){ ?>

                             <p type="text" class="form-control" id="" name="" value="<?= $usuario->pfg ?>"><?= $pfg->nombre ?></p>
                                     <?php }?>
        <?php }?>

                                                                                 </div> 
                                                                                   <div class="form-group col-xs-6">
<h4 style=" font-weight: bold;" >Nucleo Academico</h4>
                                                          <?php foreach($nucle as $nucleo){  ?>

                                                                                          <?php if($usuario->nucleo==$nucleo->id){  ?>

                             <p type="text" class="form-control" id="" name="" value=""><?= $nucleo->nombre;  ?></p>
                                <?php } ?>
                                <?php } ?>

                                                                                 </div> 
                                                                                                 <div class="form-group col-xs-12">
<h5 style=" font-weight: bold;" >Objetivo Estratégico</h5>

                             <textarea readonly type="text" class="form-control" id="objetivoestrategico" name="objetivoestrategico" value="" style="background: #66cccc; "><?= $usuario->objetivoestrategico ?></textarea>
                                                                                 </div> 


  <div class="form-group col-xs-12">
<h5 style=" font-weight: bold;" >Vinculacion</h5>

                                             <textarea readonly class="form-control" rows="3" id="vinculacion"  name="vinculacion" style=" border-width: 1px; border-style: solid;   resize: none;" placeholder =""><?= $usuario->vinculacion ?></textarea></div>
                                           </br>
                                            <div class=" pull-right"> <a href="javascript:void(0);" onclick="mostrarficha6(<?= $usuario->id; ?>);" class="btn btn-default" style="font-weight: bold;">Crear Resumen y Objetivo</a></div>
  <div class="form-group col-xs-12">

<?php foreach($obj as $usuari){ ?>
  <?php  if($usuario->id==$usuari->idpro){   ?>
                         <span class="tools pull-right"><a href="javascript:void(0);" onclick="mostrarficha7(<?= $usuari->id; ?>);" ><i class="glyphicon glyphicon-pencil" title="Editar Resumen y Objetivo"></i></a></span>

                                                                               <div class="form-group col-xs-4">

                     <textarea readonly id="txtarea" class="form-control" rows="3"   id="info1"  name="info1"  style=" resize: none;" placeholder="" ><?= $usuari->resumen ?></textarea>
                       </div>

   <div class="form-group col-xs-8">
                      <textarea readonly class="form-control" rows="3"   id="inf1"  name="inf1" style=" resize: none;" placeholder="" ><?= $usuari->objetivo ?></textarea>
                    </br>



                       </div>
                                <?php } ?>
                                <?php } ?>


                                                      
                       </div>

              <?php } ?>

                                              
                </div>

              <?php        
                                   
echo str_replace('/?', '?', $nom->render() )  ;
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