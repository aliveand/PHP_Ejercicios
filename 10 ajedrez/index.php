<html>
<head>
	<tittle></tittle>
</head>
<body>
<?php
$f=8;
$c=8;
$count=56;
$size=50;
echo '<div style="height:'.($f*$size).'; width:'.($c*$size).'; border:1px solid black">';
	for ($i=1; $i<=$f; $i++){
		echo '<div style="width:'.$f*$size.'px; height:'.$size.'px;">';
		for ($j=1;$j<=$c;$j++) {
				if ($count%2 == 1){
					echo '<div style="width:'.$size.'px; height:'.$size.'px; float:left; background-color:black;"></div>';
					$count--;
				} else {
					echo '<div style="width:'.$size.'px; height:'.$size.'px; float:left;"></div>';
					$count--;
				}
			}
		$count++;			
		echo '</div>';
	}
echo '</div>'	
?>
</body>
</html>