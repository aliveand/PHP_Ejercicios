<html>
<head>
	<tittle></tittle>
</head>
<body>

<?php
        function matriz($f,$c){  
                echo '<table border=1><tr><td></td>';                
                for($i = 1; $i<=$f; $i++){      
                        echo '<td><b>'.$i.'</b></td>';  
                } 
                echo '</tr>';
                for($j = 1; $j<=$c; $j++){      
                        echo '<tr><td><b>'.$j.'</b></td>';
                        for($i = 1; $i<=$f; $i++){
                                echo '<td>'.$j.$i.'</td>';
                        }
                } 
                echo '</tr></table>';                
        }
        if(!isset($_REQUEST['f'])){
                echo
                '<form action="index.php" method="get">
                Numero Columnas <input type="number" name="f" min="0" >
                Numero filas <input type="number" name="c" min="0" >
                <input name="envia" value="enviar" type="submit"/>
                </form>';
        }   else   {
                $f=$_REQUEST['f'];
                $c=$_REQUEST['c'];
                matriz($c,$f);
        }
        /*<table border=1>
        <tr><td>Fila 1 Columna 1</td><td> Fila 1 Columna 2</td></tr>
        <tr><td>Fila 2 Columna 1</td><td> Fila 2 Columna 2</td></tr>
        </table>*/
?>
</body>
</html>