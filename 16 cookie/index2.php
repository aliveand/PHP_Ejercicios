<html>
<<<<<<< HEAD
<<<<<<< HEAD
<?php 
if(isset($_REQUEST["color"])){
	if($_REQUEST["color"]=="ninguno")
	{
		setcookie("colorCookie", "", time()-3600);
		echo "Cookie borrada.";
	}   else   {
			setcookie("colorCookie", $_REQUEST["color"]);
			$var=$_COOKIE['colorCookie'];
			echo '<body bgcolor="'.$_COOKIE['colorCookie'].'""></body>';
			echo $var;
			echo 'La cookie seleccionada es:'.$_REQUEST["color"];
	}
}
?>

=======
=======
>>>>>>> f27666fa0c8f0f6ec95780c201ba68fd4006df57
<head>
	<tittle></tittle>
</head>
<body>
<?php
include 'index.php';
?>
<<<<<<< HEAD
>>>>>>> f27666fa0c8f0f6ec95780c201ba68fd4006df57
=======
>>>>>>> f27666fa0c8f0f6ec95780c201ba68fd4006df57
</body>
</html>