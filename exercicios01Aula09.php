<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="utf-8"/>
	<title>Exercicio 01 Aula 09 html</title>
	
</head>
<body>

<div>
	<?php 
	   $a = isset($_GET["ano"])?$_GET["ano"]:1900;
	   $i = date("Y") - $a;
	   echo "Voce nasceu em $a tera $i anos."; 
	   if($i < 16) {
	   	  $tipoVoto = "nao vota";
	   }
	   elseif (($i >= 16 && $i < 18) || ($i > 65)) {
	   	  $tipoVoto = "voto opcional";
	   }
	   else{
	   	  $tipoVoto = "voto obrigatorio";
	   }
	   
	   echo "Para essa idade, $tipoVoto";
	?>
	
</div>

	
</body>
</html>