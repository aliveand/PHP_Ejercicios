<html>
<head>
	<title></title>
</head>
<body>

<?php
function is_nif($nif){//707614
	$letra = strtoupper(substr($nif, -1));
	$numero = substr($nif, 0,-1);
	echo $numero.'      '.$letra;
	/*if(is_numeric($numero)){
 	$resto=$numero%23;
 	$letras=array('T','R','W','A','G','M','Y','F','P','D','X','B','N','J','Z','S','Q','V','H','L','C','K','E');
	 	if(!$letras[$resto] === $letra){
	 		echo 'El dni esta mal 1';
	 	} else {
	 		echo '  el dni esta bn';
	 	}
 	}   else   {
 	 	echo 'El dni esta mal 2';	
 	}*/
}
echo'
<form action="index.php" method="GET">
  Dni: <input type="text" name="dni"/> 
  Email<input type="text" name="email"/>
  <input type="submit"/>
</form>';
	$nif = $_REQUEST['dni'];
	is_nif($nif);
?>

</body>
</html>