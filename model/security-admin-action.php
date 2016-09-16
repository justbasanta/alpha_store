<?php
	session_start();
	include('../config/db.php');
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$q = "SELECT * FROM `registration_tbl` WHERE username = '$username' AND password = '$password' AND department_id = '6'";
	
	$result = mysql_query($q);
	
	$num = mysql_num_rows($result);

if($num==0)
	{
		header("Location: ../admin/security-admin.php?err=yes");
		exit;
	}
else
	{
		$row = mysql_fetch_array($result);
		$_SESSION['username'] = $username;
		
		$_SESSION['login'] = 'yes';
		//echo $_SESSION['fullname'].' '.$_SESSION['type'];
		
			header('Location: ../admin/security-admin.php');
	}
?>
