<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$url = 'https://www.w3resource.com/php-exercises/php-basic-exercises.php';
		$url=parse_url($url);
		echo 'Scheme: '.$url['scheme']."<br>";
		echo 'Host: '.$url['host']."<br>";
		echo 'Path: '.$url['path']."<br>";
	?>
</body>
</html>