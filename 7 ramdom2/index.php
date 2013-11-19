<html>
<head>
	<tittle></tittle>
</head>
<body>

<?php
/*
 $m=32749;
 $a=219;
 $c=0;
 */


function randomLCG($x,$pos) {
    $variable = (2*$x[$pos]+0)%100;
    $number[$pos] = $variable;
    $verdadero = repetidos($number,$pos);
    if (is_numeric($verdadero) == true){
		return $verdadero;
    }

}  
function repetidos($number, $variable){
	foreach ($number as $key => $value) {
		if (!$value == $variable){
			return $variable;
			continue;
		}
	return false;			
	}
}
$f=15;
$c=15;
$pos=0;
$x[0]=1;
echo '<table border="1">';     
for($i = 0; $i<$f; $i++){
        echo '<tr>';
        for($j = 0; $j<$c; $j++){
                $x[$pos+1]=randomLCG($x,$pos);
                echo '<td>'.$x[$pos+1].'</td>';
                $pos++;
        }
        echo '</tr>';
}
echo '</table>';
?>
</body>
</html>