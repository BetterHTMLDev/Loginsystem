<?php

	require_once("connect.php");
	$firstname = @$_POST['firstname'];
	$lastname = @$_POST['lastname'];
	$username = @$_POST['username'];
	$email = @$_POST['email'];
	$password = @$_POST['password'];
	
	$query = mysql_query("INSERT INTO user VALUES('$firstname','$lastname','$username','$email','$password')");
	
	echo "Erfolgreich registriert.";
	
	
?>