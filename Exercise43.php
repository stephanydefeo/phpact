<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		function multiplyLists($x, $y) {
		    $a = explode(' ', trim($x));
		    $b = explode(' ', trim($y));
		    foreach($a as $key => $value){
		        $output[$key] = $a[$key] * $b[$key];
		    }
		    return implode(' ', $output);
		}
		echo multiplyLists(("1 2 3"), ("3 2 1"));
	?>
</body>
</html>