<?php
	session_start();
	include('../config/db.php');
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$q = "SELECT * FROM `registration_tbl` WHERE username = '$username' AND password = '$password' AND department_id = '1'";
	
	$result = mysql_query($q);
	
	$num = mysql_num_rows($result);

if($num==0)
	{
		header("Location: ../admin/purchase-admin.php?err=yes");
		exit;
	}
else
	{
		$row = mysql_fetch_array($result);
		$_SESSION['username'] = $username;
		
		$_SESSION['login'] = 'yes';
		//echo $_SESSION['fullname'].' '.$_SESSION['type'];
		
			header('Location: ../admin/purchase.php');
	}
?>
