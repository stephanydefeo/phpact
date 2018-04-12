<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$sum = 0;
		$digits = "12345";
		for($i = 0; $i < strlen($digits); $i++) {
			$sum += $digits[$i];
		}
		echo $sum;
	?>
</body>
</html>