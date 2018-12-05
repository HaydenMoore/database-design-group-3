<!DOCTYPE html>
<html> 
<body >
<div align="center">
<?php include('Navigation.html'); ?>
<br>
	<head>
      <title>Insert Record in Inventory Table</title>
	  <link rel="stylesheet" href="main.css">
	</head>
<br><br><br><br>

	<?php
		require("public_html/tableshow.php");
		require("public_html/dbconnect.php");
	  
         if(isset($_POST['add'])) {
            
           
            $i_UPC = $_POST['i_UPC'];
            $i_dept = $_POST['i_dept'];
            $i_ID = $_POST['i_ID'];
            $i_quant = $_POST['i_quant'];
            
   
            $sql = "INSERT INTO Inventory ".
               "(UPC, dept_name, supplier_id, quantity) "."VALUES ".
               "('$i_UPC','$i_dept','$i_ID', '$i_quant')";
            
			//mysqli_select_db($conn,'university');
            $retval = mysqli_query($conn, $sql);
         
            if(! $retval ) {
               die('Could not enter data: ' . mysqli_error($conn));
            }
         
            echo "Entered data successfully\n";
			
			echo " <br> Inventory table after insertion <br>";
			show_inventory($conn);
			
            mysqli_close($conn);
         } 
		 else if(isset($_POST['show'])){
			 
			 show_inventory($conn);
		 }	 
		 
		 else {
      ?>
	  <br><br><br><br>
     <p>Enter Inventory information for insertion <br> </p>
      <form method = "post" action = "<?php $_PHP_SELF ?>">
         <table width = "600" border = "0" cellspacing = "1" cellpadding = "2">
            <tr>
               <td width = "250">UPC</td>
               <td>
                  <input name = "i_UPC" type = "text" id = "i_UPC">
               </td>
            </tr>
         
            <tr>
               <td width = "250">Department Name</td>
               <td>
                  <input name = "i_dept" type = "text" id = "i_dept">
               </td>
            </tr>
         
            <tr>
               <td width = "250">Supplier ID</td>
               <td>
                  <input name = "i_ID" type = "text" id = "i_ID">
               </td>
            </tr>
      
            <tr>
               <td width = "250">Quantity</td>
               <td> <input name="i_quant" type= "text" id = "i_quant"> </td>
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
