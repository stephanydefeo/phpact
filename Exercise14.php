<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$all_lines = file("https://w3schools.com/");
		foreach ($all_lines as $line_num => $line){
		 	echo "Line No.-{$line_num}: " . htmlspecialchars($line) . "\n";
		 }
	?>
</body>
</html>