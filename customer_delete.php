<!DOCTYPE html>
<html> 
<body >
<div align="center">
<?php include('Navigation.html'); ?>
<br>
	<head>
      <title>Delete Record in Customer Table</title>
	  <link rel="stylesheet" href="main.css">
	</head>
<br><br><br><br>

	<?php
		require("public_html/tableshow.php");
		require("public_html/dbconnect.php");
	  
         if(isset($_POST['add'])) {
            
           
            $i_UPC = $_POST['i_UPC'];
   
            $sql = "DELETE FROM customer WHERE UPC = ".$i_UPC."";
            
			//mysqli_select_db($conn,'university');
            $retval = mysqli_query($conn, $sql);
         
            if(! $retval ) {
               die('Could not enter data: ' . mysqli_error($conn));
            }
         
            echo "Entered data successfully\n";
			
			echo " <br> Customer table after deletion <br>";
			show_customer($conn);
			
            mysqli_close($conn);
         } 
		 else if(isset($_POST['show'])){
			 
			 show_customer($conn);
		 }	 
		 
		 else {
      ?>
	  <br><br><br><br>
     <p>Enter Customer information for deletion <br> </p>
      <form method = "post" action = "<?php $_PHP_SELF ?>">
         <table width = "600" border = "0" cellspacing = "1" cellpadding = "2">
            <tr>
               <td width = "250">Customer ID</td>
               <td>
                  <input name = "i_UPC" type = "text" id = "i_UPC">
               </td>
            </tr>
            <tr>
               <td width = "250"> </td>
               <td>
                  <input name = "add" type = "submit" id = "add"  value = "delete">
               </td>
            </tr>
            
		</table>
	  
   <?php
      }
   ?>
</div>
</body> </html>
