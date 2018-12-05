<!DOCTYPE html>
<html> 
<body >
<div align="center">
<?php include('Navigation.html'); ?>
<br>
	<head>
      <title>Delete Record in Departments Table</title>
	  <link rel="stylesheet" href="main.css">
	</head>
<br><br><br><br>

	<?php
	  
		require("public_html/dbconnect.php");	  
		require("public_html/tableshow.php");
	  
         if(isset($_POST['add'])) {
            
            
            $i_name = $_POST['i_name'];
            
			
			echo " <br> Departments table before deletion <br>";
			show_departments($conn);
   
            $sql = "DELETE FROM departments WHERE dept_name=".$i_name."";
            
			//mysqli_select_db($conn,'university');
            $retval = mysqli_query($conn, $sql);
         
            if(! $retval ) {
               die('Could not enter data: ' . mysqli_error($conn));
            }
         
            echo "Entered data successfully\n";
			
			echo " <br> Departments table after deletion <br>";
			show_departments($conn);
			
            mysqli_close($conn);
         } 
		 else if(isset($_POST['show'])){
			 
			 show_departments($conn);
		 }	 
		 
		 else {
      ?>
	  <br><br><br><br>
     <p>Enter Departments information for deletion <br> </p>
      <form method = "post" action = "<?php $_PHP_SELF ?>">
         <table width = "600" border = "0" cellspacing = "1" cellpadding = "2">
            <tr>
               <td width = "250">Name</td>
               <td>
                  <input name = "i_name" type = "text" id = "i_name">
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
