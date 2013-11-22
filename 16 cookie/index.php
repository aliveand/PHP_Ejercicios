<html>
<body>

<?php 

echo '<a href="'.$_SERVER['PHP_SELF'].'?color=green">Green</a><br>';
echo '<a href="'.$_SERVER['PHP_SELF'].'?color=yellow">yellow</a><br>';
echo '<a href="'.$_SERVER['PHP_SELF'].'?color=red">Red</a><br>';
echo '<a href="'.$_SERVER['PHP_SELF'].'?color=ninguno">Ninguno</a><br>';
 $co = $_REQUEST['color'];
echo '<a href="index2.php?color='.$co.'">Ir a otra pagina para comprobar la cookie</a>';
?>

</body>
</html>