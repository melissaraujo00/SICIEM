<?php
include("conexion.php");
include("menu.php"); 
$localIP = gethostbyname(getHostName());
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lista de Usuarios</title>
</head>
<body>
<center>
	<br/><br/>

<table border="1" bgcolor="#0A0A0A">
	<tr bgcolor="#4B7DF0">
		<td colspan = "10" align="center"> <h2>		Lista de Usuarios ingresados 		</h2></td>
	</tr>
	<tr bgcolor="#DEEFF5">
		<td>N°</td>
		<td>Nombre completo</td>
		<td>usuario</td>
		<td>Ver</td>
		<td>Editar</td>
		<td>Eliminar</td>
	</tr>
	<?php
	$color1 = "#86A2E0";
	$color2 = "#6D91E5";
	 $color = $color1;
	 	$contador = 0;
	

$consulta_usuarios = mysqli_query($conexion,"SELECT *FROM usuarios ORDER BY nombre_completo ASC");
	while ($usuarios = mysqli_fetch_array($consulta_usuarios)) {
		$contador++;

		echo "<tr bgcolor =".$color. ">";
			echo "<td>" .$contador. "</td>";
			echo "<td>" .$usuarios['nombre_completo']. "</td>";
			echo "<td>" .$usuarios['usuario']. "</td>";
			echo "<td> <a href = 'http://".$localIP."/SICIEM/ver_usuario.php?id_usuario=".$usuarios['id_usuario']."'><img src = 'imagenes/ver.ico' width = '32' height = '32' ></a></td>";

			echo "<td> <a href = 'http://".$localIP."/SICIEM/editar_usuario.php?id_usuario=".$usuarios['id_usuario']."'><img src = 'imagenes/editar.ico' width = '26' height = '28'></a></td> ";

			echo "<td> <a href = 'http://".$localIP."/SICIEM/eliminar_usuario.php?id_usuario=".$usuarios['id_usuario']."'><img src = 'imagenes/eliminar.ico' width= '25' height = '24'></a></td> ";

		echo "</tr>";
		// code...

		if ($color == $color1 ) {
				$color = $color2;
			}elseif ($color == $color2) {
				$color = $color1;
			}
	}

?>
</table>

</center>
</body>
</html>
