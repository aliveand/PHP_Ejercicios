<html>
<head>
	<tittle></tittle>
</head>
<body>
<?php
function buscar($aguja,$pajar) {
	echo substr_count($pajar, $aguja);
}
$aguja = "Ana";
$pajar = "Ana Irene Palma'";
buscar($aguja,$pajar);
?>
</body>
</html>