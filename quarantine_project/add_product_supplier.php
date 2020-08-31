<?php
	session_start();	
	include "inc_db.php"; 
	unset($_SESSION['err']);		
?>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>add_product</title>
</head>

<body>


<strong>הוסף מוצר להזמנה</strong>
				<br><br>
				
				
				<strong>בחר לקוח</strong>			
				
				<select id="Selectcostumer" name="Selectcostumer" >
				
				
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
 		
				<br><br>
				
            <strong>בחר מוצר</strong>
			<select id="Selecproduct" name="Selectproduct" >
			
				
			<?php
			
                $city_code =$_SESSION['supp_citycode'];				
	
				$result1 = $conn->query("SELECT `p_description` FROM `product` INNER JOIN shop ON product.p_shop_id = shop.s_id WHERE shop.s_town_id =\"$city_code\"");
			
				if ($result1->num_rows > 0)
				{
					while($row1 = $result1->fetch_array(MYSQLI_ASSOC))
					{
						
						echo '<option >'.$row1['p_description'].'</option>';
					}
				}
				$result1->free();
				
			?>
			</select>
			<br><br>
			
			
					
			<form name="send" method="post" action="CP.php">
			
			
			<button class="ajax_buttom" onclick="send_order()">שלח הזמנה !</button>
			
			<input id="product_name" name="product_name" type="hidden">
			
			<input id="costumer_id" name="costumer_id" type="hidden">

            
			</form> 

				 




</body>

</html>
