<!DOCTYPE html>
<html> 

	<head>
      <title>Department Page</title>
	  <link rel="stylesheet" href="main.css">
	</head>

<body>
<div align="center">
<?php include('Navigation.html'); ?>
<br>
<p>Here is the list of our departments. Make additions, deletions, or updates when needed. <br> </p>
<tr>
<td><a href="supplier_insert.php" style="color:blue;font-weight:bold;">Insert </a> &nbsp&nbsp&nbsp&nbsp;</td>
<td><a href="supplier_delete.php" style="color:blue;font-weight:bold;">Delete </a> &nbsp&nbsp&nbsp&nbsp;</td>
<td><a href="update.php" style="color:blue;font-weight:bold;">Update </a> &nbsp&nbsp&nbsp&nbsp;</td>
</tr>
<table>
<?php
		require("public_html/dbconnect.php");	  
		require("public_html/tableshow.php");
				
		show_department($conn);
		?>

</div>
</body> </html>
