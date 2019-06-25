<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="utf-8"/>
	<title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
	<form method="get" action="02-parte02.php">
	    <?php
	    $c = 1;
	    while ($c <+ 6) {
    	echo "Valor $c:<input type='number' name='$c' max='100' min='0' value='0'/><br/>";
    	$c ++;
	   	}
	    ?>
	    <input type="submit" value="Enviar" class="botao"/>
</div>
    </form>

</body>
</html>