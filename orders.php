<!DOCTYPE html>
<html> 

	<head>
      <title>Refund Page</title>
	  <link rel="stylesheet" href="main.css">
	</head>

<body>
<div align="center">
<?php include('Navigation.html'); ?>
<br>
<p>Choose the function to either create or display info for refundss. <br> </p>
<tr>
<td><a href="refund_insert.php" style="color:blue;font-weight:bold;">Create </a> &nbsp&nbsp&nbsp&nbsp;</td>
<td><a href="refund_display.php" style="color:blue;font-weight:bold;">Display</a> &nbsp&nbsp&nbsp&nbsp;</td>
</tr>
<table>
<?php
		require("public_html/dbconnect.php");	  
		require("public_html/tableshow.php");
				
		show_refunds($conn);
		?>

</div>
</body> </html>
