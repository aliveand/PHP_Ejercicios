<html>
<head>
	<tittle></tittle>
</head>
<body>
<?php
	$x=3;
	function recursiva($x){
		$suma = 1;
   		for ($i=$x; $i>1; $i--){
   			$n=$i*($i-1);
   			if ($n == 0) {$n=1;}
   			echo $n.'<br>';			
   			$suma *= $n;
   		}
   		return $suma;
	}
	$suma=recursiva($x); 
	echo 'el factorial es: '.$suma;
?>
</body>
</html>