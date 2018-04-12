<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		function findNonRepeat($str) {
			for ($i = 0; $i <= strlen($str); $i++) {
		     	if (substr_count($str, substr($str, $i, 1)) == 1) {
		        	return substr($str, $i, 1);
		     	}
	  		}
		}
		echo findNonRepeat("Green")."<br/>";
		echo findNonRepeat("abcdea")."<br/>";
	?>

</body>
</html>