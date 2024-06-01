<?php
$localIP=gethostbyname(getHostName());
session_start();
session_destroy();
$_SESSION['usuario'] = NULL;
$_SESSION['check'] == false;
header("location:http://".$localIP."/SICIEM/index.php");
?>