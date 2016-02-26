<?php

	require_once("connect.php");
	$email = @$_POST['email'];
	$query = mysql_query("SELECT * FROM user WHERE email='$email'");
	$count = mysql_num_rows($query);
	if($count == 0){
		echo "ok";
	}else{
		echo "not ok";
	}
	
	
	
	

?>