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

		require("public_html/dbconnect.php");	  
		require("public_html/tableshow.php");
				
		show_customer($conn);
		show_supplier($conn);

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
   </div>
   
   </body>
</html>