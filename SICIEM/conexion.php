<?php
$servername = "localhost";
$database = "siciem";
$username = "3ds";
$password = "INCB2023*/qr";
//create connection
@$conexion = mysqli_connect($servername, $username, $password,$database);
if (!$conexion) {
	die("Problemas en la conexion a la base de datos".mysqli_connect_error());
}
?>