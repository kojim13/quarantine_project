<?php
	session_start();	
	include "inc_db.php"; 
	unset($_SESSION['err']);
	
	$p_shop_id=$_SESSION['supp_id'];
	
    $product_name = $_REQUEST['p_name'];
    $product_category = $_REQUEST['p_category'];
    $product_cost = $_REQUEST['p_cost'];
		
?>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>add_new_product_DB</title>
</head>

<body>





<?php     






header('Location:suppliers.php');




?>



</body>

</html>
