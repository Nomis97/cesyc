<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reporte Por Usuario</title>
<style>
 
 .col-md-12 {
    width: 100%;
} 

.box {
    position: relative;
    border-radius: 3px;
    background: #ffffff;
    border-top: 3px solid #d2d6de;
    margin-bottom: 20px;
    width: 100%;
    box-shadow: 0 1px 1px rgba(0,0,0,0.1);
    background-color: white;
}

.box-header {
    color: #444;
    display: block;
    padding: 10px;
    position: relative;
}

.box-header.with-border {
    border-bottom: 1px solid #f4f4f4;
}


.box-header .box-title {
    display: inline-block;
    font-size: 18px;
    margin: 0;
    line-height: 1;
}

.box-body {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    padding: 10px;

}


.box-footer {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    border-top: 1px solid #f4f4f4;
    padding: 10px;
    background-color: #fff;
}


.table-bordered {
    border: 1px solid #f4f4f4;
}


.table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 20px;
}

table {
    background-color: transparent;
}

 .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>tbody>tr>td, .table-bordered>tfoot>tr>td {
    border: 1px solid #f4f4f4;
}


.badge {
    display: inline-block;
    min-width: 10px;
    padding: 3px 7px;
    font-size: 12px;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    background-color: #777;
    border-radius: 10px;
}

.bg-red {
    background-color: #dd4b39 !important;
}



</style>

</head>
<body>




<div class="row">  


 <div class="col-md-12">

    <div class="col-md-6">

        <div class="box box-solid">
                    <div class="box-header with-border">
                    <p style="text-align: center; font-weight: bold; color:#839192;">INFORMACIÓN DEL INVESTIGADOR</p>

                      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                 <input type="hidden" name="id_pe" value="<?= $data->id; ?>">  
                      <div class="box-tools">

                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                      </div>
                    </div>
                    <div class="box-body ">
                      <ul class="nav nav-pills nav-stacked">
                        <li style="line-height: 25px;" ><span><i class="fa fa-circle-o text-red"></i> <label for="nombre" >Nombres:</label><span style="margin-left:15px;"><?= $data->nombres; ?></span> </span></li>
                        <li style="line-height: 25px;" ><span><i class="fa fa-circle-o text-yellow"></i> <label for="nombre" >Apellidos:</label><span style="margin-left:15px;"><?= $data->apellidos; ?></span></span></li>
                        <li style="line-height: 25px;" ><span><i class="fa fa-circle-o text-yellow"></i> <label for="nombre" >Cedula:</label><span style="margin-left:15px;"><?= $data->cedula; ?></span></span></li>
                        <li style="line-height: 25px;" ><span><i class="fa fa-circle-o text-light-blue"></i> <label for="nombre" >Nucleo:</label><span style="margin-left:15px;"><?= $data->delnucleo->nombre;  ?></span></span></li>
                        <li style="line-height: 25px;" ><span><i class="fa fa-circle-o text-red"></i> <label for="nombre" >Ciudad:</label><span style="margin-left:15px;"><?= $data->ciudad; ?></span> </span></li>
                        <li style="line-height: 25px;"><span><i class="fa fa-circle-o text-yellow"></i> <label for="nombre" >Institución:</label><span style="margin-left:15px;"><?= $data->institucion; ?></span></span></li>
                        <li style="line-height: 25px;"><span><i class="fa fa-circle-o text-light-blue"></i> <label for="nombre" >Ocupacion:</label><span style="margin-left:15px;"><?= $data->ocupacion; ?></span></span></li>
                        <li style="line-height: 25px;"><span><i class="fa fa-circle-o text-red"></i> <label for="nombre" >Tipo Usuario:</label><span style="margin-left:15px;"><?= $data->tipo($data->tipoUsuario);   ?></span> </span></li>
                        <li style="line-height: 25px;"><span><i class="fa fa-circle-o text-yellow"></i> <label for="nombre" >Email:</label><span style="margin-left:15px;"><?= $data->email; ?></span></span></li>
                        <label for="nombre" >Usuario desde:</label><span style="margin-left:15px;"><?= $data->created_at;  ?></span></span></li>
                      </ul>
                    </div>
                    <!-- /.box-body -->

          </div>


    </div >


  
 <div class="col-md-12">


        <div class="box box-solid">
                    <div class="box-header with-border">
                    
<p style="text-align: center; font-weight: bold; color:#839192;">INFORMACION CIENTIFICA</p>



                                       <div class="box-tools">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                      </div>
                    </div>

                    <div class="box-body ">
                      <ul class="nav nav-pills nav-stacked">
                        <li style="line-height: 25px;" ><span><i class="fa text-blue">1</i> <label for="nombre" >FECHA DE INGRESO UBV:</label><span style="margin-left:15px;"><?= $data->fecha1; ?></span></span></li>
                        <li style="line-height: 25px;" ><span><i class="fa  text-black">2</i> <label for="nombre" >FECHA DE INGRESO CESYC-MEMORANDO DE ACEPTACION:</label><span style="margin-left:15px;"><?= $data->fecha2; ?></span></span></li>
                        <li style="line-height: 25px;" ><span><i class="fa  text-blue">3</i> <label for="nombre" >FECHA DE CONCURSO O ÚLTIMO ASCENSO:</label><span style="margin-left:15px;"><?= $data->fecha3;  ?></span></span></li>
                        <li style="line-height: 25px;" ><span><i class="fa  text-black">4</i> <label for="nombre" >ESCALAFON:</label><span style="margin-left:15px;"><?= $data->tema1; ?></span> </span></li>
                        <li style="line-height: 25px;" ><span><i class="fa  text-blue">5</i> <label for="nombre" >DEDICACIÓN:</label><span style="margin-left:15px;"><?= $data->tema2; ?></span></span></li>
                        <li style="line-height: 25px;" ><span><i class="fa  text-black">6</i> <label for="nombre" >AREA ACADEMICA:</label><span style="margin-left:15px;"><?= $data->tema3; ?></span></span></li>
                        <li style="line-height: 25px;" ><span><i class="fa  text-blue">7</i> <label for="nombre" >UNIDADES CURRICULARES:</label> </span></li> <textarea rows="5" cols="50" readonly="readonly" style="margin-left:15px; resize: none; border:none;"><?= $data->tema4; ?></textarea>
                        <li style="line-height: 25px;" ><span><i class="fa  text-black">8</i> <label for="nombre" >DEPENDENCIAS ACADÉMICAS (PFG):</label><span style="margin-left:15px;"><?= $data->tema5;   ?></span> </span></li>
                        <li style="line-height: 25px;" ><span><i class="fa  text-blue">9</i> <label for="nombre" >HORAS ACADÉMICAS:</label><span style="margin-left:15px;"><?= $data->tema6; ?></span></span></li>
                        <li style="line-height: 25px;" ><span><i class="fa  text-black">10</i> <label for="nombre" >PROYECTOS SOCIOS PRODUCTIVOS:</label><span style="margin-left:15px;"><?= $data->tema7; ?></span></span></li>
                        <li style="line-height: 25px;" ><span><i class="fa  text-blue">11</i> <label for="nombre" >PROYECTO COMUNITARIO (UBIP) UNIDAD:</label><span style="margin-left:15px;"><?= $data->tema8; ?></span></span></li>
                        <li style="line-height: 25px;" ><span><i class="fa  text-black">12</i> <label for="nombre" >PROYECTOS DE GESTION ACADEMICAS:</label><span style="margin-left:15px;"><?= $data->tema9; ?></span></span></li>
                        <li style="line-height: 25px;" ><span><i class="fa  text-blue">13</i> <label for="nombre" >PROYECTOS FONACIT FINANCIADO/NO FINANCIADO:</label><span style="margin-left:15px;"><?= $data->tema10; ?></span></span></li>
                        <li style="line-height: 25px;" ><span><i class="fa  text-black">14</i> <label for="nombre" >CONDICION LABORAL:</label><span style="margin-left:15px;"><?= $data->tema11; ?></span></span></li>
                        <li style="line-height: 25px;" ><span><i class="fa  text-blue">15</i> <label for="nombre" >ENTREGO EL CURRÍCULO A T/H-2016:</label><span style="margin-left:15px;"><?= $data->tema12; ?></span></span></li>
                        <li style="line-height: 25px;" ><span><i class="fa  text-black">16</i> <label for="nombre" >HORAS EN EL PFA- FORMACION AVANZADAS Y POSGRADO:</label><span style="margin-left:15px;"><?= $data->tema13; ?></span></span></li>
                        <li style="line-height: 25px;" ><span><i class="fa  text-blue">17</i> <label for="nombre" >PIDA PRESENTACIÓN DE AVANCES 2016 I y II:</label><span style="margin-left:15px;"><?= $data->tema14; ?></span></span></li>
                        <li style="line-height: 25px;" ><span><i class="fa  text-black">18</i> <label for="nombre" >TRABAJADOR ACADÉMICO EN SOLICITUD U TRAMITE DE AÑO SABATICO/PERMISO NO REMUNERADO ANUAL/JUBILACIÓN/EXCEDENCIA:</label><span style="margin-left:15px;"><?= $data->tema15; ?></span></span></li>
                        <li style="line-height: 25px;" ><span><i class="fa text-blue">19</i> <label for="nombre" >Linea De Investigacion:</label></span></span></li><textarea rows="5" cols="50" readonly="readonly" style="margin-left:15px; resize: none; border: 0;"><?= $data->tema16; ?></textarea>

                      </ul>
                    </div>
                    <!-- /.box-body  -->

          </div>





    </div >


</div> <!-- end row -->


<!--Admin-->



</body>
</html>
