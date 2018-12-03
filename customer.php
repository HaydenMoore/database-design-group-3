<!DOCTYPE html>
<html>

   <head>
		<title>Update InstructorSalary in MySQL Database</title>
		<link rel="stylesheet" href="main.css">
   </head>

   <body>
   <div align="center">
      <?php include('Navigation.html'); ?>
      <?php
	  
		require("public_html/tableshow.php");
		require("public_html/dbconnect.php");
	  
         if(isset($_POST['update'])) {
            
            $i_ID = $_POST['i_ID'];
			
			echo " <br> Instructor table before update <br>";
			show_instructor($conn);
   
            $sql = "UPDATE instructor SET salary = salary * 1.10 WHERE ID = ".$i_ID."";
            
            $retval = mysqli_query($conn, $sql);
         
            if(! $retval ) {
               die('Could not delete data: ' . mysqli_error($conn));
            }
         
            echo "Updated instructor salary successfully\n";
			
			echo " <br> Instructor table after update <br>";
			show_instructor($conn);
			
            mysqli_close($conn);
         } 
		 else if(isset($_POST['show'])){
			 
			 show_instructor($conn);
		 }	 
		 
		 else {
      ?>
	  <br><br><br><br>
     <p>Enter Instructor information for update <br> </p>
      <form method = "post" action = "<?php $_PHP_SELF ?>">
         <table width = "600" border = "0" cellspacing = "1" cellpadding = "2">
            <tr>
               <td width = "250">ID</td>
               <td>
                  <input name = "i_ID" type = "text" id = "i_ID">
               </td>
            </tr>

            <tr>
               <td width = "250"></td>
               <td> </td>
            </tr>
         
            <tr>
               <td width = "250"> </td>
               <td>
                  <input name = "update" type = "submit" id = "update"  value = "update">
               </td>
            </tr>
			
         </table>
   
	  
   <?php
      }
   ?>
   <hr width="50">
<a href="Frontpage.html" style="color:red;font-weight:bold;">Home</a>
<hr width="50">
   </div>
   
   </body>
</html>