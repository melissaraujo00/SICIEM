<?php 
include("conexion.php");
include("menu.php"); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lista de Mobiliario</title>
</head>
<body>
	<center>
	<br/><br/><br/>

<table border="1" bgcolor="#0A0A0A">
	<tr bgcolor="#D2E1F3">
		<td colspan= "13" align="center" ><h2>Lista de Equipo y mobiliario</h2></td></tr>
	<tr bgcolor=" #E5EDF7">
		<td>N°</td>
		<td>Codigo de inventario</td>
		<td>Fecha de adquisicion</td>
		<td>Descripcion</td>
		<td>Marca</td>
		<td>Valor de adquisicion </td>
		<td>Modelo</td>
		<td>Calidad</td>
		<td>Serie</td>
		<td>Asigancion</td>
		<td>Ver</td>
		<td>Editar</td>
		<td>Eliminar</td>
	</tr>
	<?php
	$color1 = "#5D8DE1";
	$color2 = "#B6CFED";
	$localIP=gethostbyname(getHostName());

	$color = $color1;
		$contador = 0;

$consulta_mobiliario = mysqli_query($conexion, "SELECT *FROM mobiliarioyequipo ORDER BY codigo_inventario ASC");
	
		while ($mobiliario = mysqli_fetch_array($consulta_mobiliario)) {
			$contador ++;

			echo "<tr bgcolor =".$color.">";
				echo "<td>".$contador. "</td>";
				echo "<td>".$mobiliario['codigo_inventario']. "</td>";
				echo "<td>".$mobiliario['fecha_adquisicion']. "</td>";
				echo "<td>".$mobiliario['descripcion']. "</td>";
				echo "<td>".$mobiliario['marca']. "</td>";
				echo "<td>"."$".$mobiliario['valor_adquisicion']. "</td>";
				echo "<td>".$mobiliario['modelo']. "</td>";
				echo "<td>".$mobiliario['calidad']. "</td>";
				echo "<td>".$mobiliario['serie']. "</td>";
				echo "<td>".$mobiliario['asignacion']. "</td>";
				//? = se le lleva la variable 
				//& para mostrar 2 variables ".$mobiliario['id_mobiliario']."&calidad=".$mobiliario['calidad']."
				echo "<td> <a href = 'http://".$localIP."/SICIEM/ver_mobiliario.php?id_mobiliario=".$mobiliario['id_mobiliario']."'><img src = 'imagenes/ver.ico' width = '32' height = '32' ></a></td>";

				echo "<td> <a href = 'http://".$localIP."/SICIEM/editar_mobiliario.php?id_mobiliario=".$mobiliario['id_mobiliario']."'><img src = 'imagenes/editar.ico' width = '28' height = '28' ></a></td>";

				echo "<td> <a href = 'http://".$localIP."/SICIEM/eliminar_mobiliario.php?id_mobiliario=".$mobiliario['id_mobiliario']."'><img src = 'imagenes/eliminar.ico' width = '24' height = '28' ></a></td>";
			echo "</tr>";


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
