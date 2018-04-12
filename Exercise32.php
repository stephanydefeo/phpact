<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$num = 20;
		$sl = strlen($num);
		$sum = 0;
		$num = (string)$num;
		for ($i = 0; $i < $sl; $i++) {
			$sum = $sum + pow((string)$num{$i},$sl);
		}
		if((string)$sum == (string)$num) {
		    echo "true";
		} else {
			echo "false";
		}
	?>
</body>
</html>