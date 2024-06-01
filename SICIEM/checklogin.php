<?php  
session_start();

include ('conexion.php');
$usuario = $_POST['usuario'];
$password =md5($_POST['password']);
$consulta = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' AND password = '$password'");
$usuario = mysqli_fetch_array($consulta);
$count = mysqli_num_rows($consulta);
echo $count;

if ($count == 1) {
	$_SESSION['usuario'] = $usuario['usuario'];
	$_SESSION['nombre_completo'] = $usuario ['nombre_completo'];
	$_SESSION['id_usuario'] = $usuario ['id_usuario'];
	$_SESSION['check'] == true;

	header('Location:principal.php');
	// code...
}else{
	header('Location:login.php');
}

?>