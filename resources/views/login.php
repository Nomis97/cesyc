<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistema | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
 


  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="#"><b>Sistema</b>Cesyc</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">

        <p class="login-box-msg">Ingresar al sistema</p>

          <?php if (session('stado')){  ?>

    <div class="alert alert-info">

        <?= session('stado') ?>
    </div>
                               <?php } ?>
        
  <?php if (session('stado2')){  ?>

    <div class="alert alert-info">

        <?= session('stado2') ?>
    </div>
                               <?php } ?>
        <form action="login" method="post">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">   

          <div class="form-group has-feedback">
             <label>Ingrese Correo</label>

                <input type="email" class="form-control" name="email" >
                                        <?php if($errors->has('email')){   ?>
                        <span class="help-block">
                        <strong style="color: red;"><?= $errors->first('email') ?></strong>
                        </span>
                        <?php }?>
            <span class="glyphicon glyphicon-barcode form-control-feedback"></span>
          </div>

          <div class="form-group has-feedback">
                       <label>Ingrese Contraseña</label>
            <input type="password" class="form-control" name="password">
                                    <?php if($errors->has('password')){   ?>
                        <span class="help-block">
                        <strong style="color: red;"><?= $errors->first('password') ?></strong>
                        </span>
                        <?php }?>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
         
          <div class="row">
            

            
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
            </div>
                   <div class="col-xs-4">
              <button class="btn btn-standard btn-block btn-flat"><a href="registro"> Registrar</a></button>

            </div>
       <div class="col-xs-12">
             <a href="password"> Has olvidado tu contraseña?</a>
            </div>
                                         
          </div>

        </form>

     
       

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="../../plugins/iCheck/icheck.min.js"></script>
   

    <script>
      
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>


  </body>
</html>
