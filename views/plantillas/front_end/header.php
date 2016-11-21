<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $titulo;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Tareas de Prog. WEB ITLA">
    <meta name="author" content="Pedro Torres">
    <link rel="icon" href="/favicon.ico">
    <link rel="stylesheet" href="<?= base_url() ?>plantilla/css/bootstrap.min.css">

  </head>
<style type="text/css">
  body {
        background-image:url("<?= base_url() ?>image/img1ne.jpg");
        background-repeat: no-repeat;
        background-position: center center;
        background-attachment: fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        padding-top: 50px;
 }
</style>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-ex1-collapse" aria-expanded="false">
        <span class="sr-only">Desplegar navegación</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?= base_url('/Jugador')?>">ViewPlayer</a>
    </div>
    <div class="collapse navbar-collapse navbar-ex1-collapse" aria-expanded="false">
      <ul class="nav navbar-nav">
        <li class=""><a href="<?= base_url('/Jugador') ?>">Jugador</a></li>
        <li class=""><a href="<?= base_url('/Equipo') ?>">Equipos</a></li>
        <li class=""><a href="<?= base_url('/Calculadora') ?>">Calcular</a></li>
      </ul>
        <a class="btn btn-warning navbar-right navbar-btn" href="<?= base_url('/Seguridad/salir') ?>">Cerrar Sesión</a>
    </div>
  </div>
  </nav>
  <div class="container">
