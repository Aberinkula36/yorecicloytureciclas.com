<?php

$user = "id19042775_localhost";
$password = "q~~W[xh$4}rH+^cO";
$database = "id19042775_yorecyturecdb";

#$conexion = mysqli_connect('84.88.58.69','admin','alegria2020','yorecyturecdb') or die ('No se puede conectar a la base de datos'.mysqli_error($conexion));
$conexion = mysqli_connect("localhost", $user, $password, $database) or die ('no se puede conectar a la base de datos'.mysqli_error($conexion));

?>
