<?php
	session_start();	

	
?>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Check Page</title>



</head>

<body>




<?php
    include "inc_db.php";
  
            
            $l_product_name = $_REQUEST['product_name'];
            
            $l_u_id = $_REQUEST['costumer_id'];
            
            
            $l_s_id =$_SESSION['supp_id'];


 

			
			
			$result = $conn->query(" SELECT * FROM product WHERE p_description = \"$l_product_name\" and p_shop_id =\"$l_s_id\"");
			$row =  $result->fetch_array(MYSQLI_ASSOC);

            $l_product_id = $row['p_id'];
            $l_price = $row['p_cost'];
            
            
           

         

        


            $conn->query("INSERT INTO log VALUES (\"$l_s_id\",\"$l_u_id\",\"$l_product_id\",\"$l_price\",CURRENT_TIMESTAMP)");
            header('Location:suppliers.php');
 


	
?>






</body>

</html>
