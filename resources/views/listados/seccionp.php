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

                           <div class="form-group col-xs-12">

      <div class="box box-primary">
                        
               <div class="box-body ">
                                       <a href="crear_pida/1/<?= $usuario->id; ?>" target="_blank" value="<?= $usuario->id; ?>"> <button  class="btn  btn-default btn-xs" style="    font-weight: bold;"  > Visualizar en PDF</button></a></span>                                  
<a href="crear_pida/2/<?= $usuario->id; ?>" target="_blank" value="<?= $usuario->id; ?>"> <button  class="btn  btn-default btn-xs" style="    font-weight: bold;"  > Descargar en PDF</button></a></span>
<label for="titulo"></label>
          <table align="center">
            <tr >
              <td style=" color: #0099ff; font-size: x-large; font-weight: bold;"><?= $usuario->titulo ?></td>
            </tr>
          </table>
 <div class="col-xs-12">

<p style="text-align: center; border-width: 1px; border-style: solid; background: #66cccc; font-weight: bold;" >Datos Personales</p>


          <table class="ta" align="center">
            <tr class="tr">
              <td class="tda" >Nombres y Apellidos:<p><?= $usuario->nya ?></p></td><td class="tda">Cedula: <p><?= Auth::user()->cedula ?></p></td><td class="tda">Email:<p><?= Auth::user()->email ?> </p></td><td class="tda">Telefono: <p><?= Auth::user()->telefono ?></p></td>
            </tr>
          </table>
  <table class="ta" >
            <tr class="tr">
              <td class="td" style="background: #66cccc;">Escalafón/ Dedicación: <p style="font-weight: normal;"><span style="width: 500px; background: #66cccc;" rows="1" readonly=""><?= $usuario->esde ?></span></p></td>

              <td class="td" style="background: #66cccc;">Área académica de inscripción:<p style="  font-weight: normal;"><span style="width: 500px; background: #66cccc; " rows="1" readonly><?= $usuario->aai ?></span></p></td>  
            </tr>
          </table>

            <table class="ta" >
            <tr class="tr">
<?php    foreach($pf as $pfg){  ?>
<?php if($pfg->id==$usuario->pfg){ ?>    
             <td class="td">Pfg: <p style="font-weight: normal;"><span style="width: 500px;" rows="1" readonly=""><?= $pfg->nombre ?></span></p></td>
                                   <?php } ?>
                <?php } ?>

                                
                                <?php foreach($nucle as $nucleo){  ?>
                                <?php if($usuario->nucleo==$nucleo->id){  ?>
                <td class="td">Nucleo Academico:<p style="font-weight: normal;"><span style="width: 500px;" rows="1" readonly=""><?= $nucleo->nombre;  ?></span></p></td>
                <?php } ?>
                <?php } ?>
            </tr>
          </table>

            <table class="ta" >
            <tr class="tr">
              <td class="td" style="background: #66cccc; width: 1000px;">Objetivo Estratégico:<p style="font-weight: normal; "><textarea rows="1" readonly="readonly" style=" background: #66cccc; width: 900px;"><?= $usuario->objetivoestrategico ?></textarea></p></td>
            </tr>
          </table>


            <table class="ta" >
            <tr class="tr">
              <td class="td">Vinculacion:<p style="font-weight: normal;"><textarea style="width: 900px;" readonly="" rows="1"><?=  $usuario->vinculacion ?></textarea></p></td>
            </tr>
            <tr class="tr">
          </table>
<?php foreach($obj as $usuari){ ?>
  <?php  if($usuario->id==$usuari->idpro){   ?>
      <table class="ta" >

            <tr class="tr">

              <td class="td" style="background: #DEDEDE;"><p style="font-weight: normal; "><textarea readonly="" rows="1" style="width: 450px; background: #DEDEDE;"><?=  $usuari->resumen ?></textarea></p></td>


              <td class="td" style="background: #DEDEDE;"><p style="font-weight: normal;"><textarea readonly="" rows="1" style="width: 450px; background: #DEDEDE;"><?=  $usuari->objetivo ?></textarea></p></td>
            </tr>

          </table>                                                                                                                                                  





                           <?php } ?>

                                <?php } ?>
                                 </div>
        
      </div>
      </div>



              <?php } ?>
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




                        <head>
