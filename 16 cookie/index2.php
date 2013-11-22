<html>
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

</body>
</html>