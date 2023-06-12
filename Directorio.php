<?php
$servername = "localhost";
$username = "root";
$password = "";

// crear conexion
$connect = mysqli_connect($servername, $username, $password);

//check conection
if (!$connect) {
	die("Error al crear conexion: " . mysqli_connect_error());
}
//crear la base de datos

$sql = "CREATE DATABASE Directorio";
if (mysqli_query($connect, $sql)) {
	echo "Base de Datos creada Exitosamente";
}else{
	echo "Error al crear base de datos: " . mysqli_error($connect);
}
mysqli_close($connect);
?>