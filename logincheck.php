<?php
	
	$p = 0;
	require_once("connect.php");
	$sub = @$_POST['email'];
	$pass = @$_POST['password'];
// RICHTIGE TABELLE ETC HIER EINTRAGEN!	
	$query = mysql_query("SELECT * FROM user WHERE email='$sub' OR username='$sub'");  
	
		while($row = mysql_fetch_assoc($query)){
			$cpass = $row['password'];
			if($cpass==$pass){
				echo "complete";
				$username = $row['username'];
				$_SESSION['user'] = $username;
				$p = 1;
		}
	}
	if($p == 0){
		echo "failed";
	}
?>