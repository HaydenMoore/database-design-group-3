<!DOCTYPE html>
<html> 
<body >
<div align="center">
<?php include('Navigation.html'); ?>
<br>
	<head>
      <title>Update Record in Employee Table</title>
	  <link rel="stylesheet" href="main.css">
	</head>
<br><br><br><br>

	<?php
		require("public_html/tableshow.php");
		require("public_html/dbconnect.php");
	  
         if(isset($_POST['add'])) {
            
           
            $i_ID = $_POST['i_ID'];
             $i_ID_U = $_POST['i_ID_U'];
   
            $sql = "UPDATE employee SET employee_id = ".$i_ID_U." WHERE employee_id = ".$i_ID."";
            
			//mysqli_select_db($conn,'university');
            $retval = mysqli_query($conn, $sql);
         
            if(! $retval ) {
               die('Could not enter data: ' . mysqli_error($conn));
            }
         
            echo "Entered data successfully\n";
			
			echo " <br> Employee table after deletion <br>";
			show_employee($conn);
			
            mysqli_close($conn);
         } 
		 else if(isset($_POST['show'])){
			 
			 show_employee($conn);
		 }	 
		 
		 else {
      ?>
	  <br><br><br><br>
     <p>Enter Employee information for deletion <br> </p>
      <form method = "post" action = "<?php $_PHP_SELF ?>">
         <table width = "600" border = "0" cellspacing = "1" cellpadding = "2">
            <tr>
               <td width = "250">Employee ID</td>
               <td>
                  <input name = "i_ID" type = "text" id = "i_ID">
               </td>
            </tr>
             <tr>
               <td width = "250">Employee ID (UPDATED)</td>
               <td>
                  <input name = "i_ID_U" type = "text" id = "i_ID_U">
               </td>
            </tr>
            <tr>
               <td width = "250"> </td>
               <td>
                  <input name = "add" type = "submit" id = "add"  value = "update">
               </td>
            </tr>
            
		</table>
	  
   <?php
      }
   ?>
</div>
</body> </html>
