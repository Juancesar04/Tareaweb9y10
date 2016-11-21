<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Calculadora</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Tareas de Prog. WEB ITLA">
    <meta name="author" content="Pedro Torres">
    <link rel="shortcut icon" type="image/png" href="<?= base_url() ?>image/calculatoricon.png">
    <link rel="stylesheet" href="<?= base_url() ?>plantilla/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>plantilla/css/allstyle.css">
    <link rel="stylesheet" href="<?= base_url() ?>plantilla/css/simple-sidebar.css">
  </head>
  <body background="<?= base_url()?>image/atomic_wallpaper.png">
    <div id="wrapper" class="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-ex1-collapse" aria-expanded="false">
            <span class="sr-only">Desplegar navegación</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?= base_url('/Calculadora')?>">ViewPlayer</a>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse" aria-expanded="false">
          <ul class="nav navbar-nav">
          <li class=""><a href="<?= base_url('/Calculadora') ?>">Calcular</a></li>
          </ul>
          <a class="btn btn-warning navbar-right  navbar-btn" href="<?= base_url('/Seguridad/salir') ?>">Cerrar Sesión</a>
        </div>
      </div>
    </nav>
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
      <ul class="sidebar-nav text-center">
        <li class="text-center">
          <font color="#BDBDBD"><h3 class="text-center">Mi historial</h3></font>
          <a href="#" style="color: #03A9F4;" data-toggle="collapse" data-target="#demos">Cargar</a>
            <div id="demos" class="collapse">
              <a  style="color: #FF9800;" href="<?php echo base_url('Calculadora/limpiar')?>">Limpiar</a>
                <?php
                  foreach ($calculo as $cal) {
                    echo "<a>{$cal->historial}<br></a>";
                  }
                  ?>
            </div>
        </li>
        <li class="text-center">
          <font color="#BDBDBD"><h3 class="text-center">Historial Global</h3></font>
          <a href="#" style="color: #03A9F4;" data-toggle="collapse" data-target="#demo">Cargar</a>
            <div id="demo" class="collapse">
              <?php
                foreach ($calculoGlobal as $calGlobal){
                  echo "<a>
                    {$calGlobal->ip}<br>
                    {$calGlobal->historial}<br>
                    </a>";
                  }
                ?>
            </div>
        </li>
      </ul>
    </div>
      <div id="page-content-wrapper">
        <div class="container">
          <div class="cuerpo">
            <form method="post" action="<?php echo base_url('/Calculadora/calculate')?>" id="fo" name="fo">
              <table class="table editTable">
                <tr class="text-info text">
                  <td colspan="3"><h4>Calculadora Estándar</h4></td>
                  <td>
                    <a href="#menu-toggle" class="btn btn-active" id="menu-toggle" title="Ver Historial">
                      <img src="<?php echo base_url('image/history-clock-button.png')?>">
                    </a>
                </td>
                </tr>
              <tr>
                <label for="display" class="hidden">display only</label>
                <td colspan='4'><input type="text"  name="entrada" id="display" placeholder="0" onKeyPress="return soloNumeros(event)" class="form-control" value="<?php echo (isset($resultado))?$resultado:''; ?>"/></td>
                <input type="hidden" name="raizz" id="raizz" value="" >
              </tr>
              <tr>
                <td><button type="button" onclick="reset()" class="btn btn-active">CE</button></td>
                <td><button type="button" onclick="reset()" class="btn btn-active ">C</button></td>
                <td><button type="button" onclick="quitarItem()" class="btn btn-active "><img src="<?php echo base_url('image/backspace-arrow-black.png')?>"></button></td>
                <td><button type="button" onclick="comprobar('/')" class="btn btn-active">÷</button></td>
              </tr>
              <tr>
                <td><button type="button" onclick="agregar('7')" class="btn btn-active ">7</button></td>
                <td><button type="button" onclick="agregar('8')" class="btn btn-active ">8</button></td>
                <td><button type="button" onclick="agregar('9')" class="btn btn-active">9</button></td>
                <td><button type="button" onclick="comprobar('*')" class="btn btn-active ">x</button></td>
              </tr>
              <tr>
                <td><button type="button" onclick="agregar('4')" class="btn btn-active ">4</button></td>
                <td><button type="button" onclick="agregar('5')" class="btn btn-active ">5</button></td>
                <td><button type="button" onclick="agregar('6')" class="btn btn-active ">6</button></td>
                <td><button type="button" onclick="comprobar('-')" class="btn btn-active ">-</button></td>
              </tr>
              <tr>
                <td><button type="button" onclick="agregar('1')" class="btn btn-active ">1</button></td>
                <td><button type="button" onclick="agregar('2')" class="btn btn-active ">2</button></td>
                <td><button type="button" onclick="agregar('3')" class="btn btn-active ">3</button></td>
                <td><button type="button" onclick="comprobar('+')" class="btn btn-active ">+</button></td>
              </tr>
              <tr>
                <td><button type="submit" class="btn btn-active" onclick="raizez()" >√</button></td>
                <td><button type="button" onclick="agregar('0')" class="btn btn-active ">0</button></td>
                <td><button type="button" onclick="comprobar('.')" class="btn btn-active ">.</button></td>
                <td><button type="submit" class="btn btn-active" value="=" >=</button></td>
              </tr>
              </table>
            </form>
          </div> <!--div cuerpo-->
        </div> <!--div container-->
      </div> <!--page-content-wrapper-->
    </div> <!--div #wrapper-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type = 'text/javascript' src = "<?= base_url() ?>plantilla/js/bootstrap.min.js"></script>
    <script type = 'text/javascript' src = "<?= base_url() ?>plantilla/js/cal.js"></script>
    <script>
      $("#menu-toggle").click(function(e) {
          e.preventDefault();
          $("#wrapper").toggleClass("toggled");
      });
  </script>
  </body>
</html>
