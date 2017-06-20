<?php 
// Used to display messages to the user and return home.
	require 'db.php';
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Notice</title>
		<?php // include 'css/css.html'; ?>
	</head>
	
	<?php
		$message = $_SESSION['message'];
		print("<h1><strong><center>$message</center></strong></h1>");
		session_destroy();
		unset($_SESSION['username']);
	?>
	
	<body>
		<center><a href="index.php"> Home</a></center>
	</body>
</html>


