<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cloth</title>
<link href="../public/css/admin.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<div class="wrapper">
<h2 align="center">Garments</h2>
<div class="form">
	<form method="get" action="#" enctype="multipart/form-data">
    	<label>Product Name:</label> <input type="text"id="productname" name="productname"/><br/>
        <label>Cloth Type:</label> <input type="radio"id="type1" name="cloth-type" value="woolen" checked="checked"/>Woolen
        						   <input type="radio"id="type2" name="cloth-type" value="cotton"/>Cotton
                                   <input type="radio"id="type3" name="cloth-type" value="silk"/>Silk
                                   <input type="radio"id="type4" name="cloth-type" value="mixed"/>Mixed<br/>
         <label>Cloth For:</label> <input type="radio" name="gender" value="men" checked="checked"/>Men<br/>
        						   <input type="radio" name="gender" value="women"/>Women<br/>                         		  <input type="radio" name="gender" value="children"/>Children<br/>
        <label>Model No.:</label> <input type="text"id="modelno"/><br/>
        <label>Supplier:</label> <input type="text"id="supplier"/><br/>
        <label>Purchased date:</label> <input type="text"id="Purchasedate"/><br/>
        <label>Quantity:</label> <input type="text"id="Purchasedate"/><br/>
        <label>Price:</label> <input type="text"id="name"/><br/>
        <input type="submit" value="add" />
        </form>
       
</div>
</div>
</body>
</html>