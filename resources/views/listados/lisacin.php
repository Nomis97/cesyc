
<h1 align="center" >INVESTIGADORES ACTIVOS</h1>
<table width="100%" width="100%" >

        <thead >
            <tr>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Cedula</th>
                <th>Telefonos</th>
                <th>Núcleo</th>
                <th>Contiene</th>

                         </tr>
      </thead>

        

<?php foreach ($usuarios as $usu) { ?>


 <tr>
    <td ><?= $usu->nombres;  ?></a></td>
        <td><?= $usu->apellidos;  ?></td>

        <td><?= $usu->cedula;  ?></td>
    <td><?= $usu->telefono;  ?></td>

            <?php foreach($nucleos as $nucleo){   ?>
            <?php if($nucleo->id==$usu->nucleo){   ?>
    <td><?= $nucleo->nombre;  ?></td>
<?php }?>
<?php }?>

    <td style="background: #abb2b9;"><?= count($usu->investigaciones);  ?> Investigaciones</td>

    </tr>

        <?php } ?>



        </table>

