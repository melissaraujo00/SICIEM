<?php
include("conexion.php");

$localIP=getHostByName(getHostName());

$id_usuario = $_POST['id_usuario'];
$nombre_completo = $_POST['nombre_completo'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];


$guardar_usuario = mysqli_query ($conexion, "UPDATE usuarios SET
											nombre_completo = '$nombre_completo',
										 	usuario = '$usuario',
										 	password = '$password' 
										 	WHERE id_usuario = '$id_usuario'");
echo "<script>
				alert('Se ha guardado el registro con exito');
				window.location = 'http://".$localIP."/SICIEM/lista_usuarios.php'
	</script>";


?>