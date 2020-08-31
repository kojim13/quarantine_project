<?php
	session_start();	
	 include "inc_db.php";
		
?>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>customer_reports</title>
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

        
        
        
        ?>
 
        ]);

        var table = new google.visualization.Table(document.getElementById('table_div'));

        table.draw(data, {showRowNumber: true, width: '100%', height: '100%'});
      }
    </script>





</head>

<body>
		<table id="table_div" style="width:100%;height:100%"  dir="rtl">
		
		
		</table>

</body>

</html>
