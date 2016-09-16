<?php
	session_start();
	include('../config/db.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration</title>
<link rel="stylesheet" href="../public/css/admin.css" type="text/css"/>
</head>
<body>

<h1>REGISTRATION OF NEW USER</h1>
<div class="form">
<form method="POST" action="../model/registration-action.php">
<label for="name">Name:</label> <input type="text" id="name" name="name" placeholder="Full Name"/><br/>
    <label for="email">Email:  </label> <input type="email" id="email" name="email"/><br/>
    <label for="contact">Contact Number: </label><input type="text" id="contact" name="contact"/><br/>
     <label>Department</label><select name="department">
     <?php
	 	$q = "SELECT * FROM `department_tbl`;";
			$result = mysql_query($q);
			$num = mysql_num_rows($result);
			
			for($i=1;$i<=$num;$i++){
				$row = mysql_fetch_array($result);
				$department_name = $row['department_name'];
				$id = $row['department_ID'];
	 ?>
        	<option value="<?php echo $id; ?>"><?php echo $department_name; ?></option>
            <?php
			}
			?>
            </select><br/>
    <label for="username">Username:  </label> <input type="text" id="username" name="username" placeholder="choose a username"/><br/>
<label for="password">Password:   </label> <input type="password" id="password" name="password" placeholder="choose a passord"/><br/><br/>
<input type="submit" value="submit" /><br/>
</form>

</div>
<style>
	.form{
		width:50%;
		height:500px;
		margin:30px auto;
		padding:20px;
		background-color:rgba(203,179,179,1.00);
		border:1px solid rgba(184,166,166,1.00);
		border-radius:10px 10px;
		
	}
	.form label{
		color:rgba(255,255,255,1.00);
		font-family:"Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;
	}
</style>


</body>
</html>
