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
	if(!isset($_POST['dni'])){
		echo 
		'<form action="post.php" method="POST">
		Numero de Dni: <input name="dni" type="text"/>
		<input name="envia" value="enviar" type="submit"/>
		</form>';
	}	else   {
		$numero = $_POST['dni'];
		echo 'El numero de DNI:   '.$_POST['dni'].letraDNI($numero);
	}
?>
</body>
</html>