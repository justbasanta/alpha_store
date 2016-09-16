<?php
	session_start();
	include('../config/db.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Others</title>
<link rel="stylesheet" href="../public/css/new.css" type="text/css"/>
</head>
<div class="wrapper">
<h2 align="center">Miscellaneous Product</h2>
	<div class="form">
        <form method="get" action="#">
        <label>Product Name:</label> <input type="textbox"id="productname"/><br/>
        <label>Warranty Time:</label> <input type="textbox"id="warrantytime"/><br/>
        <label>Item type</label><select>
        						<option>Sports</option>
                                <option>Utensil</option>
                                <option>books</option>
                                <option>Others</option>
                                </select><br/>
        <label>Supplier:</label> <input type="textbox"id="supplier"p/><br/>
        <label>Purchased date:</label> <input type="textbox"id="Purchasedate"/><br/>
        <label>Quantity:</label> <input type="text"id="Purchasedate"/><br/>
        <label>Price:</label> <input type="textbox"id="name"/><br/>
        <input type="submit" value="add" />
        </form>
        </div>
    </div>
<body>
</body>
</html>