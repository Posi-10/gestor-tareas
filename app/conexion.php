<?php
  $usuario = 'root';
  $contraseña = '';
  $mbd = new PDO('mysql:host=localhost;dbname=gestor_tareas', $usuario, $contraseña);
  if(isset($mbd)){
    echo 'yes';
  }else{
    echo 'no';
  }
?>