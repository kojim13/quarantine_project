<?php
	session_start();	
	include "inc_db.php"; 
	unset($_SESSION['err']);
	
		
	
	$p_id=$_REQUEST['id_product'];
	
	$quantity = $_REQUEST['quantity'] ;
	$price = $_REQUEST['price'] ;
	$name = $_REQUEST['name'] ;
	
	
	
		

	$conn->query("UPDATE product SET p_description=\"$name\",p_cost=\"$price\",p_stock=\"$quantity\" WHERE p_id =\"$p_id\"");
	header('Location:suppliers.php');	


	
	
?>
