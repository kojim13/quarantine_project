<?php
	session_start();	
	include "inc_db.php"; 
	unset($_SESSION['err']);
	
	$id=$_SESSION['supp_id'];
	
	$char_id='s_'.$_SESSION['supp_id'];
	
	
		
?>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>show_converstions</title></head>

<body>
				 
<strong>שיחות מלקוחות :</strong>
				<br><br>
				<strong>אנא בחר לקוח לפתיחת הצ'ט
				</strong>
				<br>
				<select id="Selectcustomer2" name="Selectcustomer2">
				<?php
				
				$u='u_';
				
			    $sql = ("SELECT * FROM `chat` INNER JOIN user ON chat.t2=CONCAT(\"$u\",user.id) WHERE chat.t1=\"$char_id\" GROUP BY user.name");				       
				$resultcustomer = $conn->query($sql);
			
				if ($resultcustomer->num_rows > 0)
				{
					while($row = $resultcustomer->fetch_array(MYSQLI_ASSOC))
					{
						
						echo '<option value="'.$row['id'].'" >'.$row['name'].'</option>';

					}
					$resultcustomer->free();
				}
				 else{echo '<option > אין שיחות ממתינות </option>';}
			?>
							
				</select>
				
				<br><br><br>
				<button class="ajax_buttom"  onclick="open_chat('chat')">פתח צ'ט עם לקוח</button>
<br><br><br>



</body>

</html>
