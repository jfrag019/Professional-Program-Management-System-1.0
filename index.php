<?php 
// Home page - allows registering and signing in.
	require 'db.php';
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Sign-Up/Login Form</title>
		<?php // include 'css/css.html'; ?>
	</head>
	
	<?php 
		if (isset($_POST['login_btn']))
		{
			$username = mysqli_real_escape_string($mysqli, $_POST['username']);
			$password = mysqli_real_escape_string($mysqli, $_POST['password']);
			$password = md5($password);
			
			$query = "SELECT * FROM User WHERE Username='$username' AND Password='$password'";
		//	print($query);
			$result = mysqli_query($mysqli, $query);
			if (mysqli_num_rows($result) == 1)
			{
				session_start();
				$_SESSION['username'] = $username;
				$_SESSION['message'] = "You have logged out.";
				header('location: home.php');
			}
			else
			{
				$_SESSION['message'] = "Invalid username/password!";
				header('location: message.php');
			}
		}
	?>
	
	<body>
		<h1>
			<strong>
				<center>
					Professional Program Managment System<br><br>
				</center>
			</strong>
		</h1>
	
		<center-left>
			Please enter your credentials below or click the button to register.
		</center-left>
		
		<form method="post" action="register.php">
			<td><input type="submit" name="register_btn" value="Register"></td>
		</form>
		
		<br><br><br>
		
		<form method="post" action="index.php">
			<table>
				<tr>
					<td>Username: </td>
					<td><input type="text" name="username" class="textInput"></td>
				</tr>
				<tr>
					<td>Password: </td>
					<td><input type="password" name="password" class="textInput"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="login_btn" value="Login"></td>
				</tr>
			</table>
		</form>
	</body>
</html>


