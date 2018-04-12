<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		function valid_email($email) {
		  $result = trim($email);
		  if (filter_var($result, FILTER_VALIDATE_EMAIL)) 
		  {
		    return "true";
		  } 
		  else 
		  {
		    echo "false";
		  }
		}
		echo valid_email("abc@example.com")."<br/>";
		echo valid_email("abc#example.com");
		?>
</body>
</html>