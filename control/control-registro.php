<?php
  $datos = array(
    "nombre" => $_POST['nombres'],
    "paterno" => $_POST['apellido_paterno'],
    "materno" => $_POST['apellido_materno'],
    "sexo" => $_POST['sexo'],
    "nacimiento" => $_POST['fecha_nacimiento'],
    "correo" => $_POST['email'],
    "pass" => sha1($_POST['contrasenia'])
  );
  require_once 'Usuarios.php';
  $usuario = new Usuarios();
  $respuesta = $usuario->inserart($datos);
?>