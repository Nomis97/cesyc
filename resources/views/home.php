<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistema | Panel Control</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?= asset('bootstrap/css/bootstrap.min.css') ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet"  type="text" href="css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" type="text" href="css/pe-icon-7-stroke.css">
    <!-- Theme style -->
    <link rel="stylesheet"  href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    

    <!-- jvectormap -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
        <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.css">
                <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
                <link rel="stylesheet" href="plugins/pace/themes/green/pace-theme-mac-osx.css">


    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

     <link rel="stylesheet" href="css/sistemalaravel.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif] class="hold-transition skin-blue sidebar-mini"-->
  </head>


  <body class="hold-transition skin-blue sidebar-mini" >
    <div  class="wrapper"  >

      <header class="main-header">
        <!-- Logo -->
        <a href="" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini" ><b>CSYC</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b style="font-family: '2015 Cruiser';">Cesyc</b>
          <span > 
           <?php if(Auth::user()->tipoUsuario == '3' ) {?>Coordinador<?php } ?>
           <?php if(Auth::user()->tipoUsuario == '2' ) {?>Administrador<?php } ?>              
       <?php if(Auth::user()->tipoUsuario == '1' ) {?>Investigador<?php } ?>
       </span>
            </span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

              <!-- Messages: style can be found in dropdown.less-->
            
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                                <?php if($usuario->imagenurl==""){ $usuario->imagenurl="imagenes/avatar.jpg"; }  ?>

                  <img src="<?=  $usuario->imagenurl;  ?>"  alt="User Image"  style="width:20px;height:20px;">
                  <span  class="hidden-xs" ><?=   mb_convert_encoding(mb_convert_case($usuario->nombres, MB_CASE_TITLE),"UTF-8");  ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->

                    <p align="center ">
                      <font color="black">
                      <small>Centro Social y Cultural</small>
                    </font>
                    </p>
                  </l>
                  <!-- Menu Footer-->

                  <li class="user-footer ">





                    <div class="pull-right">
                      <a href="logout" class="btn btn-danger btn-flat">Salir</a>

                                <?php if(Auth::user()->tipoUsuario == '1' || Auth::user()->tipoUsuario == '2' ) {?> 

                                            <a href="javascript:void(0);" onclick="cargarlistado(17,1);" class="btn btn-info btn-flat">Perfil</a>
<?php } ?>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
              </li>
            </ul>
          </div>
        </nav>

      </header>
      <!-- Left side column. contains the logo and sidebar -->
      
      <aside class="main-sidebar" >
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar" >
          <!-- Sidebar user panel -->
          <div class="user-panel" >
            <div class="pull-left image">
                <?php if($usuario->imagenurl==""){ $usuario->imagenurl="imagenes/avatar.jpg"; }  ?>
              <img src="<?=  $usuario->imagenurl;  ?>"  alt="User Image"  style="width:50px;height:50px;">
            </div>
            <div class="pull-left info">
              <p>Usuario: <?=   mb_convert_encoding(mb_convert_case($usuario->nombres, MB_CASE_TITLE),"UTF-8");  ?> <?=   mb_convert_encoding(mb_convert_case($usuario->apellidos, MB_CASE_TITLE),"UTF-8");  ?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->

          <ul class="sidebar-menu">
            <li class="header">MENÚ</li>

             <?php if(Auth::user()->tipoUsuario == '1' ) {?>


           <li class=" treeview" >
              <a href="javascript:void(0);" onclick="cargarlistado(1);">
                  <i class="fa fa-users"></i> <span>PRINCIPAL</span> <i></i>
              </a>
              
            </li>
                                                                                 <?php } ?>

                                          <?php if(Auth::user()->tipoUsuario == '2' ) {?>


           <li class=" treeview" >



              <a href="javascript:void(0);" onclick="cargarlistado(1);">

                  <i class="fa fa-users"></i> <span>PRINCIPAL</span> <i></i>
              </a>

            </li>
                                                       <?php } ?>

                                                                 <?php if(Auth::user()->tipoUsuario == '3' ) {?>


           <li class=" treeview" >
              <a href="javascript:void(0);" onclick="cargarlistado(1);">
                  <i class="glyphicon glyphicon-user"></i> <span>PRINCIPAL</span> <i></i>
              </a>
              
            </li>
                                                       <?php } ?>
                                                                 <?php if(Auth::user()->tipoUsuario == '3' ) {?>


           <li class=" treeview" >
              <a href="javascript:void(0);" onclick="cargarlistado(18);">
                  <i class="glyphicon glyphicon-th-list"></i> <span>MENÚ</span>
              </a>
              
            </li>
                                                       <?php } ?>
  
                              <?php if(Auth::user()->tipoUsuario == '3' ) {?>

            <li class=" treeview">
              <a href="#" >
                  <i class="fa fa-users"></i> <span >INVESTIGADORES</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">

<li class="active"><a href="javascript:void(0);" onclick="cargarformulario(1);" ><i class="fa fa-circle-o"></i>Agregar investigador </a></li>

                <li class="active"><a href="javascript:void(0);" onclick="cargarlistado(8,1);" ><i class="fa fa-circle-o"></i>Listado de investigadores</a></li>

              </ul>
            </li>  
                                           <?php } ?>

                                                  <?php if(Auth::user()->tipoUsuario == '2' ) {?>

            <li class=" treeview active">
              <a href="#" >
                  <i class="fa  fa-users"></i> <span >INVESTIGADORES</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">

<li class="active"><a href="javascript:void(0);" onclick="cargarformulario(1);" ><i class="fa fa-circle-o"></i>Agregar investigador </a></li>

                                                  <?php if(Auth::user()->nucleo == '1' ) {?>

                <li class="active"><a href="javascript:void(0);" onclick="cargarlistado(9,1);" ><i class="fa fa-circle-o"></i>Listado de investigadores</a></li>
                                           <?php } ?>
                                                 <?php if(Auth::user()->nucleo == '2' ) {?>

                <li class="active"><a href="javascript:void(0);" onclick="cargarlistado(10,1);" ><i class="fa fa-circle-o"></i>Listado de investigadores</a></li>
                                           <?php } ?>   
                                              <?php if(Auth::user()->nucleo == '3' ) {?>

                <li class="active"><a href="javascript:void(0);" onclick="cargarlistado(11,1);" ><i class="fa fa-circle-o"></i>Listado de investigadores</a></li>
                                           <?php } ?>   
                                              <?php if(Auth::user()->nucleo == '4' ) {?>

                <li class="active"><a href="javascript:void(0);" onclick="cargarlistado(12,1);" ><i class="fa fa-circle-o"></i>Listado de investigadores</a></li>
                                           <?php } ?>     
                                            <?php if(Auth::user()->nucleo == '5' ) {?>

                <li class="active"><a href="javascript:void(0);" onclick="cargarlistado(13,1);" ><i class="fa fa-circle-o"></i>Listado de investigadores</a></li>
                                           <?php } ?>   
                                              <?php if(Auth::user()->nucleo == '6' ) {?>

                <li class="active"><a href="javascript:void(0);" onclick="cargarlistado(14,1);" ><i class="fa fa-circle-o"></i>Listado de investigadores</a></li>
                                           <?php } ?>

              </ul>
            </li>  
                                           <?php } ?>

 <li class=" treeview">
              <a href="#">
                <i class="glyphicon glyphicon-book"></i> <span>INVESTIGACIONES</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <?php if(Auth::user()->tipoUsuario == '1'){?>

                <li class="active"><a href="javascript:void(0);" onclick="cargarformulario(6);"><i class="glyphicon glyphicon-menu-right"></i>Crear Investigacion</a></li>
                                                          <?php } ?>

                <li class="active"><a href="javascript:void(0);" onclick="cargarlistado(5,1);" ><i class="glyphicon glyphicon-menu-right"></i>Investigaciones publicadas</a>                </li>
                <?php if(Auth::user()->tipoUsuario == '1'){?>

                <li class="active"><a href="javascript:void(0);" onclick="cargarlistado(21,1);" ><i class="glyphicon glyphicon-menu-right"></i>Investigaciones colectivas</a></li>
                                                          <?php } ?>

              </ul>
            </li>  

         <?php if(Auth::user()->tipoUsuario == '3'){?>

 <li class=" treeview">
              <a href="#">
                <i class="glyphicon glyphicon-folder-close"></i><span>Histórico de P.I.D.A</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">

                <li class="active"><a href="javascript:void(0);" onclick="cargarlistado(6,1);" ><i class="fa fa-circle-o"></i>P.I.D.A publicados</a></li>
              </ul>
            </li>  
                                                                      <?php } ?>
                     <?php if(Auth::user()->tipoUsuario == '2'){?>

 <li class=" treeview">
              <a href="#">
                <i class="glyphicon glyphicon-folder-close"></i><span>P.I.D.A</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">

                <li class="active"><a href="javascript:void(0);" onclick="cargarlistado(6,1);" ><i class="fa fa-circle-o"></i>P.I.D.A publicados</a></li>
              </ul>
            </li>  
                                                                      <?php } ?>

                <?php if(Auth::user()->tipoUsuario == '1'){?>

 <li class=" treeview">
              <a href="#">
                <i class="glyphicon glyphicon-folder-close"></i><span>P.I.D.A</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">


                <li class="active"><a href="javascript:void(0);" onclick="cargarformulario(5);"><i class="fa fa-circle-o"></i>Subir P.I.D.A</a></li>

                <li class="active"><a href="javascript:void(0);" onclick="cargarlistado(15,1);" ><i class="fa fa-circle-o"></i>Mis P.I.D.A publicados</a></li>

                 <li class="active"><a href="javascript:void(0);" onclick="cargarlistado(16,1);" ><i class="fa fa-circle-o"></i>Seccion P.I.D.A</a></li>
              </ul>
            </li>  
                                                                      <?php } ?>

                                            <?php if(Auth::user()->tipoUsuario == '1'){?>

 <li class=" treeview">
              <a href="#">
                <i class="glyphicon glyphicon-file"></i> <span>MIS TRABAJOS</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">

                <li class="active"><a href="javascript:void(0);" onclick="cargarformulario(4);"><i class="fa fa-circle-o"></i>Crear Trabajo</a></li>

                <li class="active"><a href="javascript:void(0);" onclick="cargarlistado(2,1);" ><i class="fa fa-circle-o"></i>Mis publicaciones</a></li>
              </ul>
            </li>  
                                                                          <?php } ?>


                                                           <?php if(Auth::user()->tipoUsuario == '3'){?>


            <li class="treeview">
              <a href="#">
                <i class="fa fa-fw fa-database"></i> <span>REPORTES</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="javascript:void(0);" onclick="cargarlistado(3,1);" ><i class="fa fa-circle-o"></i> Cantidad de usuarios en nucleo </a></li>
                                <li class="active"><a href="javascript:void(0);" onclick="cargarlistado(4,1);" ><i class="fa fa-circle-o"></i> Graficas </a></li>

              </ul>
            </li>  

              <li class="treeview">
              <a href="#">
                <i class="fa fa-fw fa-envelope"></i> <span>CORREO</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="javascript:void(0);" onclick="cargarformulario(3);" ><i class="fa fa-circle-o"></i>Enviar Correo</a></li>
                
              </ul>
            </li>  


            <li class="treeview">
              <a href="#">
                <i class="fa fa-fw fa-database"></i> <span>DATOS</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="javascript:void(0);" onclick="cargarformulario(2);" ><i class="fa fa-circle-o"></i>Cargar Datos Us. </a></li>
                
              </ul>
            </li>  

                                                          <?php } ?>

          
          </ul>




        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" style="min-height:0px !important;">
        <!-- Content Header (Page header) -->
        <section class="content-header" > 
          <h1>
            
          </h1>

        </section>

         <!-- contenido capas modales -->

           <?php 
           if($usuario->tipoUsuario==1){ include('menus/submenu_admin.php'); }   
           if($usuario->tipoUsuario!=1){ include('menus/submenu_standard.php'); }  
              ?> 



        <!-- contenido principal -->
        <section class="content"  id="contenido_principal" >
        
        </section>
    
      <!-- cargador empresa -->
        <div style="display: none;" id="cargador_empresa" align="center">
            
            <br>


         <label style="color:#FFF; background-color:#ABB6BA; text-align:center">&nbsp;&nbsp;&nbsp;Espere... &nbsp;&nbsp;&nbsp;</label>

         <img src="imagenes/cargando.gif" align="middle" alt="cargador"> &nbsp;<label style="color:#ABB6BA">Realizando tarea solicitada ...</label>

          <br>
         <hr style="color:#003" width="50%">
         <br>
       </div>

  



      </div><!-- /.content-wrapper -->
     


     
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->

    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

    <script>  $("#content-wrapper").css("min-height","2000px"); </script>
   
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>

    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
            <script src="plugins/timepicker/bootstrap-timepicker.js"></script>

        <script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>

    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
 
        <script src="plugins/pace/pace.min.js"></script>


 <!-- javascript del sistema laravel -->
       <script src='js/autosize.js'></script>

   <script src="js/sistemalaravel.js"></script>
    <script src="js/highchart.js"></script>
        <script src="js/pdf.js"></script>

  <script src="js/graficas.js"></script>
<script src"js/jquery-3.2.0.min.js"></script>


   <script>cargarlistado(1);</script>


  </body>
</html>
