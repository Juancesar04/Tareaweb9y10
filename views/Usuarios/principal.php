<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Registrar Nuevo Usuario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= base_url() ?>plantilla/css/bootstrap.min.css" >
  </head>
<style type="text/css">
  body {
        background-image:url("<?= base_url() ?>image/pexels-photo-new.jpg");
        background-repeat: no-repeat;
        background-position: center center;
        background-attachment: fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        padding-top: 20px;
 }
</style>
  <body>
    <div class="container">
        <img  class="img-responsive center-block" src="<?= base_url()?>image/new_user1.png" alt="Imagen responsive" />
        <div class="col-md-4 col-md-offset-4">
        <div class="row text-center">
          <div class=" ">
            <font color = '#EEEEEE'><h3>Bienvenidos a ViewPlayer</h3></font>
            <span color = '#BDBDBD' class=" text-center help-block">- Registrate -</span>
          </div>
        </div>
        <form method="post" autocomplete="off" action="<?php echo base_url('/Usuario/guardar') ?>">
        <div class="row">
          <div class="">
            <div class="form-group input-group">
              <span class="input-group-addon">
                <i class="glyphicon glyphicon-user" aria-hidden="true"></i>
              </span>
              <input type="text" name="usuario" class="form-control" placeholder="Usuario" value="" required>
            </div>
            <div class="form-group input-group">
              <span class="input-group-addon">
                <i class="glyphicon glyphicon-lock" aria-hidden="true"></i>
              </span>
              <input type="password" name="clave" placeholder="Contraseña" class="form-control" value="" required>
            </div>
            <div class="form-group input-group">
              <span class="input-group-addon">
                <i class="glyphicon glyphicon-globe" aria-hidden="true"></i>
              </span>
              <input type="text" name="nombre" placeholder="Nombre" class="form-control" value="" required>
            </div>
            <div class="form-group input-group">
              <span class="input-group-addon">
                <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
              </span>
              <input type="email" name="correo" placeholder="Correo" class="form-control" value="" required >
            </div>
            <button type="submit" class="btn btn-block btn-success">Registrar</button>
              <span class=" text-center help-block">¿Aun no tienes una cuenta?</span>
              <a href="<?= base_url('/Seguridad')?>"class="btn btn-block btn-info" role="button">Iniciar Sesión</a>
          </div>
        </div>
      </form>
    </div>
    </body>
  </div>
</html>