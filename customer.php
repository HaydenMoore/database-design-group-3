<!DOCTYPE html>
<html> 

	<head>
      <title>Employee Page</title>
	  <link rel="stylesheet" href="main.css">
	</head>

<body>
<div align="center">
<?php include('Navigation.html'); ?>
<br>
<p>Here is the list of our customers. Make additions, deletions when needed. <br> </p>
<tr>
<td><a href="customer_insert.php" style="color:blue;font-weight:bold;">Insert </a> &nbsp&nbsp&nbsp&nbsp;</td>
<td><a href="customer_delete.php" style="color:blue;font-weight:bold;">Delete </a> &nbsp&nbsp&nbsp&nbsp;</td>
</tr>
<table>
<?php
		require("public_html/dbconnect.php");	  
		require("public_html/tableshow.php");
				
		show_customer($conn);
		?>

</div>
</body> </html>