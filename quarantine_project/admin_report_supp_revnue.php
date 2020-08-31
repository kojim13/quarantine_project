<?php
	    session_start();	
		unset($_SESSION['err']);
		  include "inc_db.php";
		  $id=$_SESSION['supp_id'];
		
	
?>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>admin_report_supp_revnue</title>
<style>


body{
	font-family:"Calibri Light";
	background-color:#FBF9F1;
	margin:0 0 0 0;
		
}


</style>
</head>

<body>




<table style="width: 100%;height:50%;vertical-align:top;text-align:center;overflow-y:scroll;" dir="rtl" align="center"  >
	<tr>
	
	<td colspan="2" style="text-decoration: underline"><strong><em>הסטורייה רכישות לפי מוצר&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;סה"כ הכנסות :     <?php 
	

     $id_rev=$_SESSION['supp_id'];	
     $result33 = $conn->query("SELECT SUM(l_price) FROM log  where l_S_id=\"$id_rev\"");
	 $row13 = $result33->fetch_array(MYSQLI_ASSOC);
	 $sum =   $row13['SUM(l_price)'];
	 echo number_format((float)$sum, 2, '.', '');
	  
                                                              ?>    </em></strong></td>
	
	</tr>
	<tr>
		<td><strong>שם מוצר</strong></td>
		<td><strong>תאריך רכישה</strong></td>
	</tr>
	
	<?php
							
		      
		       
		       $result = $conn->query("SELECT * FROM log INNER JOIN product on log.l_p_id=product.p_id WHERE log.l_s_id=\"$id\"");
			
			
			
			
				if ($result->num_rows > 0)
				{
	               while($row1 = $result->fetch_array(MYSQLI_ASSOC))
					{
						
						echo  ' <tr> <td >'.$row1['p_description'].'</td> <td>'.$row1['l_dt'].'</td>  </tr>'  ;                    

					}
					}
			//$result->free(); 	
				
				
				
			?>


	
	
</table>




</body>

</html>
