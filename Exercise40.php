<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		function without_mod($m, $n) {
			$divides=(int)($m/$n);
			return $m-$n*$divides;
		}
		echo "5 % 2 = ".without_mod(5, 2)."<br/>";
		echo "12 % 6 = ".without_mod(12, 6);
	?>
</body>
</html>