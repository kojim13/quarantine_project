<?php
	session_start();	
	include "inc_db.php"; 
	unset($_SESSION['err']);
	
	$id=$_SESSION['supp_id'];

	$name = $_REQUEST['supp_name'];

	$adress = $_REQUEST['supp_adress'];
	$tel = $_REQUEST['supp_tel'];	
	
	

  $conn->query("UPDATE `shop` SET `s_name`=\"$name\",`s_location`=\"$adress\",`s_phone`=\"$tel\" WHERE`s_id`=\"$id\"");


 

	
	
?>
	
<script>
window.top.location.href = 'admin_page.php';

</script>
