<?php $localIP=gethostbyname(getHostName()); ?>
<head>
	<meta charset="utf-8">
	<meta name="keywords" content="HTML, CSS, JavaScript">
	<meta name="author" content="John Doe">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://<?php echo $localIP; ?>/SICIEM/css/style_menu.css">
	<link rel="shortcut icon" href="imagenes/incb.png" />
	<title>Equipo y mobiliario </title>
</head>

<body background="http://<?php echo $localIP; ?>/SICIEM/imagenes/fondo.jpg" style="background-size: cover; background-repeat: no-repeat;">
<div id="header">
<ul id="menu" class="nav">

<center>
<ul id="menu">
	<li><a href="http://<?php echo $localIP; ?>/SICIEM/principal.php">Inicio</a> </li>
	<li><a> Mobiliario & equipo</a>
	<ul id = "menu">
		<li><a href="http://<?php echo $localIP; ?>/SICIEM/agregar_mobiliario.php">Agregar nuevo</a> </li>
		<li><a href="http://<?php echo $localIP; ?>/SICIEM/lista_mobiliario.php">Ver lista</a> </li>
		<li><a> Buscar</a>
			<ul id="menu">
				<li><a href="http://<?php echo $localIP; ?>/SICIEM/buscar_mobiliario_codigo.php">Por Codigo</a></li>
				<li><a href="http://<?php echo $localIP; ?>/SICIEM/buscar_mobiliario_asignacion.php"> Por Asignacion</a></li>
				<li><a href="http://<?php echo $localIP; ?>/SICIEM/buscar_mobiliario_descripcion.php"> Por descripción</a></li>
				<li><a href="http://<?php echo $localIP; ?>/SICIEM/buscar_mobiliario_modelo.php"> Por modelo </a></li>
				
			</ul>
		</li>
	</ul>
	</li>
	<li><a href="http://<?php echo $localIP; ?>/SICIEM/generar_cb.php">Generar codigo de barra</a> </li>

	<li><a>Usuarios</a>
	<ul id = "menu">
		<li><a href="agregar_usuario.php">Agregar Nuevo</a></li>
		<li><a href="http://<?php echo $localIP; ?>/SICIEM/lista_usuarios.php">Ver lista</a> </li>
		<li><a href=""> Buscar</a>
			<ul id="menu">
				<li><a href="http://<?php echo $localIP; ?>/SICIEM/buscar_usuario_nombre.php"> Por nombre</a></li>
			</ul></li>
	</ul>
	</li>


	<li><a href= "http://<?php echo $localIP; ?>/SICIEM/ayuda.php"> Ayuda</a></li>
	<li><a href= "http://<?php echo $localIP; ?>/SICIEM/logout.php"> Salir</a></li> 

</ul>
</center>
</ul>
</div>
</body>
<script type="text/javascript">
(function (global) {
	if (typeof (global)=== "undefined") {
		throw new Error ("window is undefined");
	}
	var _hash = "!";
	var noBackPlease = function (){
		global.location.href += "#";
		global.setTimeout(function () {
			global.location.href += "!";
			// body...
		}, 50);
	};
	global.onhashchange = function () {
		noBackPlease();
		document.body.onkeydown = function (e) {
			var Elm = e.target.nodeName.toLowerCase();
			if (e.which === 8 && (Elm !== 'input' && Elm !== 'textarea')) {
				e.preventDefault();
			}
			e.stopPropagation();
		};
	}
})(window);
</script>