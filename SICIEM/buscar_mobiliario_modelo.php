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
	<title>Busqueda de Mobiliario</title>
</head>
<body>
	<center>
	<br/><br/><br/>

<table border="1" bgcolor="white" align="center">
	<tr><td colspan= "13"><center><h2>Busqueda de Equipo y mobiliario INCB<br/>
	<img src="imagenes/busqueda.ico" width="50" height="50"></h2></center>
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"> 
			<p>ingrese el codigo</p>
			<input type="text" name="modelo" value="<?php echo @$_POST['modelo']?>" required autofocus>
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
	$modelo = $_POST['modelo'];
	$consulta_mobiliario = mysqli_query($conexion, "SELECT * FROM mobiliarioyequipo WHERE modelo LIKE '%$modelo%'
		OR modelo LIKE '%$modelo%'
		OR CONCAT(modelo,'', modelo) LIKE '%$modelo'");
	$cantidad_registro = mysqli_num_rows($consulta_mobiliario);

	if ($cantidad_registro === 0) {
		echo "<tr><td><font color='red' size='4'>No hay registro con el codigo: ".$modelo."</font></td></tr>";
	} else { ?>
	<tr >
		<td>N°</td>
		<td>Codigo de inventario</td>
		<td>Fecha de adquisicion</td>
		<td>Descripcion</td>
		<td>Marca</td>
		<td>Valor de adquisicion $</td>
		<td>Modelo</td>
		<td>Calidad</td>
		<td>Serie</td>
		<td>Asignacion</td>
		<td>Ver</td>
		<td>Editar</td>
		<td>Eliminar</td>
	</tr>
	<?php
		while($mobiliario = mysqli_fetch_array($consulta_mobiliario)){
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
