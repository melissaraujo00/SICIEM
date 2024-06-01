<?php
include ("conexion.php");
$localIP=gethostbyname(getHostName());
$codigo_inventario = $_POST['codigo_inventario'];
$fecha_adquisicion = $_POST['fecha_adquisicion'];
$descripcion = $_POST['descripcion'];
$marca = $_POST['marca'];
$valor_adquisicion = $_POST['valor_adquisicion'];
$modelo = $_POST['modelo'];
$calidad = $_POST['calidad'];
$serie = $_POST['serie'];
$asignacion = $_POST['asignacion'];

$guardar = mysqli_query($conexion,"INSERT INTO mobiliarioyequipo
											(codigo_inventario,
											fecha_adquisicion,
											descripcion,
											marca,
											valor_adquisicion,
											modelo,
											calidad,
											serie,
											asignacion) 
											VALUES
											('$codigo_inventario',
											'$fecha_adquisicion',
											'$descripcion',
											'$marca',
											'$valor_adquisicion',
											'$modelo',
											'$calidad',
											'$serie',
											'$asignacion')
											");
echo "<script>
				alert('Se guardado el registro con exito');
				window.location = 'http://".$localIP."/SICIEM/lista_mobiliario.php'
	</script>";
?>