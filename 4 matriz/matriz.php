<html>
<head>
	<tittle></tittle>
</head>
<body>

<?php
        function matriz($c,$f){ 
                if ($f==0) $f=10;
                if ($c==0) $c=10;
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
        $f=$_REQUEST['f'];
        $c=$_REQUEST['c'];      
        matriz($c,$f);

?>
</body>
</html>