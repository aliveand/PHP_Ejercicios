<html>
<head>
	<tittle></tittle>
</head>
<body>
<?php
if(isset($_COOKIE['color'])) {
        $mycolor=$_COOKIE['mycolor'];
        echo 'tienes el color <font color='.$mycolor.'>'.$mycolor.'</font>.<br>';
}else {
        echo 'No tienes ningun color seleccionado<br>';
}
setcookie("color[rojo]", "red", time() + 3600));
setcookie("color[azul]", "blue", time() + 3600));	
setcookie("color[verde]","green", time() + 3600));	
setcookie("color[ninguno]");	
echo   '<a href="index2.php">Rojo</a><a href="index2.php">Rojo</a><a href="index2.php">Rojo</a>';
?>
</body>
</html>