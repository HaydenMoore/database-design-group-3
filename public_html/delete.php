<!DOCTYPE html>
<html>

   <head>
      <title>Delete Instructor in MySQL Database</title>
   </head>

   <body>
   <div style="height:900px; background-color: lightblue;" align="center">
      <?php
	  
		require("tableshow.php");
		require("dbconnect.php");
	  
         if(isset($_POST['delete'])) {
            
            $i_ID = $_POST['i_ID'];
			
			echo " <br> Instructor table before deletion <br>";
			show_instructor($conn);
   
            $sql = "DELETE FROM instructor WHERE ID = ".$i_ID."";
            
            $retval = mysqli_query($conn, $sql);
         
            if(! $retval ) {
               die('Could not delete data: ' . mysqli_error($conn));
            }
         
            echo "Deleted instructor successfully\n";
			
			echo " <br> Instructor table after deletion <br>";
			show_instructor($conn);
			
            mysqli_close($conn);
         } 
		 else if(isset($_POST['show'])){
			 
			 show_instructor($conn);
		 }	 
		 
		 else {
      ?>
	  <br><br><br><br>
     <p>Enter Instructor information for deletion <br> </p>
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
                  <input name = "delete" type = "submit" id = "delete"  value = "delete">
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