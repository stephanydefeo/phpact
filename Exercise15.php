<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$filename = basename($_SERVER['PHP_SELF']);
	$file_last_modified = filemtime($filename); 
	if (file_exists($filename)) {
		echo "Filename : $filename";
		echo "Output : Last modified " . date("l, dS F, Y, h:ia", $file_last_modified)."\n";
	}
	?>
</body>
</html>

