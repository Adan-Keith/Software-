<?php
	$link=mysqli_connect("localhost", "root", "");
	mysqli_select_db($link,"hoteli");
?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Buyer</title>
 </head>
 <body>
 	<fieldset>
 <label >Food item:</label>
 <br>
<form name="form1" method="post" action="food2.php">
	<select name='food'>
		<?php
			$res=mysqli_query($link,"select * from food");
			while($row=mysqli_fetch_array($res))
			{
				echo "<option value=".$row["Foods"]." >".$row["Foods"]."-Price:".$row["Price"]."</option>";
				// echo $row["Foods"];
			}
		?>
	</select>
  <!-- <select id="food" name="food">

 	<option value="0">--Select Food--</option>
 	<option value="b">Burger</option>
 	<option value="pi">Pizza</option>
 	<option value="p">Pie</option>
 	
 </select> -->

 <br>
 <br>
 <label>Quantity:</label>
 <br>
 <input id="textbox" type="text" 	name="Quantity">
 
 <br> <br> <button id="btnsuccess" type="submit" value="ORDER">ORDER</button>
</form>  </fieldset> </body> </html>
 