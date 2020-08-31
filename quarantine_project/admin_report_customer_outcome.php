<?php
	    session_start();	
		unset($_SESSION['err']);
		  include "inc_db.php";
		  $id=$_SESSION['supp_id'];
		  $customer_id=0;
		
	
?>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>admin_report_customer_outcome</title>
<style>


body{
	font-family:"Calibri Light";
	background-color:#FBF9F1;
	margin:0 0 0 0;
		
}


</style>

<script>

function getcustomer() {

    var e2 = document.getElementById('Selectcostumer_outcome');
    
	
	var name = e2.options[e2.selectedIndex].text;

	var costumer = e2.options[e2.selectedIndex].value;
	console.log(costumer);
	
		
	
	use_ajax('show',"table_report_ajax.php?c_id="+costumer+"&c_name="+name+"");
	
	

}


function use_ajax(tdid,url) 

{
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById(tdid).innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", url, true);
  xhttp.send();
}





</script>
</head>

<body>




<table style="width: 100%;vertical-align:top;text-align:center;overflow-y:scroll;" dir="rtl" align="center"  >
	
	<tr>
	<td colspan="2">
	
	<strong>בחר לקוח</strong>			
				
				<select id="Selectcostumer_outcome" name="Selectcostumer" onchange="getcustomer()" >
				
				
			<?php
			
                $city_code =$_SESSION['supp_citycode'];				
	
				$result1 = $conn->query("SELECT * from user where user.town =\"$city_code\"");
			
				if ($result1->num_rows > 0)
				{
					while($row1 = $result1->fetch_array(MYSQLI_ASSOC))
					{
						
						echo '<option value="'.$row1['id'].'" >'.$row1['name'].'</option>';
					}
				}
				$result1->free();
				
			?>
			</select>


    </td>
	
	</tr>
	

</table>

<div id="show" style="width:100%; text-align:center ;vertical-align:top"></div>




</body>

</html>
