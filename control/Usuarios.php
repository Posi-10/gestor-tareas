<?php
  class Usuarios{
    private object $conexion;
    private string $host = 'localhost';
    private string $usuario = 'root';
    private string $password = '';
    private string $db = 'gestor_tareas';

    public function __construct(){ // definicion de un meto contructor 
      $this->conexion = new PDO("mysql:host=$this->host;dbname=$this->db", $this->usuario, $this->password);
    }

    public function inserart(array $datos){
      $query = "INSERT INTO usuarios(nombre, paterno, materno, sexo, nacimiento, email, pas) value(:nombre, :paterno, :materno, :sexo, :nacimiento, :email, :pas)";
      $stmt = $this->conexion->prepare($query);
      $stmt->bindParam(':nombre', $datos['nombre']);
      $stmt->bindParam(':paterno', $datos['paterno']);
      $stmt->bindParam(':materno', $datos['materno']);
      $stmt->bindParam(':sexo', $datos['sexo']);
      $stmt->bindParam(':nacimiento', $datos['nacimiento']);
      $stmt->bindParam(':email', $datos['correo']);
      $stmt->bindParam(':pas', $datos['pass']);
      $stmt->execute();
      /*$query = null;
      $this->conexion = null;*/
      unset($this->conexion);
      return $stmt;
    }
  }
?>