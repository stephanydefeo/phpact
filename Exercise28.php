<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$file = tempnam(sys_get_temp_dir(), 'xxx');
		echo $file;
	?>
</body>
</html>