<?php
include ("conexion.php");
$id_mobiliario = $_POST['id_mobiliario'];
$codigo_inventario = $_POST['codigo_inventario'];
$fecha_adquisicion = $_POST['fecha_adquisicion'];
$descripcion = $_POST['descripcion'];
$marca = $_POST['marca'];
$valor_adquisicion = $_POST['valor_adquisicion'];
$modelo = $_POST['modelo'];
$calidad = $_POST['calidad'];
$serie = $_POST['serie'];
$asignacion = $_POST['asignacion'];

mysqli_query($conexion,"UPDATE  mobiliarioyequipo SET

										codigo_inventario = '$codigo_inventario',
										fecha_adquisicion = '$fecha_adquisicion',
										descripcion = '$descripcion',
										marca = '$marca',
										valor_adquisicion = '$valor_adquisicion',
										modelo = '$modelo',
										calidad = '$calidad',
										serie = '$serie',
										asignacion= '$asignacion'

										WHERE id_mobiliario ='$id_mobiliario' ");
echo "<script>
				alert('Se actualizado el registro con exito');
				window.location = 'http://localhost/SICIEM/lista_mobiliario.php'
	</script>";
?>