<?php
	session_start();
	include('../config/db.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Supplier Details</title>
<link rel="stylesheet" href="../public/css/admin.css" type="text/css"/>
</head>

<body>
	<div class="wrapper">
    <h2 align="center">Supplier's Detail Entry</h2>
    	<div class="form">
        <form method="get" action="#">
        <label>Supplier Name:</label> <input type="textbox"id="supplier_name"/><br/>
        <label>Supplier address:</label> <input type="textbox"id="supplier_address"/><br/>
        <label>Contact Number:</label> <input type="textbox"id="contact"/><br/>
        <label>Category:</label><select>
        						<option>Electronics</option>
                                <option>Clothing</option>
                                <option>Fooding</option>
                                <option>Others</option>
                                </select>
        <label>Deal Date:</label> <input type="textbox"id="deal_date"/><br/><br/>
        <input type="submit" value="add" />
        </form>
        </div>
    
    </div>
</body>
</html>