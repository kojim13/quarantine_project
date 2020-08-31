<?php
	    session_start();	
		unset($_SESSION['err']);
		  include "inc_db.php";
		  	include "header_inc.php";
		  $id=$_SESSION['supp_id'];
		
	
?>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>admin_page</title>



<script>

function delete_supplier(){
if (confirm(['האם אתה בטוח שברצונך להימחק מן המערכת?'])){

location.href='delete_supplier.php'
}
else {alert(['פעולה לא בוצעה'])}

}

function customer_log_report(){

document.getElementById('mainframe').innerHTML=`<iframe style="width:100%;height:70%;" src="admin_report_customer_log.php"></iframe>`


}


function supplier_log_report(){

document.getElementById('mainframe').innerHTML= `<iframe style="width:100%;height:70%;" src="admin_report_supp_log.php"></iframe>`



}


function supplier_rev(){

document.getElementById('mainframe').innerHTML= `<iframe style="width:100%;height:70%;" src="admin_report_supp_revnue.php"></iframe>`



}


function customer_outcome(){
document.getElementById('mainframe').innerHTML= `<iframe style="width:100%;height:70%;" src="admin_report_customer_outcome.php"></iframe>`

} 

function update_supplier(){
document.getElementById('mainframe').innerHTML= `<iframe style="width:100%;height:70%;" src="admin_update_supplier.php"></iframe>`
}

function back() {

window.top.location.href = 'admin_page.php';


}

</script>
</head>

<body>
<div class="signin_div" style="width:80%;height:400px; left:10%;">



	<table style="width: 100%" dir="rtl">
		<tr>
			<td><h1> מנהל מערכת : <?php echo $_SESSION["supp_name"];?>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button class="ajax_buttom" onclick="back()">חזור למסך מנהל מערכת</button>  </h1></td>
		</tr>
	</table>

<div id="mainframe"  style="width:100%;height:100%; ">




	<table style="width: 100% ;height:78%; color:#6AAC56;font-weight:bolder ">
		<tr>
			<td style="border:thin black solid;border-radius:5px 5px 5px 5px " ><button class="ajax_buttom"  onclick="update_supplier()">עדכון פרטי ספק</button></td>
			<td style="border:thin black solid;border-radius:5px 5px 5px 5px" ><button class="ajax_buttom"  onclick="supplier_log_report()">דו"ח כניסת ספקים</button></td>
			<td style="border:thin black solid;border-radius:5px 5px 5px 5px;width:33%" ><button class="ajax_buttom" onclick="customer_log_report()">דו"ח כניסת לקוחות</button></td>
		</tr>
		<tr>
			<td style="border:thin black solid;border-radius:5px 5px 5px 5px" ><button class="ajax_buttom" onclick="delete_supplier()">מחק ספק מהמערכת</button></td>
			<td style="border:thin black solid;border-radius:5px 5px 5px 5px" ><button class="ajax_buttom" onclick="supplier_rev()">דו"ח מכירות ספק</button></td>
			<td style="border:thin black solid;border-radius:5px 5px 5px 5px" ><button class="ajax_buttom" onclick="customer_outcome()">דו"ח הכנסות על לקוחות</button></td>
		</tr>
	</table>





</div>



</div>


<?php 

	include "footer_inc.php";
 	              				 ?>
</body>

</html>
