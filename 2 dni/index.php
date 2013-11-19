<html>
<head>
	<tittle></tittle>
</head>
<body>
<?php
        if(!isset($_REQUEST['dni'])) {
        echo '
        <form action="index.php?dni=999" method="POST">
                Numero del DNI: <input type="text" name="dni" />
                <input type="submit" />
        </form>
        ';
        }
        else {
        $dni=$_REQUEST['dni'];
        $resto=$dni%23;
        $letras=array('T','R','W','A','G','M','Y','F','P','D','X','B','N','J','Z','S','Q','V','H','L','C','K','E');
        echo "La letra para el DNI " . $dni . " es " . $letras[$resto];
        }
?>
</body>
</html>