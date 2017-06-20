<?php
// Used to connect to the database.
error_reporting(E_ALL);
ini_set('display_errors', 'On');
$host = '127.0.0.1';
$user = 'jcasa';
$pass = 'sp2017.d@t@fiu';
$db = 'SeniorProject2017';
$mysqli = mysqli_connect($host, $user, $pass, $db);
if (mysqli_connect_errno())
{
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit;
}

//$query = "SELECT * FROM Term";
// if ($result = mysqli_query($mysqli, $query))
//{
//	while ($row = mysqli_fetch_assoc($result))
//	{
//		printf("%s", $row["TermName"]);
//	}
//}