<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="Free Web tutorials">
	<meta name = "Keywords" content="HTML, CSS, JavaScript">
	<meta name="author" content="John Doe">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="imagenes/incb.png" />
	<title>SICIEM</title>
</head>
<?php 
$localIP=gethostbyname(getHostName());
session_start();
if (isset($_SESSION['id_usuario'])) {
	
	include("menu.php");
?>
<body background="http://<?php echo $localP;?>/SICIEM/imagenes/fondoxd.jpg" style="opacity: 0.8; background-repeat: no-repeat; background-size: cover;">
<center><img src="imagenes/fondo_principal.png"></center>

</body>
</html>

<?php
	
		}else {
			header('Location:login.php');
		}
?>
<script type="text/javascript">
(function (global) {
	
	if (typeof (global)=== "undefined") {
		throw new Error("window is undefined");
	}

	var _hash = "!";
	var noBackPlease = function (){
		global.location.href += "#";

		//making sure we have the fruit available for juice (^__^)
		 global.setTimeout(function(){
		 	global.location.href += "!";
		 }, 50);
	};
	global.onhashchange = function () {
		if (global.location.hash !== _hash) {
			global.location.hash = _hash;
		}
	};
	global.onload = function () {
		noBackPlease ();

		//disables backspace on page except on input fields and textarea...
		document.body.onkeydown = function (e) {
			var Elm = e.target.nodeName.tolowerCase();
			if (e.wich === 8 && (Elm !== 'input' && Elm !== 'textarea')) {
				e.preventDefault();
			}
			//stopping event bubbling up the DOM three..
			e.stopPropagation();
		};
	}
})(window);

</script>