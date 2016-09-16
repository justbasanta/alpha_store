<?php
	session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Panel</title>
</head>


<body>
	<div class="wrapper">
    	<a href="#"><div class="dept-1"><h4 align="center">Head Manager</h4></div></a>
        
    	<a href="#"><div class="dept-2"><h4 align="center">Branch Manager</h4></div></a>
        
        <a href="sales-admin.php"><div class="dept-3"><h4 align="center">Sales Department</h4></div></a>
        
        <a href="purchase-admin.php"><div class="dept-4"><h4 align="center">Purchase Department</div></h4></a>
       
        <a href="it-admin.php"><div class="dept-5"><h4 align="center">IT Department</div></h4></a>
        
        <a href="marketing-admin.php"><div class="dept-6"><h4 align="center">Marketing Department</div></h4></a>
        
        <a href="security-admin.php"><div class="dept-7"><h4 align="center">Security Department</div></h4></a>
        
        <a href="finance-admin.php"><div class="dept-8"><h4 align="center">Finance Department</div></h4></a>
        
        <a href="hr-admin.php"><div class="dept-9"><h4 align="center">Human Resource Department</div></h4></a>

    </div>
    <div class="footer">
    <?php 
		include('../includes/footer.php');
	?>
    </div>
    <style>
		.wrapper{
			margin:0 auto;
			padding:0px;
			height:auto;
			width:1349px;
			background-color:rgba(245,252,208,1.00);
		}
		.wrapper .dept-1, .dept-2, .dept-3, .dept-4, .dept-5, .dept-6, .dept-7, .dept-8, .dept-9{
			height:10%;
			
			
			background-color:rgba(171,236,43,1.00);
			color:rgba(0,0,0,1.00);
			font-size:24px;
			border:0.1px solid rgba(121,255,0,1.00);
			border-radius:15px;
			box-shadow:2px 2px 2px gray;
			
			
		}
		.wrapper a{
			text-decoration:none;
		}
		.wrapper h4{
			font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
			padding:3px;
		}
		.wrapper .dept-1:hover, .dept-2:hover, .dept-3:hover, .dept-4:hover, .dept-5:hover, .dept-6:hover, .dept-7:hover, .dept-8:hover, .dept-9:hover{
			background-color:rgba(0,216,227,1.00);
			color:rgba(49,0,190,1.00);
		}
		
	.footer{
	padding-top:30px;
	padding-bottom:30px;
	height:300px;
	background-color:rgba(130,128,128,1.00);
	width:100%;
}
 .footer .section-1{
	float:left;
	width:33.3%;
	text-align:center;
	height:100%;
	border-right:ridge 2px white;
} 

 .footer .section-1 li
{
	margin-top:10px;
}
 .footer .section-2{
	width:33.3%;
	float:left;
	text-align:center;
	height:100%;
	border-right:ridge 2px white;
}

 .footer .section-3{
	width:33.3%;
	float:left;
	padding-left:10px;
	height:100%;
}

 .footer .section-3 .facebook
{
	height:33%;
	width:100%;
	background:url(../public/images/fblogo.png)  no-repeat;
}
 .footer .section-3 .twitter
{
	height:33%;
	width:100%;
	background:url(../public/images/twitterlogo.png) no-repeat;
}
 .footer .section-3 .insta
{
	height:33%;
	width:100%;
	background:url(../public/images/Instagramlogo.png) no-repeat;
}

 .footer .section-3 .facebook p, .insta p, .twitter p
{
	margin-left:70px;
}

	</style>
    

</body>
</html>