<!DOCTYPE html>
<html>
<head>
	<title>HTML Form</title>
	
</head>
<body>
<form method='POST'>
   <h2>Please input your name:</h2>
 <input type="text" name="name">
 <input type="submit" value="Submit Name">
 </form>
	<?php
	//Retrieve name from query string and store to a local variable
	$name = $_POST['name'];
	echo "<h3> Hi there $name .</h3>";
	?>
</body>
</html>