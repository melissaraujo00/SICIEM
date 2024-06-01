<?php
include("conexion.php");
$localIP=getHostByName(getHostName());

$consulta = "DELETE FROM usuarios WHERE id_usuario=".$_GET['id_usuario'];

$resultado = mysqli_query($conexion, $consulta);

header("Location:http://".$localIP."/siciem/lista_usuarios.php");


?>