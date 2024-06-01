<?php
include("menu.php");
include ("conexion.php");
$localIP=gethostbyname(getHostName());

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ayuda</title>
</head>
<body>
	<center>
		<br/><br/><br/><br/>
<h3><a href="http://<?php echo $localIP; ?>/SICIEM/ayuda/ayuda1.pdf" target="_blank">¿cómo agregar un nuevo registro mobiliario/equipo?</a></h3>
<h3><a href=""></a></h3>
<h3><a href="http://<?php echo $localIP; ?>/SICIEM/ayuda/ayuda3.pdf" target="_blank">¿Como veo la lista de mis registros?</a></h3>
<h3><a href=""></a></h3>
<h3><a href="http://<?php echo $localIP; ?>/SICIEM/ayuda/ayuda5.pdf" target="_blank">¿Que tipo de busquedas puedo hacer?</a></h3>
<h3><a href="http://<?php echo $localIP; ?>/SICIEM/ayuda/ayuda6.pdf" target="_blank">¿Como genero un codigo de barras?</a></h3>
<h3><a href="http://<?php echo $localIP; ?>/SICIEM/ayuda/ayuda7.pdf" target="_blank">¿Como agrego un nuevo usuario?</a></h3>
<h3><a href="http://<?php echo $localIP; ?>/SICIEM/ayuda/ayuda8.pdf" target="_blank">¿Como puedo ver la lista de usuarios?</a></h3>
	</center>
</body>
</html>