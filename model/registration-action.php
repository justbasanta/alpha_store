<?php
	session_start();
	
	include('../config/db.php');
	
	$name = $_POST['name'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$department_id = $_POST['department'];
	
		$q = "INSERT INTO `registration_tbl`(`register_ID`, `department_ID`, `name`, `contact`, `email`, `username`, `password`) VALUES (NULL, '$department_id', '$name', '$contact', '$email', '$username', '$password');";
		//echo mysql_error();
		$result = mysql_query($q);
		header('Location: ../admin/registration.php');
?>
	