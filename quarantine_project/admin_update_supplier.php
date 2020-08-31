<?php
	    session_start();	
		unset($_SESSION['err']);
		  include "inc_db.php";
		  $id=$_SESSION['supp_id'];
		
	
?>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>admin_update_supplier</title>
<style>


body{
	font-family:"Calibri Light";
	background-color:#FBF9F1;
	margin:0 0 0 0;
	overflow-y:auto;	
}


</style>
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
	<br><br>
	<div style="width:100%;text-align:center"dir="rtl">
	<form method="post" name="update_supp" action="update_supp_admin.php">
	<input type="text" name="supp_name" placeholder="הכנס שם חדש">
    <br><br>
    <input type="text" name="supp_adress" placeholder="הכנס כתובת חדשה">
    <br><br>
    <input type="number" name="supp_tel" placeholder="הכנס טלפון חדש">
    
    <br><br>
    <button type="submit" class="ajax_buttom">עדכן פרטים</button>
    
    </form>
	
	</div>




</body>

</html>
