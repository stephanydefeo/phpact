<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	// pass valid/invalid emails
	$email = "sexybeast@gmail.com";
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
	     echo '"' . $email . '" = Valid'."\n";
	}else {
	     echo '"' . $email . '" = Invalid'."\n";
	}
	?>

</body>
</html>