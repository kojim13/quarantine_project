<?php
	session_start();	
	 		
?>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>home Page</title>

<script>



var images = ['del.jpg' ,'cans.jpg' , 'bag.jpg']; 

var i = 0;

setInterval(function() {
      
      document.getElementById("home_div").style.backgroundImage = "url(" + images[i] + ")";
           i = i + 1;
      if (i == images.length) {
        i =  0;
      }
}, 2000);


</script>
</head>

<body>

<?php 

	include "header_inc.php";
 	              				 ?>
 	              				 
 	              				 
 	              				 
<div id="home_div" class="home_page_div">

<p class="home_page_p">KOJIM MARKET&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p> 

קנו את סל הקניות שלכם בלי לצאת מהבית&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
שירות מהיר ובטוח!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<button class="home_page_buttom" onclick="location.href='subscribe.php'">לחץ כאן להרשמה</button>
</div> 	      

    				 
 	              				 
 	              				 
 	              				 
 	              				 
       				 
 	              				 
 	              				 
 	              				 
           				 
 	              				 

<?php 

	include "footer_inc.php";
 	              				 ?>
    				 
 	              				 
 	  

</body>

</html>
