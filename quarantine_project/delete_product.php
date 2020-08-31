<?php
	session_start();	
	include "inc_db.php"; 
	unset($_SESSION['err']);
	
		
	
	$p_id=$_REQUEST['p_del'];
	
	echo $p_id; 
	
	$conn->query("DELETE FROM `product` WHERE p_id=\"$p_id\"");
	
	header('Location:suppliers.php');

	

	
	
?>
