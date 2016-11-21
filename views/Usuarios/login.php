<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Tareas de Prog. WEB ITLA">
    <meta name="author" content="Pedro Torres">
    <link rel="icon" href="../../favicon.ico">
    <link rel="stylesheet" href="<?= base_url() ?>plantilla/css/bootstrap.min.css" >
    <link href="<?= base_url() ?>plantilla/css/signin.css" rel="stylesheet">

    <title>ViewPlayer</title>

  </head>
</style>
  <body>
    <div class="container">
        <img  class="img-responsive center-block" src="<?= base_url()?>image/lock2.1.png" alt="Imagen responsive" />
        <div class="col-md-4 col-md-offset-4">
        <div class="row text-center">
          <div class=" ">
            <h3>Bienvenidos a ViewPlayer</h3>
            <h4>- Iniciar Sesión -</h4>
          </div>
        </div>
      <form class="form-signin" method="post" autocomplete="off" action="<?php echo base_url('/Seguridad/login') ?>">
        <div class="row">
          <div class="">
            <div class="form-group input-group">
              <span class="input-group-addon">
                <i class="glyphicon glyphicon-user" aria-hidden="true"></i>
              </span>
              <input type="text" name="usuario" class="form-control" placeholder="Usuario" value=""  required="required" autofocus>
            </div>
            <div class="form-group input-group">
              <span class="input-group-addon">
                <i class="glyphicon glyphicon-lock" aria-hidden="true"></i>
              </span>
              <input type="password" name="clave" class="form-control" placeholder="Contraseña" value=""  required="required" autofocus>
            </div>
              <button type="submit" class="btn btn-block btn-success">Iniciar Sesion</button>
              <span class=" text-center help-block">¿Aun no tienes una cuenta?</span>
              <a href="<?= base_url('/Usuario')?>"class="btn btn-block btn-info" role="button">Registrar</a>
          </div>
        </div>
      </form>
    </div>
    </body>
  </div>
</html>
