<?php
$user = "root";
$password = "";
$database = "yorecyturecdb";
$table = "todo_list";

try {
  #$db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
  
  //$enlace = mysqli_connect("localhost", $user, $password, $database); 
  $conexion = mysqli_connect("localhost", $user, $password, $database) or die ('no se puede conectar a la base de datos'.mysqli_error($conexion));
  
  echo "<h2>TODO OK 1</h2><ol>";  
  echo "</ol>";
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}