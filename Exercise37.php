<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		function isPrime($n) {
			for($x = 2; $x < $n; $x++) {
		    	if($n % $x == 0) {
					return 0;
				}
		    }
		  	return 1;
		}
		$sum = 0;
		for($i = 2; $i < 100; $i++) {
			if(isPrime($i)) {
				$sum += $i;
			}
		}
		echo $sum;
	?>
</body>
</html>