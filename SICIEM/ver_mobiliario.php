<?php 
include("conexion.php");
include("menu.php"); 
$localIP = gethostbyname(getHostName());

$consulta_mobiliario = mysqli_query($conexion, "SELECT * FROM mobiliarioyequipo WHERE id_mobiliario =".$_GET['id_mobiliario']);

$mobiliario = mysqli_fetch_array($consulta_mobiliario);

?>
<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="imagenes/incb.png" />
	<title>Ver Equipo</title>
</head>
<body>

	<center>
	<br/><br/><br/>
<form action="guardar_mobiliario.php" method="POST">
	<div>
	<a href="http://<?php echo $localIP; ?>/SICIEM/lista_mobiliario.php"><img src="imagenes/boton_ver_lista.jpeg"></a>
	<table bgcolor="#E3E9F2" border="0" style="border: 10px solid #4275DC;">
		<tr >
			<td colspan = "4" align="center"><h2>Registro de Equipo y mobiliario</h2></td>
		</tr>
		<tr>
			<td>Codigo del inventario </td>
			<td> <input type="text" name="codigo_inventario" required value="<?php  echo $mobiliario['codigo_inventario']; ?>" readonly></td>
			<td>Fecha de Adquisicion</td>
			<td> <input type="date" name="fecha_adquisicion"  value="<?php  echo $mobiliario['fecha_adquisicion']; ?>" readonlyrequired></td>
		</tr>
		<tr>
			<td>Descripcion</td>
			<td><input type = "text" name="descripcion" value="<?php  echo $mobiliario['descripcion']; ?>" readonly></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>Marca</td>
			<td><input type="text" name="marca" value="<?php  echo $mobiliario['marca']; ?>" readonly></td>
			<td>Valor de adquisicion $:</td>
			<td><input type="text" name="valor_adquisicion" value="<?php  echo $mobiliario['valor_adquisicion']; ?>" readonly></td>
		</tr>
		<tr>
			<td>Modelo</td>
			<td><input type="text" name="modelo" value="<?php  echo $mobiliario['modelo']; ?>" readonly></td>
			<td>Calidad</td>
			<td><input type="text" name="calidad" value="<?php  echo $mobiliario['calidad']; ?>" readonly></td>
		</tr>
		<tr>
			<td>Serie</td>
			<td><input type="text" name="serie" value="<?php  echo $mobiliario['serie']; ?>" readonly></td>
			<td>Asignado a:</td>
			<td><input type="text" name="asignacion" value="<?php  echo $mobiliario['asignacion']; ?>" readonly></td>
		</tr>
	</table>
	</div>
</form>
</center>
</body>
</html>
<style type="text/css">
	
	input[type="text"]{
	padding: 4px 10px;
	line-height: 28px;}

	input[type="date"]{
	padding:4px 54px ;
	line-height: 28px;}

	input[type="submit"],input[type="reset"]{
		background-color: #04AA6D ;
	border: none;
	color: white;
	padding: 16px 32px;
	text-decoration: none;
	margin: 4px 2px;
	cursor: pointer;
	}
textarea{
	resize: none;
}

</style>