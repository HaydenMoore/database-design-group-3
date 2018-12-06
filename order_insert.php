<!DOCTYPE html>
<html> 
<body >
<div align="center">
<?php include('Navigation.html'); ?>
<br>
	<head>
      <title>Create Order</title>
	  <link rel="stylesheet" href="main.css">
	</head>
<br><br><br><br>

	<?php
		require("public_html/tableshow.php");
		require("public_html/dbconnect.php");
	  
         if(isset($_POST['add'])) {
            
            $i_orderID = $_POST['i_orderID'];
            $i_UPC = $_POST['i_UPC'];
            $i_customerID = $_POST['i_customerID'];
            $i_employeeID = $_POST['i_employeeID'];
            $i_quanity = $_POST['i_quanity'];
            
   
            $sql = "INSERT INTO orders ".
               "(order_ID, UPC, customer_id, employee_id, quanity) "."VALUES ".
               "('$i_orderID','$i_UPC','$i_customerID', '$i_employeeID', '$i_quanity')";
            
            $retval = mysqli_query($conn, $sql);
         
            if(! $retval ) {
               die('Could not enter data: ' . mysqli_error($conn));
            }
         
            echo "Entered data successfully\n";
             $sql = "update inventory set quantity=quantity-($i_quanity) where UPC = "."($i_UPC)";
             
             $retval = mysqli_query($conn, $sql);
             
             if(! $retval ) {
                 die('Could not enter data: ' . mysqli_error($conn));
             }
             
			echo " <br> Order table after insertion <br>";
			show_orders($conn);
			
            mysqli_close($conn);
         } 
		 else if(isset($_POST['show'])){
			 
			 show_inventory($conn);
		 }	 
		 
		 else {
      ?>
	  <br><br><br><br>
     <p>Enter Order information for insertion <br> </p>
      <form method = "post" action = "<?php $_PHP_SELF ?>">
         <table width = "600" border = "0" cellspacing = "1" cellpadding = "2">
            <tr>
               <td width = "250">Order ID</td>
               <td>
                  <input name = "i_orderID" type = "text" id = "i_orderID">
               </td>
            </tr>
         
            <tr>
               <td width = "250">UPC</td>
               <td>
                  <input name = "i_UPC" type = "text" id = "i_UPC">
               </td>
            </tr>
         
            <tr>
               <td width = "250">Customer ID</td>
               <td>
                  <input name = "i_customerID" type = "text" id = "i_customerID">
               </td>
            </tr>
      
            <tr>
               <td width = "250">Employee ID</td>
               <td> <input name="i_employeeID" type= "text" id = "i_employeeID"> </td>
            </tr>
            <tr>
               <td width = "250"></td>
               <td> </td>
            </tr>

            <tr>
                <td width = "250">Quantity</td>
                <td> <input name="i_quanity" type= "text" id = "i_quanity"> </td>
            </tr>
            <tr>
                <td width = "250"></td>
                <td> </td>
            </tr>
         
            <tr>
               <td width = "250"> </td>
               <td>
                  <input name = "add" type = "submit" id = "add"  value = "insert">
               </td>
            </tr>
		</table>
	  
   <?php
      }
   ?>
</div>
</body> </html>
