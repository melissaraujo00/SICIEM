<?php
include("conexion.php");
$localIP=gethostbyname(getHostName());

$consulta = "DELETE FROM mobiliarioyequipo WHERE id_mobiliario=".$_GET['id_mobiliario'];

$resultado = mysqli_query($conexion,$consulta);

header("Location:http://".$localIP."/SICIEM/lista_mobiliario.php");
?>