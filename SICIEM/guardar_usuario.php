<?php
include("conexion.php");

$localIP=getHostByName(getHostName());

$nombre_completo = $_POST['nombre_completo'];
$usuario = $_POST['usuario'];
$password1 = md5($_POST['password1']);
$password2 = md5($_POST['password2']);


if ($password1 == $password2) {
$guardar_usuario = mysqli_query ($conexion, "INSERT INTO usuarios 
											(nombre_completo,
										 	usuario,
										 	password)
										 	VALUES
										 	('$nombre_completo',
										 		'$usuario',
										 		'$password1')
										 	");
echo "<script>
				alert('Se ha guardado el registro con exito');
				window.location = 'http://".$localIP."/SICIEM/lista_usuarios.php'
	</script>";

}else{
	echo "<script>
				alert('Las contraseñas ingresadas no coinciden');
				window.location = 'http://".$localIP."/SICIEM/agregar_usuario.php'
	</script>";
}
?>