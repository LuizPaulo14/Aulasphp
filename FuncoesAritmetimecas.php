<!DOCTYPE html>
<html>
<head>
<div>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="utf-8"/>
	<title>Funções Arítmeticas em PHP</title>
	<style>
		h2 {
			font:15pt Arial;
			color: #171559;
			font-weight: bold;	
		}
	</style>
</head>
<body>
	<?php
	    $v1 = $_GET["x"];
	    $v2 = $_GET["y"];
	    echo "<h2>Valores recebidos: $v1 e $v2</h2>";
	    echo "O valor absoluto de $v2 e ". abs($v2);
	    echo "<br/>O valor de $v1<sup>$v2</sup> e ". pow($v1,$v2);
	    echo "<br/>A raiz de $v1 e ". sqrt($v1);
	    //Tem que passar parametros.
    ?> 
</div>
</body>
</html>