<!DOCTYPE html>
<html> 

	<head>
      <title>Order Page</title>
	  <link rel="stylesheet" href="main.css">
	</head>

<body>
<div align="center">
<?php include('Navigation.html'); ?>
<br>
<p>Click the link to create order. <br> </p>
<tr>
<td><a href="order_insert.php" style="color:blue;font-weight:bold;">Create </a> &nbsp&nbsp&nbsp&nbsp;</td>
</tr>
<table>
<?php
		require("public_html/dbconnect.php");	  
		require("public_html/tableshow.php");
				
		show_orders($conn);
		?>

</div>
</body> </html>
