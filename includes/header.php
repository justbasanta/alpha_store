<div class="banner">
    	<div class="text">
            <p>Welcome to </p>
            <h1>Alpha Departmental Store</h1>
         </div>  
           <div class="image" style="max-width:1349px">
            <img class="mySlides w3-animate-left" src="../images/1.jpg" style="width:100%">
            <img class="mySlides w3-animate-right" src="../images/2.jpg" style="width:100%">
            <img class="mySlides w3-animate-left" src="../images/3.jpg" style="width:100%">
            <img class="mySlides w3-animate-right" src="../images/4.jpg" style="width:100%">
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