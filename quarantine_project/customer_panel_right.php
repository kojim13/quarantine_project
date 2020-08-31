<?php 

	session_start();
	
	
	
 	              				 ?>

<html>

<head>
<link rel="stylesheet" type="text/css" href="design_bar.css"  media="all">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>customer_panel_right</title>
<script>
function reports(){

document.getElementById('left_frame_x').src="customer_reports.php"


}


</script>
</head>

<body>


<table style="width: 100%;height:100%" dir="rtl">
	<tr>
	
	    <td class="customers_right_panel" valign="top" >
		
		
		<i class='far fa-user-circle' style='font-size:48px;'></i><br>
		צרכן:
		<p class="sign_in_p" style="text-decoration: underline"> <?php echo $_SESSION['customer_name']  ?> </p>
		
        <p class="customers_p">  מספר המשתמשים במערכת: <?php echo $_SESSION['numofusers']  ?></p>
       
        <p class="customers_p"> מספר הספקים במערכת: <?php echo $_SESSION['numofsupp']  ?> </p>
        
        <p class="customers_p">  מספר השיחות במערכת: <?php echo $_SESSION['numofconv']  ?></p>



				
		
		
		
		
		</td>
		
	</tr>
</table>



</body>

</html>
