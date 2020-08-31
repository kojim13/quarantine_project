<?php
	    session_start();	
		unset($_SESSION['err']);
		  include "inc_db.php";
		
	
?>

<html>

<head>
<link rel="stylesheet" type="text/css" href="design_bar.css"   media="all">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>orders</title>

<script>

products = [];

function $(el) 				{ return document.getElementById(el); }
function add_product(){
	
var e = $("Selecproduct");
var e2 = $("Selectshop");
var product = e.options[e.selectedIndex].text;
var supplier = e2.options[e2.selectedIndex].text;
	
	
products.push(product);
    
$("listproduct").value=products;
	
           
 }
 
function open_talk()
{


var e = document.getElementById('Selectshop');
var supplier_ID = e.options[e.selectedIndex].value;

	
x1='s_'+supplier_ID;
x2='u_<?php echo $_SESSION["customer_id"];?>';


	
t2 = window.open("chat.php?t1="+x1+"&t2="+x2+"","T2","width=350px; height=500px;");
	
}
 


</script>



</head>

<body>


<table style="width: 100%;height:100%;" dir="rtl">
	<tr>
		<td class="order_td_right" >
		
		<p class="sign_in_p">מבצע הזמנה: <?php echo $_SESSION['customer_name']  ?></p>
        <p class="customers_p">  עיר:  <?php echo $_SESSION['customer_city']  ?>     </p>
        <p class="customers_p">  כתובת למשלוח:  <?php echo $_SESSION['customer_address']  ?> </p>


		
		
		
		
		</td>
		<td style="overflow-y:scroll;" valign="top">
		
		
		
		
		
		<table style="width: 50%" align="right" >
			<tr>
				<td>בחר ספק מהרשימה</td>
				<td>
				<select id="Selectshop" name="Selectshop" >
				
			<?php
			    $city_code = $_SESSION['customer_citycode'];

				$query = "select s_id,s_name from shop where s_town_id=\"$city_code\"";	
				$result = $conn->query($query);
			
				if ($result->num_rows > 0)
				{
					while($row = $result->fetch_array(MYSQLI_ASSOC))
					{
						
						echo '<option value="'.$row['s_id'].'" >'.$row['s_name'].'</option>';

					}
					$result->free();
				}
				 else{echo '<option > No Valid shop </option>';}
			?>
			</select>
				
				
				
				
				
				
				</td>
			</tr>
			<tr>
				<td><br><br></td>
			</tr>


			<tr>
				<td>בחר מוצר מהרשימה</td>
				<td>
				<select id="Selecproduct" name="Selectproduct"  >
				
			<?php
			
					
				$result1 = $conn->query("SELECT `p_description` FROM `product` INNER JOIN shop ON product.p_shop_id = shop.s_id WHERE shop.s_town_id =\"$city_code\"");
			
				if ($result1->num_rows > 0)
				{
					while($row1 = $result1->fetch_array(MYSQLI_ASSOC))
					{
						
						echo '<option >'.$row1['p_description'].'</option>';
					}
				}
				$result1->free();
				//$conn->close();
			?>
			</select>

				
				
				
				
				</td>
			</tr>
			<tr>
			
			<td>
			<button class="order_buttom" onclick="add_product()" > הוסף מוצר לרשימה</button>

			
			</td>
			
			</tr>

		</table>
		
		
		
		
		<textarea id="listproduct" class="list" dir="rtl" ></textarea>	
				<table class="openchat">
	<tr>
		<td onclick="open_talk()">פתיחת צ'ט עם ספק</td>



	</tr>
</table>
<br><br><br><br>
				<table class="order_orders">
				<tr>
				<td colspan="5" style="text-align:center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>רכישות קודמות</strong></td>
				</tr>
					<tr >
						<td style="border:thin black solid"><strong>מוצר</strong></td>
						<td style="border:thin black solid"><strong>מחיר</strong></td>
						<td style="border:thin black solid" ><strong>ספק</strong></td> 
						
						<td style=" border:thin black solid"><strong>תאריך</strong></td>
						
					</tr>
		    
			
				<?php
		   
				
				
			$login = $_SESSION['customer_login'];
			$id = $_SESSION['customer_id'];
           
			
			
		    $result = $conn->query("SELECT * FROM log INNER join product ON log.l_p_id=product.p_id INNER JOIN shop on log.l_s_id = shop.s_id where l_u_id=\"$id\" order by log.l_dt DESC");
			
			
			
			
				if ($result->num_rows > 0)
				{
	               while($row1 = $result->fetch_array(MYSQLI_ASSOC))
					{
						
						echo  ' <tr	> <td id="disp">'.$row1['p_description'].'</td> <td style=" border-right:thin white solid">'.$row1['l_price'].'</td> <td style=" border-right:thin white solid">'.$row1['s_name'].'</td>  <td style=" border-right:thin white solid">'.$row1['l_dt'].'</td>  </tr>'  ;                    

					}
					}
			//$result->free(); 	
				
				
				
			?>

			
		</table>


		</td>
	</tr>
	
	
</table>






<script>


x1='<?php echo $supp_id;?>';
x2='<?php echo $_SESSION["customer_id"];?>';

console.log(x1);

console.log(x2);

</script>






</body>

</html>
