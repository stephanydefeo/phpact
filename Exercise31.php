<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$x = 1;
		$y = 2;
		echo "Before: ";
		echo "x = $x and y = $y";

		$tmp = $x;
		$x = $y;
		$y = $tmp;
		 
		echo "<br/>after: ";
		echo "x = $x and y = $y";
	?>
</body>
</html>