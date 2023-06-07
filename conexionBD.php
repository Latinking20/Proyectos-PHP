<?php 
echo "Digite el nombre del servidor";
fscanf(STDIN, "%s", $servername);

echo "Digite en nombre del usuario";
fscanf(STDIN, "%s", $username);

echo "Digite la contraseña";
fscanf(STDIN, "%s", $password);

echo "Digite la base de datos";
fscanf(STDIN, "%s", $bd);


 //create conection

 $conexion = mysqli_connect($servername, $username, $password, $bd);

 //check conection

 if(!$conexion){
 	die("conexion fallida " . mysqli_connect_error());
 }
   //script sql

 $sql = "CREATE TABLE Cliente (
  id_cliente int (6),
  nombre_cliente varchar (20),
  apellido_cliente varchar (20),
  direccion_cliente varchar (30),
  correo_cliente varchar (20),
  celular_cliente int (9) 
)";

 if ($conexion->query($sql) == TRUE)  {
 	echo "TABLA CREADA CON EXITO";
 }else{
 	echo "ERROR AL CREAR TABLA: " .$conexion->error;
 }
 
?>