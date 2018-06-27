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
textarea{

  resize: none;
  border: none;

}
p.ex{
    width: 1025px;
    font-weight: normal;
    font: 12px arial, sans-serif;
    text-align: justify;
}
p.des{
    width: 500px;
    font-weight: normal;
    font: 12px arial, sans-serif;
    text-align: justify;
}

 </style>
 <p align="center" style="font: 12px arial, sans-serif;">
    UNIVERSIDAD BOLIVARIANA DE VENEZUELA <br>
    EJEGEOPOLITICO REGIONAL KEREPAKUPAI VENÁ <br>
    NÚCLEO ACADÉMICO "TECNOLOGIAS DE INFORMACIÓN LIBRES" <br>
    PFG INFORMÁTICA PARA LA GESTIÓN SOCIAL

<p>                                                     

              <p align="center" style=" font-style: oblique;"><?= $usuario->titulo ?></p>



          <table class="ta" align="center">
            <tr class="tr">
              <td class="tda" ><b> <p>Nombres y Apellidos: <br> <?= $usuario->nya ?></p></td><td class="tda"> <p>Cedula:<br> <?= Auth::user()->cedula ?></p></td><td class="tda"><p> Email:<br> <?= Auth::user()->email ?> </p></td><td class="tda"><p>Telefono:<br> <?= Auth::user()->telefono ?></p></b></td>
            </tr>
          </table>
  <table class="ta" >
            <tr class="tr">
              <td class="td" ><p style="font-weight: normal;"><b> Escalafón/Dedicación:</b><br> <?= $usuario->esde ?></p></td>

              <td class="td" style="background: #66cccc;"><p> <b> Área académica de inscripción:</b> <?= $usuario->aai ?></p></td>  
            </tr>
          </table>

            <table class="ta" >
            <tr class="tr">
                                        <?php    foreach($pf as $pfg){  ?>

<?php if($pfg->id==$usuario->pfg){ ?>                    
             <td class="ta"><p style="font-weight: normal;"> <b> Pfg:</b><br> <?= $pfg->nombre ?></p></td>
                                            <?php } ?>
                <?php } ?>
    
                                <?php foreach($nucle as $nucleo){  ?>
                                <?php if($usuario->nucleo==$nucleo->id){  ?>
                <td class="ta"><p style="font-weight: normal;"> <b> Nucleo Academico:</b><br> <?= $nucleo->nombre;  ?></p></td>
                <?php } ?>
                <?php } ?>
            </tr>
          </table>

            <table class="col-xs-12" >
            <tr class="tr">
              <td class="td" style="background: #66cccc;"><p class="ex"><span rows="1" readonly="readonly" style=" background: #66cccc;"><b> Objetivo Estratégico: </b><?= $usuario->objetivoestrategico ?></span></p></td>
            </tr>
          </table>


            <table>
            <tr>
              <td><p class="ex"><b> Vinculacion:</b> <?=  $usuario->vinculacion ?></p></td>
            </tr>
          </table>


<?php foreach($inv as $usuari){ ?>
  <?php  if($usuario->id==$usuari->idpro){   ?>
      <table class="ta" style="border-spacing: 0;">

            <tr class="tr">

              <td class="td" style="background: white; border: 0.001px solid black; border-right: 0; border-left: 0;"><p class="des"><?=  $usuari->resumen ?></p></td>


              <td class="td" style="background: white; border: 0.6px solid black; border-right: 0;"><p class="des"><?=  $usuari->objetivo ?></p></td>
            </tr>

          </table>                                                                                                                                                  





                           <?php } ?>





              <?php } ?>





