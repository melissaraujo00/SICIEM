<?php 
include("conexion.php");
include("menu.php"); 
$localIP=gethostbyname(getHostName());
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Busqueda de Usuario</title>
</head>
<body>
	<center>
	<br/><br/><br/>

<table border="1" bgcolor="white" align="center">
	<tr><td colspan= "13"><center><h2>Busqueda de Usuario INCB<br/>
	<img src="imagenes/busqueda.ico" width="50" height="50"></h2></center>
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"> 
			<p>ingrese el nombre:</p>
			<input type="text" name="usuario" value="<?php echo @$_POST['usuario']?>" required autofocus>
			<input type="submit" name="boton_buscar" value="Buscar">
			</form>
		</td></tr>
	<?php
		if (isset($_POST['boton_buscar'])) {
	?>
	<?php
	$color1 = "#5D8DE1";
	$color2 = "#B6CFED";
	

	$color = $color1;
	$contador = 0;
	$usuario = $_POST['usuario'];
	$consulta_mobiliario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario LIKE '%$usuario%'
		OR usuario LIKE '%$usuario%'
		OR CONCAT(usuario,'', usuario) LIKE '%$usuario'");
	$cantidad_registro = mysqli_num_rows($consulta_mobiliario);

	if ($cantidad_registro === 0) {
		echo "<tr><td><font color='red' size='4'>No hay registro con el codigo: ".$usuario."</font></td></tr>";
	} else { ?>
	<tr >
		<td>N°</td>
		<td>nombre completo</td>
		<td>Usuario</td>
		<td>ver</td>
		<td>Editar</td>
		<td>Eliminar</td>
	</tr>
	<?php
		while($usuarios = mysqli_fetch_array($consulta_mobiliario)){
			$contador ++;

				echo "<tr bgcolor =".$color. ">";
			echo "<td>" .$contador. "</td>";
			echo "<td>" .$usuarios['nombre_completo']. "</td>";
			echo "<td>" .$usuarios['usuario']. "</td>";
			echo "<td> <a href = 'http://".$localIP."/SICIEM/ver_usuario.php?id_usuario=".$usuarios['id_usuario']."'><img src = 'imagenes/ver.ico' width = '32' height = '32' ></a></td>";

			echo "<td> <a href = 'http://".$localIP."/SICIEM/editar_usuario.php?id_usuario=".$usuarios['id_usuario']."'><img src = 'imagenes/editar.ico' width = '26' height = '28'></a></td> ";

			echo "<td> <a href = 'http://".$localIP."/SICIEM/eliminar_usuario.php?id_usuario=".$usuarios['id_usuario']."'><img src = 'imagenes/eliminar.ico' width= '25' height = '24'></a></td> ";

		echo "</tr>";


			if ($color == $color1 ) {
				$color = $color2;
			}elseif ($color == $color2) {
				$color = $color1;
			}}}}
?>
</table>

</center>
</body>
</html>
<style>
	
input[type=text]{
	width: 50%;
	padding: 12px;
	border: 1px solid #ccc;
	border-radius: 4px;
	resize: vertical;
	font-size: 20px;
}

label{
	padding: 12px 12px 12px 0;
	display: inline-block;
}
input[type=submit]{
	background-color: #04AA6D;
	color: white;
	padding: 12px 20px;
	border: none;
	border-radius: 4px;
	cursor: pointer;
	float: center;
}
input[type=submit]:hover {
	background-color: #45a049;
}
</style>
