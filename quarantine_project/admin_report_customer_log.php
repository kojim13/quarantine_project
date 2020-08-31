<?php
	    session_start();	
		unset($_SESSION['err']);
		  include "inc_db.php";
		  $id=$_SESSION['supp_id'];
		
	
?>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>admin_report_customer_log</title>
<style>


body{
	font-family:"Calibri Light";
	background-color:#FBF9F1;
	margin:0 0 0 0;
	overflow-y:auto;	
}


</style>
</head>

<body>




<table style="width: 100%;height:50%;vertical-align:top;text-align:center" dir="rtl" align="center" >
	<tr>
	
	<td colspan="2" style="text-decoration: underline"><strong><em>דוח כניסת לקוחות</em></strong></td>
	
	</tr>
	<tr>
		<td><strong>שם לקוח</strong></td>
		<td><strong>תאריך כניסה אחרון</strong></td>
	</tr>
	
	<?php
							
		       $supp_city=$_SESSION['supp_citycode'];
		       
		       $result = $conn->query("SELECT * FROM user where town=\"$supp_city\"");
			
			
			
			
				if ($result->num_rows > 0)
				{
	               while($row1 = $result->fetch_array(MYSQLI_ASSOC))
					{
						
						echo  ' <tr> <td >'.$row1['name'].'</td> <td>'.$row1['dt'].'</td>  </tr>'  ;                    

					}
					}
			//$result->free(); 	
				
				
				
			?>


	
	
</table>




</body>

</html>
