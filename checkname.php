<?php
	require_once("connect.php");
	$username = @$_POST['username'];
	$query = mysql_query("SELECT * FROM user WHERE username='$username'");
	$count = mysql_num_rows($query);
	if($count == 0){
		echo "ok";
	}else{
		echo "not ok";
	}
?>