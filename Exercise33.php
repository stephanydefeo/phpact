<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$arr = array(
			'zero' => '0',
			'one' => '1', 
			'two' => '2', 
			'three' => '3', 
			'four' => '4', 
			'five' => '5', 
			'six' => '6', 
			'seven' => '7', 
			'eight' => '8', 
			'nine' => '9'
		);
		$num = 'zero;three;five;six;eight;one';
		$sep = explode(";", $num);
		echo "input: $num<br/>";
		echo "output: ";
		foreach($sep as $val1) {
			foreach($arr as $key => $val) {
				if($val1 == $key) {
					echo $val;
				}
			}
		}
	?>
</body>
</html>