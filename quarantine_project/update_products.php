<?php
	session_start();	
	include "inc_db.php"; 
	unset($_SESSION['err']);
	$id=$_SESSION['supp_id'];		
?>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>update_products</title>

</head>

<body>

<?php   

$query = "select *  from shop where s_id=\"$id\"";
$result =$conn->query($query);
$row = $result->fetch_array(MYSQLI_ASSOC);
    $supp_id = $row['s_id'];   
    $supp_name =  $row["s_name"];
    $supp_citycode= $row["s_town_id"];
    $location =$row["s_location"];
    $phone=$row["s_phone"]; 




$result4 = $conn->query("select t_city from town where t_id=\"$supp_citycode\"");
$city =  $result4->fetch_array(MYSQLI_ASSOC);
$city_supp = $city["t_city"];





?>

<div style="width:100%;height:300px; overflow-y:auto;">



	<table style="width: 100%" dir="rtl">
		<tr>
			<td>שם ספק :  <?php echo $supp_name;?> </td>
			<td> קוד ספק : <?php echo $supp_id;?> </td>
			<td>עיר : <?php echo $city_supp;?>  </td>
		</tr>
		<tr>	
			<td>כתובת :  <?php echo $location;?>  </td>
			<td> טלפון : <?php echo $phone;?>  </td>
		</tr>
	</table>
	

<div id="frame" style="width: 100%;height:50%;">

	<table style="width: 100%;height:100%; ;text-align:center;">
		<tr>
			<td   > <button class="ajax_buttom" onclick="use_ajax('frame','frame_update_product.php')">עדכן מוצר</button></td>
			<td ><button class="ajax_buttom" onclick="use_ajax('frame','frame_insert_new_product.php')">הוסף מוצר</button></td>
		</tr>
	</table>
</div>	



</div>


</body>

</html>




