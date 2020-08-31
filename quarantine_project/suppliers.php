<?php
	    session_start();	
		unset($_SESSION['err']);
		  include "inc_db.php";
		  	include "header_inc.php";
		  $id=$_SESSION['supp_id'];
		
	
?>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>suppliers</title>

<script>

function open_chat(tdchat,url)
{

 var e5 = document.getElementById('Selectcustomer2');
 var costumer_ID = e5.options[e5.selectedIndex].value;
  
x2='u_'+costumer_ID;
 
x1='s_<?php echo $_SESSION["supp_id"];?>';

t2 = window.open("chat.php?t1="+x1+"&t2="+x2+"","T2","width=350px; height=500px;");


	


}

function send_order(){


	var e = document.getElementById('Selecproduct');
    var e2 = document.getElementById('Selectcostumer');
    
	var product = e.options[e.selectedIndex].text;
	
	var costumer = e2.options[e2.selectedIndex].value;
	
	   
    console.log(product);
    console.log(costumer);
    
	document.getElementById("product_name").value = product;
    document.getElementById("costumer_id").value = costumer;
    
    document.send.submit();
 
	

}


function delete_product()

{


if(confirm(['האם אתה בטוח שברצונך למחוק מוצר זה?'])){

var e100 = document.getElementById('Selecproduct_update');

var id = e100.options[e100.selectedIndex].value;



document.getElementById('pro_del').value= id;


document.del_product.submit();

}
else { alert("המוצר אינו נמחק")  }



}


function get_elemnts_insert()

{
	var elemnt = document.getElementById('Selectcategory');
    
	var category = elemnt.options[elemnt.selectedIndex].value;
	
    var product_name = document.getElementById('product_name').value ;
    
    var product_cost = document.getElementById('cost').value ;
    
    
    document.getElementById('pro_category').value= category ;
    document.getElementById('pro_name').value= product_name;
    document.getElementById('pro_cost').value= product_cost ;
    
    document.new_product.submit();
	



}

function updatedb_product()
{

var product = document.getElementById('Selecproduct_update');

var id_pro = product.options[product.selectedIndex].value;

document.getElementById('id_product').value= category = id_pro ;


document.update_product.submit();

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

 	              				 
 	              				 
<script>



document.getElementById('name').innerHTML='<?php echo $_SESSION["supp_name"]?>'+" , יציאה"+"<i style='font-size:24px' class='fas'>&#xf0d1;</i>";


</script> 




	 	              				 
 	              				

<table style="width: 100%; height:90%; ">
	<tr>
		<td class ="suppliers_td_left" dir="rtl">
		
		
		
		
		
		<table style="width: 100%;height:100%;border:thin black solid;">
			<tr>
				<td id="show_conv" class="td_add_product" >
		
		
		
		
		<button class="buttom_conv" onclick="use_ajax('show_conv','show_converstions.php')">שיחות ממתינות</button>

		
		
		
		
		
		
		
 
 
 
				
				</td>
				<td id="update" class="td_add_product" >
				
				<button class="buttom_conv" onclick="use_ajax('update','update_products')">עדכון ומחיקת מוצרים</button>
				
				</td>
			</tr>
			<tr>
				<td class="td_add_product" >
				<strong>המוצרים שלי :</strong>
				
				<table style="width:100%; ">
				<tr>
				<td style="text-decoration: underline"> <strong>שם מוצר</strong></td>
				<td style="text-decoration: underline"><strong>מחיר</strong></td>
				
				</tr>
				<?php
							
		
		       $result = $conn->query("SELECT * FROM product where p_shop_id=\"$id\"");
			
			
			
			
				if ($result->num_rows > 0)
				{
	               while($row1 = $result->fetch_array(MYSQLI_ASSOC))
					{
						
						echo  ' <tr id="supp_product" class="supp_product"	> <td id="disp">'.$row1['p_description'].'</td> <td id="disp">'.$row1['p_cost'].'</td>  </tr>'  ;                    

					}
					}
			//$result->free(); 	
				
				
				
			?>

				
				</table>
				
				
				
				</td>
				
				
				<td id="td_add_product" class="td_add_product">
				

				
				
				<button class="buttom_add_product" onclick="use_ajax('td_add_product','add_product_supplier.php')">שלח הזמנת לקוח</button>

				
				
				</td>
			</tr>
		</table>
		
		
		
		
		
		</td>
		



		
		
		<td class ="suppliers_td_right" valign="top" dir="rtl">
		<i style='font-size:36px' class='fas'>&#xf0d1;</i>
		<br>
		ספק	:<?php echo $_SESSION["supp_name"]?>
		<br>
		<p class="customers_p">  מספר השיחות הממתינות לך: <?php
		
            $resultNumConv = $conn->query(" SELECT * FROM `chat` WHERE t1 ='s_".$_SESSION['supp_id']."' GROUP BY t2");
		    $numOfConv = $resultNumConv->num_rows;
		   

                                                                                     echo $numOfConv   ?></p>
		

		
		<p class="customers_p">  סה"כ הכנסות: <?php 
	

     $id_rev=$_SESSION['supp_id'];	
     $result33 = $conn->query("SELECT SUM(l_price) FROM log  where l_S_id=\"$id_rev\"");
	 $row13 = $result33->fetch_array(MYSQLI_ASSOC);
	
     $sum =   $row13['SUM(l_price)'];
	 
	 echo number_format((float)$sum, 2, '.', '');
	  
                                                              ?></p>
		
		
		
		
		
		</td>
	
	
	
	
	
	
	</tr>
</table>


<br><br><br><br><br><br>
<?php 

	include "footer_inc.php";
 	              				 ?>

	 	              				 
 	              				

</body>

</html>
