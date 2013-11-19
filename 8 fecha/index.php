<html>
<head>
	<tittle></tittle>
</head>
<body>

<?php
date_default_timezone_set('Europe/Madrid'); 
echo date("Y-m-d H:iA");
if (date('H')<=12){
    echo '</br>Buenos Dias'; 
} else {
        echo '</br>Buenas Tardes'; 
}
    

?>
</body>
</html>