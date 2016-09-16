<?php
	session_start();
	include('../config/db.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Purchase Department</title>/>
</head>

<body>
<div class="wrapper">
	<div class="add-product">
    <h4><a href="electronicproduct.php">Add New Product</a></h4>
    </div>
    <div class="add-category">
    <h4> <a href="newcategory.php">Add New Category</a></h4>
    </div>
    <div class="view-products">
    <h4>View All Products</h4>
    </div>
    <div class="employee">
    <h4>Manage Employee</h4>
    </div>
    <style>
		/*styling purchase departent*/
*{
	margin:0px;
	padding:0px;
}
.wrapper{
	height:400px;
	width:50%;
	background-color:#CFF;
	margin:0px auto;
	padding:30px;
	
}
.wrapper a{
	text-decoration:none;
	font-size:16px;
	color:rgba(255,255,255,1.00);
}
.wrapper .add-product{
	width:50%;
	height:50px;
	margin:1px;
	background-color:#F66;
	border:1px solid #F99;
	border-radius:5px;
	text-align:center;
}
.wrapper .add-product h4{
	padding:15px;
}
.wrapper .add-category{
	width:50%;
	height:50px;
	margin:10px;
	background-color:#F66;
	border:1px solid #F99;
	border-radius:5px;
	text-align:center;
}
.wrapper .view-category{
	width:50%;
	height:50px;
	margin:10px;
	background-color:#F66;
	border:1px solid #F99;
	border-radius:5px;
	text-align:center;
}
.wrapper .view-products{
	width:50%;
	height:50px;
	margin:10px;
	background-color:#F66;
	border:1px solid #F99;
	border-radius:5px;
	text-align:center;
}
.wrapper .employee{
	width:50%;
	height:50px;
	margin:10px;
	background-color:#F66;
	border:1px solid #F99;
	border-radius:5px;
	text-align:center;
}
	</style>

</div>


</body>
</html>