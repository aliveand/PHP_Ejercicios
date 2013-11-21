<html>
<head>
	<title></title>
</head>
<body>

<?php
function is_nif($cadena){
	$espresion = "/[0-9]{3,7}\-?([a-z]|[A-Z])/";
	if(preg_match($espresion, $cadena)){
		//echo 'el nif es valido';
		$letra = strtoupper(substr($cadena, -1));
		$numero = substr($cadena, 0,-1);	
		$resto=$numero%23;	
		$letras=array('T','R','W','A','G','M','Y','F','P','D','X','B','N','J','Z','S','Q','V','H','L','C','K','E');	
		if ($letras[$resto] == $letra){
			echo 'el nif es valido<br>';
		}	else   {
			echo 'el nif no es valido<br>';
		}
	}   
}
function is_email($cadena){
	$espresion = "/([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9])+\.([a-zA-Z0-9])+/";
	if(preg_match($espresion, $cadena)){
		echo 'el email es valido';
	}   else   {
		echo 'el email no es valido';
	} 
} 
$nif = $_REQUEST['nif'];
$email = $_REQUEST['email'];
is_nif($nif);	
is_email($email);
?>
</body>
</html>