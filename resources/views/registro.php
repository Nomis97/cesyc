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
        <p class="login-box-msg">Registro en el sistema</p>

        <form action="register" method="post">
      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">   
          
          <div class="form-group<?= $errors->has('nombres') ? ' has-error' : '' ?>">
            <label>Nombres</label>
            <input type="text" class="form-control" name="nombres" value="<?= old('nombres') ?>">
                        <?php if($errors->has('nombres')){   ?>
                        <span class="help-block">
                        <strong><?= $errors->first('nombres') ?></strong>
                        </span>
                        <?php }?>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>

<div class="form-group<?= $errors->has('apellidos') ? ' has-error' : '' ?>">
            <label>Apellidos</label>
            <input type="text" class="form-control" name="apellidos" value="<?= old('apellidos') ?>">
                                    <?php if($errors->has('apellidos')){   ?>
                        <span class="help-block">
                        <strong><?= $errors->first('apellidos') ?></strong>
                        </span>
                        <?php }?>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>

          <div class="form-group<?= $errors->has('cedula') ? ' has-error' : '' ?>">
            <label>Cedula</label>
            <input type="text" class="form-control" name="cedula" value="<?= old('cedula') ?>">
                                    <?php if($errors->has('cedula')){   ?>
                        <span class="help-block">
                        <strong><?= $errors->first('cedula') ?></strong>
                        </span>
                        <?php }?>
            <span class="glyphicon glyphicon-barcode form-control-feedback"></span>
          </div>


           <div class="form-group<?= $errors->has('email') ? ' has-error' : '' ?>">
             <label>Correo</label>
            <input type="email" class="form-control" name="email" value="<?= old('email') ?>">
                                    <?php if($errors->has('cedula')){   ?>
                        <span class="help-block">
                        <strong><?= $errors->first('cedula') ?></strong>
                        </span>
                        <?php }?>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>


         <div class="form-group has-feedback">
                      <label for="nucleo">Seleccione su Nucleo</label>
                      
                     
                       <select name="nucleo" class="form-control">

        <option value="1">Manuel Piar</option>
        <option value="2">Jackelyn Rodryguez</option>
        <option value="3">Roraima Meru</option>
        <option value="4">NATIL</option>
        <option value="5">Horacio Ducharm</option>
                     
                      </select>
                 
                    
</div>

          <div class="form-group<?= $errors->has('password') ? ' has-error' : '' ?>">
                <label>Constraseña</label>
            <input type="password" class="form-control" name="password">
                                    <?php if($errors->has('password')){   ?>
                        <span class="help-block">
                        <strong><?= $errors->first('password') ?></strong>
                        </span>
                        <?php }?>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="form-group<?= $errors->has('password_confirmation') ? ' has-error' : '' ?>">
                <label>Repetir Constraseña</label>
            <input type="password" class="form-control" name="password_confirmation">
                                    <?php if($errors->has('password_confirmation')){   ?>
                        <span class="help-block">
                        <strong><?= $errors->first('password_confirmation') ?></strong>
                        </span>
                        <?php }?>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
<div class="form-group has-feedback">
            <input type="hidden" class="form-control" name="tipousuario" value="1" >
          </div>

          <div class="row">
            

            
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>

            </div>
            <div class="col-xs-2">
              <a href="login"> Regresar</a>

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
