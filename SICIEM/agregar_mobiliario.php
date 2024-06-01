<?php include("menu.php"); ?>
<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="imagenes/incb.png" />
	<title>Agregar </title>
</head>
<body>
	<center>
	<br/><br/><br/>
<form action="guardar_mobiliario.php" method="POST">
	<div>
	<table bgcolor="#E3E9F2" border="0" style="border: 10px solid #4275DC;">
		<tr >
			<td colspan = "4" align="center"><h2>Registro de Equipo y mobiliario</h2></td>
		</tr>
		<tr>
			<td>Codigo del inventario </td>
			<td> <input type="text" name="codigo_inventario" required autofocus></td>
			<td>Fecha de Adquisicion</td>
			<td> <input type="date" name="fecha_adquisicion"  required></td>
		</tr>
		<tr>
			<td>Descripcion</td>
			<td><textarea type = "text" name="descripcion" style="resize: none;"></textarea></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>Marca</td>
			<td><input type="text" name="marca"></td>
			<td>Valor de adquisicion $:</td>
			<td><input type="text" name="valor_adquisicion" required></td>
		</tr>
		<tr>
			<td>Modelo</td>
			<td><input type="text" name="modelo" ></td>
			<td>Calidad</td>
			<td><input type="text" name="calidad"></td>
		</tr>
		<tr>
			<td>Serie</td>
			<td><input type="text" name="serie" ></td>
			<td>Asignado a:</td>
			<td><input type="text" name="asignacion" ></td>
		</tr>
		<tr>
			<td colspan="2" align="right"><input type="submit" name="boton_guardar" value="Guardar"></td>
			<td colspan="2"><input type="reset" name="boton_eliminar" value="Eliminar"></td>
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