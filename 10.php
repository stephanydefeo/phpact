<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
if (!empty($_SERVER['HTTPS'])) 
{
  echo 'https is enabled';
}
else
{
echo 'http is enabled'."\n";
}
?>
</body>
</html>