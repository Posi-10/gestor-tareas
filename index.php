<?php
  require_once "app/config.php";
?>
<!doctype html>
<html lang="es">
  <head>
    <title>Gestor Tareas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
      require_once "app/dependencias.php";
    ?>
  </head>
  <body>
    <?php
      if(isset($_GET['vistas'])){
        switch($_GET['vistas']){
          case 'home':
            break;
          default:
            break;
        }
      }else{
        
      }
    ?>
  </body>
</html>