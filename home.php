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
		$username = $_SESSION['username'];
		print("<h1><strong><center>Welcome, $username!</center></strong></h1>");
	?>
	
	<body>
		<center><a href="message.php"> Logout</a></center>
	</body>
</html>


