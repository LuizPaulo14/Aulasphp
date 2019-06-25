<!DOCTYPE html>
<html>
<head>
<div>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="utf-8"/>
	<title>Funções Arítmeticas em PHP</title>
	
</head>
<body>
	<?php
	    $ano = $_GET["an"];
	    $idade = 2014 - $ano;
	    echo "Quem nasceu em $ano tem idade de $idade anos.";
	    $tipo = ($idade>18 && $idade<65)?"OBRIGATORIO.":"NÃO OBRIGATORIO.";
	    echo "E dessa forma seu voto é $tipo ";
    ?> 
</div>
</body>
</html>