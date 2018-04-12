<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		function testBitPosition($num, $pos1, $pos2) {
			$pos1--;
			$pos2--;
			$bin_num = strrev(decbin($num));
		    if ($bin_num[$pos1] == $bin_num[$pos2]) {
		    	return "true";
		    } else {
		    	return "false";
		   }
		}
		echo testBitPosition(115,3,4);
		?>
</body>
</html>