<?php 
// Registeration page - allows registering and signing in.
	require 'db.php';
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Registration</title>
		<?php // include 'css/css.html'; ?>
	</head>
	
	<?php
	if (isset($_POST['submit_btn']))
	{
		$username = mysqli_real_escape_string($mysqli, $_POST['username']);
		$password = mysqli_real_escape_string($mysqli, $_POST['password']);
		$password2 = mysqli_real_escape_string($mysqli, $_POST['password2']);
	
		if ($password == $password2)
		{
			$password = md5($password);
			$query = "INSERT INTO `SeniorProject2017`.`User` (`Username`, `FirstName`, `MiddleInitial`, 
					 `LastName`, `Gender`, `Password`, `Email`, `Phone`, `StreetAddress`, `Apt_Building`, 
					 `City`, `State`, `ZipCode`, `Country`, `UserType`)
					  VALUES ('$username', 'Jose', 'A', 'Casa', 'M', '$password', 'b@c', 
					 '333-333-3333', '11111', '11', 'Miami', 'Fl', '12345', 'US', 'User')";
			$result = mysqli_query($mysqli, $query);
			if ($result)
			{
				$_SESSION['message'] = "You have successfully registered!";
			}
			else
			{
				$_SESSION['message'] = "There was an error registering.";
			}
			header('location: message.php');
		}
		else
		{
			
		}
	}
	?>
	
	<body>
		<h1>
			<strong>
				<center>
					Registration Form<br><br>
				</center>
			</strong>
		</h1>
	
		<center-left>
			Enter the values for each field.<br>
		</center-left>
		
		<form method="post" action="register.php">
			<center-left>
				<table>
					<tr>
						<td>* Username: </td>
						<td><input type="text" name="username" class="textInput"></td>
					</tr>
					<tr>
						<td>* Password: </td>
						<td><input type="password" name="password" class="textInput"></td>
					</tr>
					<tr>
						<td>* Re-enter Password:: </td>
						<td><input type="password" name="password2" class="textInput"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="submit_btn" value="Submit"></td>
					</tr>
				</table>
			</center-left>
		</form>
		
		<strong><br>* Required</strong>
	</body>
</html>