<?php
	session_start();	
	include "inc_db.php"; 
	unset($_SESSION['err']);
	$id_customer=$_REQUEST['c_id'];	
	$name = $_REQUEST['c_name'];
	         $result33 = $conn->query("SELECT SUM(l_price) FROM log  where l_u_id=\"$id_customer\" order by log.l_dt DESC");
			$row13 = $result33->fetch_array(MYSQLI_ASSOC);
			$sum =   $row13['SUM(l_price)'];
	
?>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>table_report_ajax</title>
<script>


</script>




</head>

<body>


<table style="width:100%; text-align:center ;vertical-align:top">
	<tr>
	
	<td colspan="2" style="text-decoration: underline">
	
	<strong><em>הסטורייה רכישות לקוח :  <?php echo $name;  ?> &nbsp;&nbsp;&nbsp;סה"כ הוצאות :    
	

 <?php  echo number_format((float)$sum, 2, '.', ''); ?>    </em></strong>
                                                              
    </td>
	</tr>
	
	<tr>
			<td><strong>שם מוצר</strong></td>
		<td><strong>תאריך רכישה</strong></td>

	</tr>

<?php
							
		      
		       
		       $result = $conn->query("SELECT * FROM log INNER JOIN product on log.l_p_id=product.p_id WHERE log.l_u_id=\"$id_customer\"");
			
			
			
			
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














<!-- 


<table style="width: 100%;height:100%;" align="center"  >
	<tr>
	
	<td colspan="2" style="text-decoration: underline">
	
	<strong><em>הסטורייה רכישות לקוח :  <?php echo $name;  ?> &nbsp;&nbsp;&nbsp;סה"כ הוצאות :    
	

 <?php  echo number_format((float)$sum, 2, '.', ''); ?>    </em></strong><
                                                              
    </td>
	<tr>
	               
</table>


	<tr>
			<td><strong>שם מוצר</strong></td>
		<td><strong>תאריך רכישה</strong></td>

	</tr>

<?php
							
		      
		       
		       $result = $conn->query("SELECT * FROM log INNER JOIN product on log.l_p_id=product.p_id WHERE log.l_u_id=\"$id_customer\"");
			
			
			
			
				if ($result->num_rows > 0)
				{
	               while($row1 = $result->fetch_array(MYSQLI_ASSOC))
					{
						
						echo  ' <tr> <td >'.$row1['p_description'].'</td> <td>'.$row1['l_dt'].'</td>  </tr>'  ;                    

					}
					}
			//$result->free(); 	
				
				
				
			?> -->

