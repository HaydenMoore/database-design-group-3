<!DOCTYPE html>
<html>

   <head>
      <title>Insert Record in Supplier Table</title>
	  <link rel="stylesheet" href="main.css">
	</head>

   <body>
   <div align="center">
		<?php include('Navigation.html'); ?>
		<br>
      <?php
	  
		require("public_html/dbconnect.php");	  
		require("public_html/tableshow.php");
	  
         if(isset($_POST['add'])) {
            
            if(! get_magic_quotes_gpc() ) {
               $i_name = addslashes ($_POST['i_name']);
               
            } else {
               $i_name = $_POST['i_name'];
               
            }
			$i_ID = $_POST['i_ID'];
			
			echo " <br> Supplier table before insertion <br>";
			show_supplier($conn);
   
            $sql = "INSERT INTO supplier ".
               "(supplier_id,supplier_name) "."VALUES ".
               "('$i_ID','$i_name')";
            
			//mysqli_select_db($conn,'university');
            $retval = mysqli_query($conn, $sql);
         
            if(! $retval ) {
               die('Could not enter data: ' . mysqli_error($conn));
            }
         
            echo "Entered data successfully\n";
			
			echo " <br> Supplier table after insertion <br>";
			show_supplier($conn);
			
            mysqli_close($conn);
         } 
		 else if(isset($_POST['show'])){
			 
			 show_supplier($conn);
		 }	 
		 
		 else {
      ?>
	  <br><br><br><br>
     <p>Enter Supplier information for insertion <br> </p>
      <form method = "post" action = "<?php $_PHP_SELF ?>">
         <table width = "600" border = "0" cellspacing = "1" cellpadding = "2">
            <tr>
               <td width = "250">ID</td>
               <td>
                  <input name = "i_ID" type = "text" id = "i_ID">
               </td>
            </tr>
         
            <tr>
               <td width = "250">Name</td>
               <td>
                  <input name = "i_name" type = "text" id = "i_name">
               </td>
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
   
   </body>
</html>