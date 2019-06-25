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
	   $nome = isset($_GET["nome"])?$_GET["nome"]:"[não informado]";
	   $ano = isset($_GET["ano"])?$_GET["ano"]:0;
	   $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[sem sexo]";
	   $idade = date ("Y") - $ano;
	   echo "$nome é $sexo e tem $idade anos.";
	?>
	<a href="exercicios02Aula08.html">Voltar</a>
</body>
</html>