<html>
<body>

<?php
$datos = array("year", "month", "day", "hora", "minuto","id", "title","cc");
foreach ($datos as $key => $value) {
	echo $value.'<br>';
}
echo count($datos);
	function formulario_evento($datos){
		$dd = array("year","month","day","hora");
		for ($i=0; $i <count($dd) ; $i++) { 
		
			echo ''.$dd[0].'<select>';
			for($i=$datos[$dd][0];$i<=$datos[$dd][1];$i++){
				echo '<option value="'.$i.'">'.$i.'</option>';
			}
			echo '</select>';
		}
	}
?>
</body>
</html>