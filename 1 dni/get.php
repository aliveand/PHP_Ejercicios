<html>
<head>
	<tittle></tittle>
</head>
<body>
<?php
	function letraDNI($numero){
		$letras=array('T','R','W','A','G','M','Y','F','P','D','X','B','N','J','Z','S','Q','V','H','L','C','K','E');
		$posicion = $numero % 23;
		$letra = $letras[$posicion];
		return $letra;
	}
	if(!isset($_GET['dni'])){
		echo 
		'<form action="get.php" method="get">
		Numero de Dni: <input name="dni" type="text"/>
		<input name="envia" value="enviar" type="submit"/>
		</form>';
	}	else   {
		$numero = $_GET['dni'];
		echo 'El numero de DNI:'.$_GET['dni'].letraDNI($numero);
	}
?>
</body>
</html>