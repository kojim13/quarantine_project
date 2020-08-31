<?php
	session_start();
	if (isset($_SESSION['err'])){

$err =  $_SESSION['err'];
}  
	
	 		
?>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>subscribe</title>




<script>
function enter() { 


	if(login==""){
	document.getElementById('msg').innerHTML='אנא הכנס שם משתמש';
	document.getElementById('login').focus();

	return;
	}


	else{
		document.supp_sign_in.submit();
		} 


}






</script>


</head>

<body>
<?php 

	include "header_inc.php";
 	              				 ?>




<div class="signin_div" >
<br>
<p id="head" class=" sign_in_p" >רישום ספקים</p>

<i style='font-size:45px' class='fas icon' onclick="location.href='subscribe_supplier.php'">&#xf0d1;</i>
<br><br><br><br>
<hr>

<p id="head" class=" sign_in_p">רישום לקוחות</p>

<i style='font-size:45px;'  class='fas icon' onclick="location.href='subscribe_customer.php'">&#xf508;</i>





<br><br>


</div>
 	              				 
 	              				 
 	              				 
<script > 
var today = new Date();
var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();

document.getElementById("datetime").value = date+' '+time+'\n';



</script>
          
<script >
var eror = '<?php echo $err ;?>';
document.getElementById('head').innerHTML= eror;
document.getElementById('head').style.color='red';
</script>
	              				 


<?php 

	include "footer_inc.php";
 	              				 ?>


</body>

</html>
