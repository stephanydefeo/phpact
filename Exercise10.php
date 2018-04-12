<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	if (!empty($_SERVER['HTTPS'])) 
	{
	  echo 'Https is enabled.';
	}
	else
	{
	echo 'Http is enabled.'."\n";
	}
	?>
</body>
</html>