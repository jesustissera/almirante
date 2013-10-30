<?php
include("clases/contador.php");
contador();
require("clases/clases.php");
$funcion = new funcion();
?>
<html>
<head>
<title>Club Almirante Brown</title>
<link rel="shortcut icon" href="img/favicon.ico">
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
<link rel="stylesheet" type='text/css' href='css/reset.css'>
<link type='text/css' href='css/estilo.css' rel='stylesheet'>
<script type='text/javascript' src='js/funcion.js'></script>

</head>

<body >
<div id='pagina'><div id='contenedor'>
<div class='banner'><img src="img/bannerSD.jpg"><div class='titulo_banner'></div></div>

<?php 
$funcion->menu();
$funcion->cuerpo();
$funcion->pie();

?>

</div>
</div>
</body>

</html>