<?php
	session_start();
	if (isset($_SESSION['err'])){

$err =  $_SESSION['err'];
}  
	
	 		
?>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>signin_adminstrator</title>




<script>
function enter() { 


	if(login==""){
	document.getElementById('msg').innerHTML='אנא הכנס שם משתמש';
	document.getElementById('login').focus();

	return;
	}


	else{
		document.admin.submit();
		} 


}






</script>


</head>

<body>
<?php 

	include "header_inc.php";
 	              				 ?>




<div class="signin_div">

<p id="head" class=" sign_in_p"> כניסת ספק כמנהל מערכת</p>
<br>


<form name="admin" method="post" action="admin_check_signin.php">

<input id="login" name="login" class="input_signin" type="text" placeholder="שם משתמש" >
<br><br><br>
<input id="pass" name="password" class="input_signin" type="password" placeholder="סיסמה">
<br>
<input id="datetime" name="dt" type="hidden" style="display:none">
</form>
<br><br>


<button class="signin_buttom" onclick="enter()">כניסה</button>


</div>
 	              				 
 	              				 
 	              				 
<script > 
var today = new Date();
var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();

document.getElementById("datetime").value = date+' '+time+'\n';



</script>
          
<script>
var eror = '<?php echo $err ;?>';
document.getElementById('head').innerHTML= eror;
document.getElementById('head').style.color='red';
</script>
	              				 


<?php 

	include "footer_inc.php";
 	              				 ?>


</body>

</html>
