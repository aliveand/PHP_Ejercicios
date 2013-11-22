<html>
<<<<<<< HEAD
<<<<<<< HEAD
<body>

<?php 

echo '<a href="'.$_SERVER['PHP_SELF'].'?color=green">Green</a><br>';
echo '<a href="'.$_SERVER['PHP_SELF'].'?color=yellow">yellow</a><br>';
echo '<a href="'.$_SERVER['PHP_SELF'].'?color=red">Red</a><br>';
echo '<a href="'.$_SERVER['PHP_SELF'].'?color=ninguno">Ninguno</a><br>';
 $co = $_REQUEST['color'];
echo '<a href="index2.php?color='.$co.'">Ir a otra pagina para comprobar la cookie</a>';
?>

=======
=======
>>>>>>> f27666fa0c8f0f6ec95780c201ba68fd4006df57
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
<<<<<<< HEAD
>>>>>>> f27666fa0c8f0f6ec95780c201ba68fd4006df57
=======
>>>>>>> f27666fa0c8f0f6ec95780c201ba68fd4006df57
</body>
</html>