<?php 
include("menu.php");
include("conexion.php");
?><center>
	<br/><br/><br/>
	<input type="text" id="data" placeholder="Ingresa o escanea el codigo" autofocus>
	<button type="button" id="generar_barcode" class="button">Generar código de barras
	</button>
	<br/><br/><br/><br/><br/><br/>
	<div id="imagen"></div>
	<script src="jquery3.1.0/jquery.min.js"></script>
	<script>
		$("#generar_barcode").click(function(){
			var data= $("#data").val();
			$("#imagen").html('<img src= "barcode\\barcode.php?text='+data+'&size=70&codetype=code128&print=true&orientation=horizontal"/>');
			$("#data").val('');
		});
	</script>
</center>
<style >
input[type=text]{
	width: 20%;
	padding: 12px;
	border: 1px solid #ccc;
	border-radius: 4px;
	resize: vertical;
	font-size:16px;
}
label{
	padding: 12px 12px 12px 0;
	display: inline-block;
}

.button{
	background-color: #04AA6D;
	color: white;
	padding: 12px 20px;
	border: none;
	border-radius: 4px;
	cursor: pointer;
	float: center;

}

.button:hover{
	background-color: #45a049;
}
</style>