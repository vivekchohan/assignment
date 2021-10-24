<?php

if (isset($_POST['submit']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];

	if ($username == "admin" && $password == "mypassword")
	{
		echo "You have successfully logged in";
	} else {
		echo "Login failed. Try Again.";
	}
}
?>