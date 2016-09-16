<?php
	session_start();
	include('../config/db.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Finance Admin</title>
<link href="../public/css/admin.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="wrapper">
<h2> Log In Panel </h2>
<?php
		if(isset($_GET['err'])&&$_GET['err']=='yes')
		{
	?>
    <div style="color:#F00; text-align:center; font-size:16px;">Username/Password Incorrect</div>
    <?php
		}
	?>
    <?php 
		if(isset($_SESSION['lia'])&&$_SESSION['lia']=='yes')
		{
			unset($_SESSION['lia']);
	?>
    <div style="color:#F00; text-align:center;">Please Log in Again</div>
    <?php
		}
	?>
<div class="login">
	<form method="post" action="../model/finance-admin-action.php" enctype="multipart/form-data">
    	Username: <input type="text" id="username"name="username" placeholder=" Enter Your Username"><br/>
		Password: <input type="password" id="password"name="password" placeholder=" Enter Your Password"><br/>
        <input type="submit" value="Log In" required/><br/>
	</form>
</div>
</div>
</body>
</html>