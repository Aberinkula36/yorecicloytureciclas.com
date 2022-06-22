<?php

session_start();

$email = $_POST['email'];
$contraseña = $_POST['contraseña'];
$_SESSION['email'] = $email;

#$conexion = mysqli_connect('84.88.58.69:55000','root','n9pYUxYj','myDB') or die ('no se puede conectar a la base de datos'.mysqli_error($conexion));
$user = "id19042775_localhost";
$password = "Alegria20142020!";
$database = "id19042775_yorecyturecdb";
$conexion = mysqli_connect("localhost", $user, $password, $database) or die ('no se puede conectar a la base de datos'.mysqli_error($conexion));

$consulta = "SELECT * FROM usuarios WHERE email = '$email' and password = '$contraseña'";

$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas > 0) {
		header ("location: bienvenida.php");
	}else{
		echo "Error en la autentificación";
}

mysqli_free_result($resultado);

mysqli_close($conexion);

?>