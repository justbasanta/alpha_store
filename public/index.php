<!doctype html>
<html>
<head>
<meta charset="viewport" content="width=device-width, initial-scale=1">
<title>Alpha Department Store</title>
<link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link href="css/stylesheet.css" rel="stylesheet" type="text/css"/>
</head>
<style>
.mySlides {display:none;}
</style>
<body>
<div class="wrapper">
	<div class="banner">
    	<div class="text">
            <p>Welcome to </p>
            <h1>Alpha Departmental Store</h1>
         </div>  
           <div class="image" style="max-width:1349px">
            <img class="mySlides w3-animate-left" src="images/1.jpg" style="width:100%">
            <img class="mySlides w3-animate-right" src="images/2.jpg" style="width:100%">
            <img class="mySlides w3-animate-left" src="images/3.jpg" style="width:100%">
            <img class="mySlides w3-animate-right" src="images/4.jpg" style="width:100%">
           </div>
     </div>
    <script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2000);
}
</script>
    <div class="nav-bar">
    	<table border="0px" cellpadding="0px" cellspacing="0px" width="1349px" height="70px">
        	<tr>
        		<td align="center"><a href="#">Home</a></td>
                <td align="center"><a href="#">Our Branches</a></td>
                <td align="center"><a href="#">Meet the board</a></td>
                <td align="center"><a href="#">Our Services</a></td>
                <td align="center"><a href="#">Contact US</a></td>
        	</tr>
        </table>
    </div>
    <div class="content">
    	<div class="welcome">
    
    	<h3>Welcome to Alpha Store</h3><br/>
        	<p>
        	Since 1994 A.D, Alpha Store has grown from a ‘single shutter’ 150 sq. ft. cold store to become the leading supermarket and departmental store chain in Nepal, and the highest tax payer in the sector since 2012 A.D. with more than 30,000 customers daily.There are currently seven (7) stores conveniently located in central Kathmandu and other major cities of Nepal.
        	</p><br/><br/><br/>
        	<p>
        	Alpha Store offers a full range of 105,000 products from almost 700 local and international suppliers, including a wide range of groceries, fresh fruits and vegetables; a broad range of leading international liquor, toiletries and cosmetics brands; and an extensive choice of kitchenware, clothing, sports, toys and electrical items. Furthermore, both premises include excellent value jewellery stores that offer a wide range of gold and silver ornaments in both traditional and modern styles.
        	</p>
    	</div>
    	<div class="ads">
        	<p>Something ...
            </p>
    	</div>
        <br clear="all" />
    </div>
    <div class="footer">
    	<?php include('includes/footer.php') ?>
    </div>

</div>

</body>
</html>