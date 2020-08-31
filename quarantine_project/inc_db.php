<?php
	$host="localhost";
	$husername = "root";
	$hpassword = "";
	$hdatabase="gk2020b";
	$conn = new mysqli($host,$husername,$hpassword,$hdatabase);
	$conn->set_charset("utf8");		// enable Hebrew letters
	
	
// select field1 as id, field2 as description from user
// The 2 fields should be id and description
// document.getElementById().innerHTML = 
// 			showcombo("SelectCar",'select id as id, login as description from user');
	
?>