<?php include("menu.php"); ?>
<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="imagenes/incb.png" />
	<title>Agregar Usuario</title>
</head>
<body>
	<center>
	<br/><br/><br/>
<form action="guardar_usuario.php" method="POST">
	<h2>Registro de Usuarios del sistema SICIEM</h2>
	<div class="container">
	<table bgcolor="white" border="0">
		<tr>
			<td>Nombre completo:</td>
			<td> <input type="text" name="nombre_completo" required></td>
		</tr>
		<tr>
			<td>Usuario de acceso</td>
			<td> <input type="text" name="usuario" required></td>
		</tr>
		<tr>
			<td>Escriba una contrseña:</td>
			<td> <input type="password" name="password1" required></td>
		</tr>
		<tr>
			<td>Vuelva a escribir la contrseña:</td>
			<td> <input type="password" name="password2" required></td>
		</tr>
		<tr>
			<td><input type="submit" name="boton_guardar" value="Guardar"></td>
			<td><input type="reset" name="boton_borrar" value="Borrar"></td>
		</tr>
	</table>
	</div>
</form>
</center>
</body>
</html>

<style type="text/css">
	body{
		box-sizing: border-box;
	}
input[type=text], select,textarea {
	width: 100%;
	padding: 12px;
	border: 1px solid #ccc;
	border-radius: 4px;
	resize: vertical;
}
input[type=password], select,textarea {
	width: 100%;
	padding: 12px;
	border: 1px solid #ccc;
	border-radius: 4px;
	resize: vertical;
}
label {
	padding: 12px 12px 12px 0;
	display: inline-block;
}
 input[type= submit]{
 	background: #04AA6D;
 	color: white;
 	padding: 12px 20px;
 	border: none;
 	border-radius: 4px;
 	cursor: pointer;
 	float: right;
 }
  input[type= reset]{
 	background: #04AA6D;
 	color: white;
 	padding: 12px 20px;
 	border: none;
 	border-radius: 4px;
 	cursor: pointer;
 	float: right;
 }
 input[type= submit]:hover {
 	background-color: #45a049;
 }
.container {
	border-radius: 5px;
	background-color: #f2f2f2;
	padding: 20px;
	width: 20%;

}
.col-25 {
	float: left;
	width: 25%;
	margin-top: 6px;
}
/*Clear floats after the columns*/
.row:after {
	content: "";
	display: table;
	clear: both;
}
/*resposive layout - when the screen is less than 600px wide, make the two columns stack on top of each other intead of next to each other*/
@media screen and (max-width: 600px) {
	.col-25, .col-75, input[type= submit] {
		width: 100%;
		margin-top: 0;
	}
}
</style> 