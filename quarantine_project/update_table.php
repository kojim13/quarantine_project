<form method="post" name="update_product" action="update_db.php">

<table style="width: 100% ;text-align:center">
	<tr>
	       <td><input name="name" type="text" placeholder="שם מוצר"></td>
		<td><input name="price" type="number" placeholder="מחיר"></td>
		<td> <input name="quantity" type="number" placeholder="כמות">
		<input type="hidden" id="id_product" name="id_product">
		
		</td>
       
	</tr>
	<tr>
	
		<td colspan="3" style="font-size:15px;">
		
	
		
		<button class="ajax_buttom" onclick="updatedb_product()" >עדכון פריט</button>
		
		
		
		
		</td>
		
		
	
	
	</tr>
</table>

</form>