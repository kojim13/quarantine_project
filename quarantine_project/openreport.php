<?php 

	session_start();
	include "inc_db.php"	
 	              				 ?>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<title>reports</title>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
      google.charts.load('current', {'packages':['table']});
      google.charts.setOnLoadCallback(drawTable);

      function drawTable() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'מוצר');
        data.addColumn('number', 'מחיר');
        data.addColumn('string', 'ספק' );
        data.addColumn('string', 'תאריך' );
        data.addRows([
        
        <?php 
        $login = $_SESSION['customer_login'];
		$id = $_SESSION['customer_id'];
           
					
		$result = $conn->query("SELECT * FROM log INNER join product ON log.l_p_id=product.p_id INNER JOIN shop on log.l_s_id = shop.s_id where l_u_id=\"$id\" order by log.l_dt DESC");
			       
        if ($result->num_rows > 0){
        	while($row1 = $result->fetch_array(MYSQLI_ASSOC))
					{
						
						echo "['".$row1['p_description']."',".$row1['l_price'].",'".$row1['s_name']."','".$row1['l_dt']."']," ;                    

					}
					
			$result->free(); 
        
        }

            $result33 = $conn->query("SELECT SUM(l_price) FROM log  where l_u_id=\"$id\" order by log.l_dt DESC");
			$row13 = $result33->fetch_array(MYSQLI_ASSOC);
			$sum =   $row13['SUM(l_price)'];

        
        
        ?>
 
        ]);

        var table = new google.visualization.Table(document.getElementById('table_div'));

        table.draw(data, {showRowNumber: true, width: '100%', height: '100%'});
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
	<td style="width:1%"></td>
	<td ><strong>היסטוריית רכישות:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;סה"כ הוצאות : <?php echo number_format((float)$sum, 2, '.', '');  ?> ש"ח
</strong></td>
	

	</tr>
	<tr>
	
	    <td class="customers_right_panel" valign="top" >
		<iframe class="right_frame" src="customer_panel_right.php"> </iframe>
             <br><br>        
        <button class="home_page_buttom"onclick="location.href='customers'" >&nbsp;&nbsp;&nbsp;&nbsp;חזור&nbsp;&nbsp;&nbsp;&nbsp;</button>

		</td>
		
		
		
		<td id="table_div" style="padding:0px; "valign="top"  > </td>
	    </tr>
</table>
 	              				 
 	              				 
 	              				 
 	              				 
 <?php 

	include "footer_inc.php";
 	              				 ?>
	              				 
 	              				 
 	              				 
 	              				 



</body>

</html>
 	     				 
 	     				 





