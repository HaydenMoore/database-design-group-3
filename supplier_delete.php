<!DOCTYPE html>
<html> 
<body >
<div align="center">
<?php include('Navigation.html'); ?>
<br>
	<head>
      <title>Delete Record in Supplier Table</title>
	  <link rel="stylesheet" href="main.css">
	</head>
<br><br><br><br>

	<?php
	  
		require("public_html/dbconnect.php");	  
		require("public_html/tableshow.php");
	  
         if(isset($_POST['add'])) {
            
            
            $i_ID = $_POST['i_ID'];
            
			
			echo " <br> Supplier table before deletion <br>";
			show_supplier($conn);
   
            $sql = "DELETE FROM supplier WHERE supplier_id=$i_ID";
            
			//mysqli_select_db($conn,'university');
            $retval = mysqli_query($conn, $sql);
         
            if(! $retval ) {
               die('Could not enter data: ' . mysqli_error($conn));
            }
         
            echo "Entered data successfully\n";
			
			echo " <br> Supplier table after deletion <br>";
			show_supplier($conn);
			
            mysqli_close($conn);
         } 
		 else if(isset($_POST['show'])){
			 
			 show_supplier($conn);
		 }	 
		 
		 else {
      ?>
	  <br><br><br><br>
     <p>Enter Supplier information for deletion <br> </p>
      <form method = "post" action = "<?php $_PHP_SELF ?>">
         <table width = "600" border = "0" cellspacing = "1" cellpadding = "2">
            <tr>
               <td width = "250">ID</td>
               <td>
                  <input name = "i_ID" type = "text" id = "i_ID">
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