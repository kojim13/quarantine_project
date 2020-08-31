<?php
	session_start();	
	include "inc_db.php"; 
	unset($_SESSION['err']);		
?>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>check_signin</title>
</head>

<body>

<?php 

	$login = $_REQUEST['login'];
	$_SESSION['customer_login'] = $login;
	
	$pass = $_REQUEST['password'];

	$dt = $_REQUEST['dt'];
		
	
    $q_update_dt = "UPDATE `user` SET `dt`=\"$dt\" WHERE login =\"$login\"";
    
    $conn->query($q_update_dt);
    
	$query = "select *  from user where login=\"$login\" and password=\"$pass\"";
	
	if (!$result = $conn->query($query)) exit;
	
	if ($result->num_rows == 0) {
		$_SESSION['err'] = 'שם משתמש/סיסמה לא נכונים';
		header('Location:signin.php');
	} else {
	        $row = $result->fetch_array(MYSQLI_ASSOC);
	        $_SESSION['customer_id'] = $row['id'];
	        $_SESSION['customer_name'] =  $row["name"];
	        $_SESSION['customer_address'] = $row["address"];
	        $_SESSION['customer_citycode']=$row["town"];
	        
	        $citycode = $_SESSION['customer_citycode'];



            $result4 = $conn->query("select t_city from town where t_id=\"$citycode\"");
			$city =  $result4->fetch_array(MYSQLI_ASSOC);
			$_SESSION['customer_city'] = $city["t_city"];
			
			
		    $result2 = $conn->query("select count(*) as 'num' from user");
		    $num = $result2->fetch_array(MYSQLI_ASSOC);
			$_SESSION['numofusers'] = $num["num"];
			
			$result3 = $conn->query("select count(*) as 'num' from supplier");
		    $numsupp = $result3->fetch_array(MYSQLI_ASSOC);
			$_SESSION['numofsupp'] = $numsupp["num"];

			$resultNumConv = $conn->query("SELECT * FROM chat GROUP BY t1,t2 ");
		    $numOfConv = $resultNumConv->num_rows;
		    $_SESSION['numofconv'] = $numOfConv;
		    
		    header('Location:customers.php');

	        
	        
	        
	        
	        }













?>




</body>

</html>
