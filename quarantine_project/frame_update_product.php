<?php
	session_start();	
	include "inc_db.php"; 
	unset($_SESSION['err']);
	$id=$_SESSION['supp_id'];		
?>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>frame_update_product</title>
</head>

<body>
<br>
<strong> אנא בחר מוצר :  </strong>
<br><br>
<select id="Selecproduct_update" name="Selectproduct_update"  >
				
			<?php
			
					
				$result80 = $conn->query("SELECT * FROM `product`  WHERE p_shop_id =\"$id\"");
			
				if ($result80->num_rows > 0)
				{
					while($row80 = $result80->fetch_array(MYSQLI_ASSOC))
					{
						
						echo '<option value="'.$row80['p_id'].'" >'.$row80['p_description'].'</option>';
					}
				}
				$result80->free();
				
			?>
			</select>
			
		<br><br>
		
	<div id="workframe" style="width:100%">
		<button class="ajax_buttom" onclick="use_ajax('workframe','update_table.php')" >עדכון מוצר</button>
	
	
<br><br><br>	
		
	<form name="del_product" method="post" action="delete_product.php" >	
	<input type="hidden" id="pro_del" name="p_del"> 
		
		<button class="ajax_buttom" style="background-color:red; border:thin red solid" onclick="delete_product()"  >מחיקת מוצר</button>
		
	</form>	
	</div>	
		
		<br><br>
		
	
			
<button onclick="use_ajax('update','update_products.php')" >חזור</button>

</body>

</html>
