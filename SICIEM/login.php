<!DOCTYPE html>
<html lang = "es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="imagen/png" href="imagenes/incb.png">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<title>Sistema de control de inventario Equipo y Mobiliario INCB</title>
</head>
<body>
	<div class = "limiter">
		<div class="container-login100">
			<div class="wrap-login100">


	<form class="login100-from validate-form" action = "checklogin.php" method="POST">
		<center><h2>Sistema de control de inventario Equipo y Mobiliario INCB</h2></center>
		<br>
	<span class="login100-form-title p-b-26">
		<center><img src="imagenes/incb.png" width="40%" height="40%"></center>
	</span>
	<br>
<!USUARIO>

<div class="wrap-input100 validate-input">
	<input class="input100" type="text" name="usuario" autofocus placeholder="usuario"/>
	<span class="fous-input100"></span> 
</div>
<!CONTRASEÑA>
<div class="wrap-input100 validate-input">
	<span class="btn-show-pass">
		<i class="zmdi zmdi-eye"> </i>
</span>
	<input class="input100" type="password" name="password" placeholder="contraseña">
	<span class="fous-input100"></span>
</div>
<div class="container-login100-form-btn">
	<div class="wrap-login100-form-btn">
	<div class="login100-form-bgbtn"></div>
		<button class="login100-form-btn">
			Entrar
		</button>
		</div>
	</div>
			<!BUTTON>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">

(function (global) {

	if (typeof (global) === "underfined") {
		throw new Error ("window is underfined");
	}

	var _hash = "!";
	var noBackPlease = function (){
		global.location.href += "#";
		global.setTimeout(function (){
			global.location.href += "!";
		}, 50);
	};
	global.onhashchange = function() {
		if (global.location.hash !== _hash) {
			global.location.hash = _hash;
		}
	};
	global.onload = function() {
		noBackPlease();

		document.body.onkeydown = function (e) {
			var Elm = e.target.nodeName.tolowerCase();
			if (e.which === 8 && (Elm !== 'input' && Elm !== 'textarea')) {
				e.preventDefault();
			}

			e.stopPropagation();
		};
	}
})(window);


</script>
<style type = "text/css">
	h3{
		color: #443963;
		font-weight: normal;
		font-size: 18px;
		font-family: Arial;

	}
	</style>
</body>
