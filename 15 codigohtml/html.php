<html>
<head>
	<tittle></tittle>
</head>
<body>
<?php
$cadena = $_REQUEST['string'];
$cadena =  htmlspecialchars(rtrim($cadena));
echo $cadena;
?>
</body>
</html>