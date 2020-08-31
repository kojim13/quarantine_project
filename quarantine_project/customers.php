<?php 

	session_start();
		
 	              				 ?>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<title>customers</title>

<script>


var myWindow;
function new_order(){


 myWindow = window.open("orders.php", "neworder", "width=700, height=500");


}

function search(){

document.getElementById('left_frame').src="friends.php";


}

</script>



</head>

<body>
	              				 
 	              				 
<?php 

	include "header_inc.php";
 	              				 ?>
<script>



document.getElementById('name').innerHTML='<?php echo $_SESSION["customer_name"]  ?>, התנתקות'+"    "+"<i style='font-size:24px' class='fas'>&#xf508;</i>";


</script> 	              				 
 	              				 



<table style="width: 100%;" dir="rtl">
	<tr>
	
	    <td class="customers_right_panel" valign="top" >
		<iframe class="right_frame" src="customer_panel_right.php"> </iframe>
        <button class="home_page_buttom"onclick="new_order()">הזמנה חדשה</button>
        <br><br>
        <form name="reports" method="post" action="openreport.php">
        <button class="home_page_buttom" >קבלת דוחות</button>
        </form>
        
        <button class="home_page_buttom" onclick="search()" >&nbsp;&nbsp;&nbsp;&nbsp;היכרות&nbsp;&nbsp;&nbsp;&nbsp;</button>

				
		
		
		
		
		</td>
		<td class="customers_left_panel"valign="top">
		
		<iframe id="left_frame" class="left_frame" ></iframe>
		
		
		
		</td>
	</tr>
</table>
 	              				 
 	              				 
 	              				 
 	              				 
 <?php 

	include "footer_inc.php";
 	              				 ?>
	              				 
 	              				 
 	              				 
 	              				 



</body>

</html>
