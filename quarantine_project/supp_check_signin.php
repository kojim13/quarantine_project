<?php
	session_start();	
	include "inc_db.php"; 
	unset($_SESSION['err']);		
?>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>supp_check_signin.php</title>
</head>

<body>

<?php   

    $login = $_REQUEST['login'];
	$_SESSION['supp_login'] = $login;
	
	$pass = $_REQUEST['password'];

	$dt = $_REQUEST['dt'];
		
	
    $q_update_dt = "UPDATE `user` SET `dt`=\"$dt\" WHERE login =\"$login\"";
    
    $conn->query($q_update_dt);
    
    
    $query = "select *  from user where login=\"$login\" and password=\"$pass\"";
	
	if (!$result = $conn->query($query)) exit;
	
	if ($result->num_rows == 0) {
		$_SESSION['err'] = 'שם משתמש/סיסמה לא נכונים';
		header('Location:signin_suppliers.php');
	} 
	
	else{
	$row = $result->fetch_array(MYSQLI_ASSOC);
	
    $supp_id = $row['id'];   
    $supp_name =  $row["name"];
    $supp_citycode= $row["town"];
    
    
    $result->free(); 
    
    $query = "select *  from supplier INNER join user on supplier.s_id = user.id where s_id=\"$supp_id\" and password=\"$pass\"";

    if (!$result = $conn->query($query)) exit;
	
	if ($result->num_rows == 0) {
		$_SESSION['err'] = 'המשתמש אינו ספק';
		header('Location:signin_suppliers.php');
	} else {
        
            $_SESSION['supp_id']= $supp_id;
   			$_SESSION['supp_name']=$supp_name;
    		$_SESSION['supp_citycode']= $supp_citycode;
	   

        $q_update_dt = "UPDATE user SET dt=\"$dt\" WHERE login =\"$login\"";
    
        $conn->query($q_update_dt);

        
        header('Location:suppliers.php');
	
	}

}












 ?>



</body>

</html>
