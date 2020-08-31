<?php
	session_start();	
	include "inc_db.php"; 
	unset($_SESSION['err']);
	
	$id=$_SESSION['supp_id'];
	
  		
?>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>delete_supplier.php</title>
</head>

<body>


<?php     



$sql = "DELETE FROM `supplier` WHERE `s_id` =\"$id\"";


$conn->query($sql);

header('Location:index.php');




?>

</body>

</html>
