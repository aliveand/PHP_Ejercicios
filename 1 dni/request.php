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
	if(!isset($_REQUEST['dni'])){
		echo 
		'<form action="request.php" method="GET">
		Numero de Dni: <input name="dni" type="text"/>
		<input name="envia" value="enviar" type="submit"/>
		</form>';
	}	else   {
		$numero = $_REQUEST['dni'];
		echo 'El numero de DNI:   '.$_REQUEST['dni'].letraDNI($numero);
	}
?>
</body>
</html>