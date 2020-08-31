<?php
	session_start();	
		unset($_SESSION['err']);
	
?>

<html>

<head>
<link rel="stylesheet" type="text/css" href ="design_bar.css"   media="all">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Untitled 1</title>
<style>
body{
	
	background-image:none;
}

</style>
<script>
function open_talk()
{
	t1 = window.open("chat.php?t1=u_5&t2=s_12","T1","width=350px; height=500px;");
	t2 = window.open("chat.php?t1=u_5&t2=s_12","T2","width=350px; height=500px;");
	
}

var myWindow;



function openWin() {
    myWindow = window.open("new_order.php", "neworder", "width=700, height=500");
}


</script>


</head>

<body>
<table class="custbl" dir="rtl" cellpadding="0" >
	<tr>
		<td colspan="5" style="height:2%" >
		 <p class=" hline white"> ברוך הבא : <?php echo $_SESSION['name']  ?> </p></td>
	</tr>
	<strong><tr>
	
		<td style=" height: 15%;" ><form method="post" action="client_report.php" style="width:100%;height:90%" ><button class="button_white_frame">הצג דוחות רכישה</button></form></td>
		<td >&nbsp;</td>
		<td  style="width:40%;" rowspan="2"><button class="button_neworder" onclick="openWin()">הזמנה חדשה</button></td>
		<td >&nbsp;</td>
		<td> </td>
	</tr></strong>
	<tr>
		<td style=" height:15%"><button  onclick="open_talk()" class="button_white_frame">צ'ט היכרות</button></td>
		<td></td>
		<td></td>
		<td></td>

	</tr>
	
	<tr>
	
	<td   style="height:5%;" ><p class=" hlineframe white " > מספר השיחות<br> המתקיימות כרגע :	<?php echo $_SESSION['convNum']; ?></p></td>
	<td   style="height:5%;" ></td>
	<td   style="height:5%; " ><p class=" hlineframe white " >מספר הלקוחות <br>הקיימים במערכת : 	<?php echo $_SESSION['numofusers']; ?></p></td>
	<td   style="height:5%;" ></td>
	<td   style="height:5%;" ><p class=" hlineframe white " >מספר הספקים<br> הקיימים במערכת : 	<?php echo $_SESSION['numofsupp']; ?></p></td>
	</tr>
</table>



</body>

</html>
