<?php
	session_start();	
	include "inc_db.php"; 
	unset($_SESSION['err']);
	$id=$_SESSION['supp_id'];		
?>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>frame_insert_new_product</title>


</head>

<body>


<div style="width:100%;height:100%; ">

<strong> הכנסת מוצר חדש :  </strong>


<br><br>

	<table style="width: 100%; height:40%;" dir="rtl">
		<tr>
			<td>שם מוצר :</td>
			<td><input id="product_name" type="text" ></td>
		</tr>
		<tr>
			<td>קטגוריית מוצר : </td>
			<td>
			
			<select id="Selectcategory" name="Selectcategory"  >
				
			<?php
			
					
				$result81 = $conn->query("SELECT * FROM `category` ");
			
				if ($result81->num_rows > 0)
				{
					while($row81 = $result81->fetch_array(MYSQLI_ASSOC))
					{
						
						echo '<option value="'.$row81['c_id'].'" >'.$row81['c_description'].'</option>';
					}
				}
				$result81->free();
				
			?>
			</select>

			
			</td>

		</tr>
		<tr>
			<td>מחיר :</td>
			<td><input id="cost" type="number" ></td>

		</tr>
		<tr>
		<td></td>
		<td></td>
		</tr>
		
		<tr style="text-align: center">
   
		
		
		 
		<td>
		
       	<form name="new_product" method="post" action="add_new_product_db.php" >
		
		<input type="hidden" id="pro_name" name="p_name">
		<input type="hidden" id="pro_category" name="p_category">
		<input type="hidden" id="pro_cost" name="p_cost">
		

        <button onclick="get_elemnts_insert()"  class="ajax_buttom"  >הוסף מוצר</button>
		
		</form>
		
		</td>
		
		
		<td><button  onclick="use_ajax('update','update_products.php')"  >חזור</button></td>
		</tr>
	</table>
	
<br><br>





</div>


</body>

</html>
