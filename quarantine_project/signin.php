<?php
	session_start();
	if (isset($_SESSION['err'])){

$err =  $_SESSION['err'];
}  
	
	 		
?>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>signin</title>

<script>

function enter() { 

var btn_client = document.getElementById('clt');
var btn_supplier = document.getElementById('supp');

if(btn_client.checked){

var login = document.getElementById('login').value;
var password = document.getElementById('pass').value;

console.log(login);


if(login==""){
document.getElementById('head').innerHTML='אנא הכנס שם משתמש';
document.getElementById('login').focus();
console.log(login);
return;
}


else{


document.sign_in.submit();
} 


}
 
  else if (btn_supplier.checked)    { alert("NOT REQUESTED!!!");}
  else    {alert("YOU HAVE TO CHOOSE!");  }



}


</script>



</head>

<body>

<?php 

	include "header_inc.php";
 	              				 ?>
 	              				 
 	              				 
 	              				 
 	              				 




<div class="signin_div">

<p id="head" class=" sign_in_p">! ברוכים הבאים</p>
<br>


<form name="sign_in" method="post" action="check_signin.php">

<input id="login" name="login" class="input_signin" type="text" placeholder="שם משתמש" >
<br><br><br>
<input id="pass" name="password" class="input_signin" type="password" placeholder="סיסמה">
<br>
<input id="datetime" name="dt" type="hidden" style="display:none">
</form>
<br><br>

<table id="tblbtns"  align="center" >
	
	<tr>
		<td>לקוח</td>
		<td><input type="radio" name="type" value="client" id="clt" > <i style='font-size:24px' class='fas'>&#xf508;</i></td>
	</tr>
	<tr>
		<td>ספק</td>
		<td> <input type="radio" name="type" value="supplier" id="supp" > <i style='font-size:24px' class='fas'>&#xf0d1;</i></td>
	</tr>
	
</table>

<button class="signin_buttom" onclick="enter()">כניסה</button>


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
