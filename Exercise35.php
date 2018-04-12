<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$arr = array(1,1,2,2,3,4,5,5);
		echo "Before: ".implode(", ", $arr);
		$arrNoDuplicate = array_values(array_unique($arr));
		echo "<br/>After: ".implode(", ", $arrNoDuplicate);
	?>
</body>
</html>